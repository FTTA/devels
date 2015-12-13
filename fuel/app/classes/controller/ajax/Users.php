<?php

class Controller_Ajax_Users extends Controller_Ajax_Baseajax
{
    public function before()
    {
        parent::before();
        /*
        $this->is_logged    = Auth::check();
        $this->current_user = null;

        if ($this->is_logged)
        {
            $this->current_user = Auth::get_profile_fields();
            $this->current_user['id'] = Auth::get('id');
            $this->current_user['username'] = Auth::get('username');
        }*/

        if (!$this->is_logged) {
            die(json_encode(
                ['status' => 'error', 'message' => 'Login please'],
                JSON_UNESCAPED_UNICODE)
            );
        }

        $this->is_admin = $this->current_user['role_id'] == AuthModule::UR_ADMIN;
    }

    public function action_delete()
    {
        $lUserId = Input::post('user_id', null);

        if (!$lUserId || !is_numeric($lUserId))
            die(json_encode(
                ['status' => 'error', 'message' => 'Invalid user ID'],
                JSON_UNESCAPED_UNICODE)
            );

        $lUser = Model_User::query()
            ->where('id', $lUserId)
            ->get_one()
            ->to_array();

        $lUser = array_merge($lUser, unserialize($lUser['profile_fields']));
        $lIsOwner = $lUser['id'] == $this->current_user['id'];

        if (!$this->is_admin && !$lIsOwner)
            die(json_encode(
                ['status' => 'error', 'message' => 'Access denied'],
                JSON_UNESCAPED_UNICODE)
            );

        $lResult = Auth::update_user(['is_deleted' => true], $lUser['username']);

        if ($lResult) {
            if ($lIsOwner)
                Auth::logout();
            die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));
        }

        die(json_encode(['status' => 'error', 'message' => 'User was not deleted' ], JSON_UNESCAPED_UNICODE));

    }

    public function action_restore()
    {
        $lUserName = Input::post('user_name', null);

        if (empty($lUserName))
            die(json_encode(
                ['status' => 'error', 'message' => 'Invalid user ID'],
                JSON_UNESCAPED_UNICODE)
            );

        if (!$this->is_admin)
            die(json_encode(
                ['status' => 'error', 'message' => 'Access denied'],
                JSON_UNESCAPED_UNICODE)
            );

        $lResult = Auth::update_user(['is_deleted' => false], $lUserName);

        if ($lResult) {
            die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));
        }

        die(json_encode(['status' => 'error', 'message' => 'User was not deleted' ], JSON_UNESCAPED_UNICODE));
    }


    public function action_edit()
    {
        $lUserData     = Input::post('user', null);
        $lAvatar       = Input::post('avatar', null);
        $lDeleteAvatar = Input::post('delete_avatar', null);

        if (empty($lUserData)) {
            die(json_encode(
                ['status' => 'error', 'message' => 'Empty data for updating user'],
                JSON_UNESCAPED_UNICODE)
            );
        }

        $lIsOwner = ($lUserData['username'] == $this->current_user['username']);

        if ((empty($lUserData['username']) || !$lIsOwner)
            && !$this->is_admin
        ) {
            die(json_encode(
                ['status' => 'error', 'message' => 'Access denied'],
                JSON_UNESCAPED_UNICODE)
            );
        }

        $lUserName = $lUserData['username'];
        unset($lUserData['username']);

        try {
            DB::start_transaction();

            $lOldData = Auth::get_profile_fields();
            if (!empty($lAvatar))
            {
                $lNewAvatar = FileHandler::prepareFiles($lAvatar,
                    FileHandler::tempFolder());

                foreach ($lNewAvatar as $lVal)
                {
                    $lUserData['avatar_id'] = Model_Avatars::add(['file_name' => $lVal]);
                    break;
                }

                if (!empty($lOldData['avatar_id']))
                {
                    $lToDeleteAvatar = Model_Avatars::getById($lOldData['avatar_id']);
                    Model_Avatars::delete($lOldData['avatar_id']);
                }
            }

            if (!empty($lDeleteAvatar) && empty($lAvatar))
            {
                $lOldAvatar = Model_Avatars::getById($lOldData['avatar_id']);
                foreach ($lDeleteAvatar as $lVal)
                {
                    if ($lVal != $lOldData['avatar_id'])
                        break;

                    $lToDeleteAvatar = $lOldAvatar;
                    Model_Avatars::delete($lVal);
                    $lUserData['avatar_id'] = '';
                    break;
                }
            }

            $lResult = Auth::update_user($lUserData, $lUserName);

            if (!empty($lNewAvatar))
                FileHandler::moveFiles($lNewAvatar, FileHandler::tempFolder(), FileHandler::AVATAR_FOLDER);
            if (!empty($lToDeleteAvatar))
                FileHandler::deleteFiles([FileHandler::AVATAR_FOLDER.$lToDeleteAvatar['file_name']] );

            DB::commit_transaction();
        }
        catch (Exception  $e) {
            DB::rollback_transaction();
            die(json_encode(['status' => 'error', 'message' => 'Error '.$e ], JSON_UNESCAPED_UNICODE));
        }

        if ($lResult)
            die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));

        die(json_encode(['status' => 'error', 'message' => 'Fields not were updated' ], JSON_UNESCAPED_UNICODE));
    }

    public function action_changePassword()
    {
        $lUserData = Input::post('password', null);

        if (empty($lUserData)
            || empty($lUserData['old'])
            || empty($lUserData['new'])
            || empty($lUserData['new_2'])) {
            die(json_encode(
                ['status' => 'error', 'message' => 'Empty passwords'],
                JSON_UNESCAPED_UNICODE)
            );
        }

        if ($lUserData['new'] != $lUserData['new_2']) {
            die(json_encode(
                ['status' => 'error', 'message' => DifferentFunc::translation('passwords_mismatch')],
                JSON_UNESCAPED_UNICODE)
            );
        }

        try {
            $lResult = Auth::change_password($lUserData['old'], $lUserData['new']);
        }
        catch (Exception  $e) {
            throw new Exception('Error '.$e);
        }

        if ($lResult)
            die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));

        die(json_encode([
            'status' => 'error',
            'message' => 'Password was not updated'
        ], JSON_UNESCAPED_UNICODE));

    }
}