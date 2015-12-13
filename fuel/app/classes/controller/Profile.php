<?php
class Controller_Profile extends Controller_Base
{
    public function action_index()
    {
        $lUserId = Input::get('user_id', null);

        if (empty($lUserId))
            throw new Exception('Empty user name');

        $lUserData = Model_User::find($lUserId)->to_array();

        $lUserData['profile_fields'] = unserialize($lUserData['profile_fields']);
        if (!empty($lUserData['profile_fields']['avatar_id']))
            $lUserData['avatar'] = Model_Avatars::getById($lUserData['profile_fields']['avatar_id']);

        $lIsOwner = $lUserData['id'] == $this->current_user['id'];
        $lIsAdmin = $this->current_user['role_id'] == AuthModule::UR_ADMIN;

        $this->template->content = View::forge('user_profile', [
            'user_data'  => $lUserData,
            'owner_mode' => ($lIsAdmin || $lIsOwner),
        ]);
        return $this->template;
    }

    public function action_edit()
    {
        $this->template->scripts[] = 'profile.js';
        $this->template->scripts[] = 'file_uploader.js';
        $this->template->styles[]  = 'file_uploader.css';

        $lUserId = Input::get('user_id', null);

        $lUser = Model_User::query()
            ->where('id', $lUserId)
            ->get_one()
            ->to_array();

        $lUser = array_merge($lUser, unserialize($lUser['profile_fields']));

        $lIsOwner = $lUser['id'] == $this->current_user['id'];
        $lIsAdmin = $this->current_user['role_id'] == AuthModule::UR_ADMIN;

        if (!$lIsOwner && !$lIsAdmin)
            throw new Exception('You do not have access');

        //$lUserData = Auth::get_profile_fields();
        //$lUserData['user_id']   = $this->current_user['id'];
        //$lUserData['email']     = Auth::get_email();
        //$lUserData['username']  = Auth::get('username');

        if (!empty($lUser['avatar_id']))
            $lUser['avatar'] = Model_Avatars::getById($lUser['avatar_id']);

        $this->template->content = View::forge('user_edit', [
            'user_data'  => $lUser,
            'admin_mode' => ($lIsAdmin && !$lIsOwner)
        ]);
        return $this->template;
    }
}
?>