<?php
class Controller_Ajax_General extends Controller_Ajax_Baseajax
{
    public function action_lang()
    {
        $lLang = Input::post('lang', 'en');
        Session::instance()->set('language', $lLang);

        die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));
    }

    public function action_logout()
    {
        Auth::logout();
        die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));
    }

    public function action_login()
    {
        $lUsername  = Input::post('username', null);
        $lPassword  = Input::post('password', null);
        $lError     = ['status' => 'error', 'message' => 'error_msg_1'];
        if (empty($lUsername) || empty($lPassword))
            die(json_encode(['status' => 'error', 'message' => 'Missing params'], JSON_UNESCAPED_UNICODE));

        $lUser = Model_User::query()
            ->where('username', $lUsername)
            ->get_one();

        if (empty($lUser))
            die(json_encode($lError, JSON_UNESCAPED_UNICODE));

        $lUser = $lUser->to_array();

        $lUser['profile_fields'] = unserialize($lUser['profile_fields']);

        if (!empty($lUser['profile_fields']['is_deleted']))
            die(json_encode($lError, JSON_UNESCAPED_UNICODE));

        if (!empty($lUser['profile_fields']['is_blocked']))
            die(json_encode(['status' => 'error', 'message' => 'User is blocked'], JSON_UNESCAPED_UNICODE));

        if (Auth::login($lUsername, $lPassword))
            die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));
        die(json_encode($lError, JSON_UNESCAPED_UNICODE));
    }

    public function action_registration()
    {
        if ($this->is_logged) {
            die(json_encode([
                'status'  => 'error',
                'message' => 'You olready registered'
            ], JSON_UNESCAPED_UNICODE));
        }

        $lUsername  = Input::post('username', null);
        $lPassword  = Input::post('password', null);
        $lPassword2 = Input::post('password2', null);
        $lEmail     = Input::post('email', null);

        if (empty($lUsername)
            || empty($lPassword)
            || empty($lPassword2)
            || empty($lEmail)
            )
            $lError = 'Missing params';

        if ($lPassword !== $lPassword2)
            $lError = DifferentFunc::translation('passwords_mismatch');

        if (!empty($lError))
            die(json_encode(['status' => 'error', 'message' => $lError], JSON_UNESCAPED_UNICODE));

        try {
            Auth::create_user($lUsername, $lPassword, $lEmail, 1, ['role_id' => AuthModule::UR_USER]);
            Auth::login($lUsername, $lPassword);
        }
        catch (Exception $e) {

            $lError = $e->getMessage();
            die(json_encode(['status' => 'error', 'message' => $lError], JSON_UNESCAPED_UNICODE));
        }
        die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));
    }
}