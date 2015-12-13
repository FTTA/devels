<?php

class Controller_Ajax_Baseajax extends Controller_Template
{
    public function before()
    {
        parent::before();

        $this->is_logged    = Auth::check();
        $this->current_user = null;
        $this->lang         = Session::instance()->get('language', 'en');

        if ($this->is_logged)
        {
            $this->current_user = Auth::get_profile_fields();
            $this->current_user['id'] = Auth::get('id');
            $this->current_user['username'] = Auth::get('username');

            if (!empty($this->current_user['is_deleted']))
            {
                Auth::logout();
                die(json_encode(
                    ['status' => 'error', 'message' => 'error_msg_1'],
                    JSON_UNESCAPED_UNICODE
                ));
            }

            if (!empty($this->current_user['is_blocked']))
            {
                Auth::logout();
                die(json_encode(
                    ['status' => 'error', 'message' => 'User is blocked'],
                    JSON_UNESCAPED_UNICODE
                ));
            }
        }

        if (!AuthModule::accessGuard(
            \Request::active()->controller,
            \Request::active()->action,
            $this->current_user
        )) {
            die(json_encode(
                ['status' => 'error', 'message' => 'Access denied'],
                JSON_UNESCAPED_UNICODE
            ));
        }
    }
}