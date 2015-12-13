<?php
class Controller_Base extends Controller
{
    public function before()
    {
        parent::before();

        $this->template = View::forge('main_template');
        $this->template->styles  = ['bootstrap.css'];
        $this->template->scripts = [
            'jquery-1.9.0.min.js',
            'sys_func.js',
            'users_logout.js',
            'form_getter.js',
            'users_login.js',
            'page.js'
        ];

        $lSession             = Session::instance();
        $this->lang           = $lSession->get('language', 'en');
        $this->template->i18n = Model_Translations::getAll($this->lang);
        $this->is_logged      = Auth::check();
        $this->current_user   = null;

        $lSession->set('translation', $this->template->i18n);

        if ($this->is_logged)
        {
            $this->current_user = Auth::get_profile_fields();
            $this->current_user['id'] = Auth::get('id');
            $this->current_user['username'] = Auth::get('username');
            if (!empty($this->current_user['avatar_id']))
                $this->current_user['avatar'] = Model_Avatars::getById($this->current_user['avatar_id']);

            if (!empty($this->current_user['is_deleted']))
            {
                Auth::logout();
                HTTP::redirect('/main/accessDenied?msg=error_msg_1');
            }

            if (!empty($this->current_user['is_blocked']))
            {
                Auth::logout();
                HTTP::redirect('/main/accessDenied?msg=User is blocked');
            }
        }

        if (!AuthModule::accessGuard(
            \Request::active()->controller,
            \Request::active()->action,
            $this->current_user
        )) {
            //Request::forge('/main/accessDenied')->execute();
            Response::redirect('/main/accessDenied');
        }

        View::set_global('is_logged', $this->is_logged, false);
        View::set_global('current_user', $this->current_user, false);

        $this->template->header = View::forge('header');
    }

    public function after($response)
    {
        return parent::after($response);
    }
}