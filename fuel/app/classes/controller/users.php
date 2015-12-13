<?php

class Controller_Users extends Controller_Base
{
/*
    public function action_login()
    {
        $this->template->scripts[] = 'form_getter.js';
        $this->template->scripts[] = 'users_login.js';

        $data["subnav"] = array('login'=> 'active' );
        $this->template->title = 'Users &raquo; Login';
        $this->template->content = View::forge('users/login', $data);

        return $this->template;
    }

    public function action_logout()
    {
        $this->template->scripts[] = 'form_getter.js';
        $data["subnav"] = array('logout'=> 'active' );
        $this->template->title = 'Users &raquo; Logout';
        $this->template->content = View::forge('users/logout', $data);

        return $this->template;
    }*/

    public function action_register()
    {
        $this->template->scripts[] = 'form_getter.js';
        $this->template->scripts[] = 'users_register.js';

        $data["subnav"] = array('register'=> 'active' );
        $this->template->title = 'Users &raquo; Register';
        $this->template->content = View::forge('users/register', $data);

        return $this->template;
    }

    public function action_showAll()
    {
        $lPage = Input::get('current_page', 0);

        \Config::load('db', true);
        $lItemsPerPage = \Config::get('db.items_per_page');

        $lResult = Model_User::query()
            ->limit($lItemsPerPage)
            ->offset($lPage * $lItemsPerPage)
            ->get();

        $lUsers = [];
        $n = 0;
        foreach ($lResult as $lVal)
        {
            $lUsers[$n] = $lVal->to_array();
            $lUsers[$n]['profile_fields'] = unserialize($lUsers[$n]['profile_fields']);
            $n++;
        }

        $lPagination = Pagination::forge('data_table',
            array(
                'pagination_url' => '/main/index',
                'total_items'    => DB::count_last_query(),
                'num_links'      => 3,
                'per_page'       => $lItemsPerPage,
                'current_page'   => $lPage,
                'uri_segment'    => 'current_page'
            )
        )->render();

        $this->template->content = View::forge('users/show_all_users', [
            'pagination' => $lPagination,
            'users'      => $lUsers
            ]);

        return $this->template;
    }
}
