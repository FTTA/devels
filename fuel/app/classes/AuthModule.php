<?php

class AuthModule
{
    const UR_GUEST   = 'guest';
    const UR_USER    = 3;
    const UR_EDITOR  = 2;
    const UR_ADMIN   = 1;

    const CR_TRANSPORT  = 'transport';
    const CR_CARGO      = 'cargo';
    const CR_EXPEDITION = 'expedition';

    static protected $instance = NULL;

    static protected $acces_table = [

        'ajax_articles' => [
            'roles'   =>[self::UR_ADMIN => true, self::UR_EDITOR => true],
            'actions' => [
                'add'    => [],
                'delete' => [],
                'edit'   => []
            ]
        ],

        'ajax_general' => [
            'roles'   => ['all_users' => true],
            'actions' => [
                'lang'         => [],
                'login'        => [],
                'logout'       => [],
                'registration' => [
                    'all_users'    => true,
                    self::UR_GUEST => true
                ]
            ]
        ],

        'ajax_users' => [
            'roles' => ['all_users' => true, self::UR_GUEST => false],
                'actions' => [
                    'changepassword' => [],
                    'delete'         => [],
                    'edit'           => [],
                    'restore'        => ['all_users' => true, self::UR_ADMIN => true]
                ]
        ],

        'articles' => [
            'roles'   =>[self::UR_ADMIN => true, self::UR_EDITOR => true],
            'actions' => [
                'article' => ['all_users' => true],
                'edit'    => [],
                'index'   => [],
            ]
        ],

        'main' => [
            'roles' => ['all_users' => true],
            'actions' => [
                'accessdenied' => [],
                'index'        => [],
                '404'          => []
            ]
        ],

        'profile' => [
            'roles' => ['all_users' => true, self::UR_GUEST => false],
            'actions' => [
                'edit'  => [],
                'index' => [],

            ]
        ],

        'users' => [
            'roles' => [],
            'actions' => [
                'register' => [self::UR_GUEST => true],
                'showall'  => [self::UR_ADMIN => true]
            ]
        ],
    ];

    static public function instance()
    {
        if (!self::$instance)
            self::$instance = new self();
        return self::$instance;
    }

    static public function rolesList()
    {
        return [
            'ur_user'   => self::UR_USER,
            'ur_admin'  => self::UR_ADMIN,
            'ur_editor' => self::UR_EDITOR
        ];
    }

    static public function rolesNames()
    {
        return [
            self::UR_USER   => 'ur_user',
            self::UR_ADMIN  => 'ur_admin',
            self::UR_EDITOR => 'ur_editor'
        ];
    }

    static public function accessGuard($aControllerName, $aActionName, $aUserInfo)
    {
        if (!$aUserInfo)
            $lNeedCheck = ['users' => self::UR_GUEST];
        else
        {
            /*$lUser    = AuthModule::getUserInfo();
            $lCompany   = AuthModule::getCompanyInfo();*/
            $lNeedCheck = ['users' => $aUserInfo['role_id']];
        }

        $aControllerName = str_replace('controller_', '', strtolower($aControllerName));
        $aActionName     = strtolower($aActionName);

        if (!isset(static::$acces_table[$aControllerName])
            || !isset(static::$acces_table[$aControllerName]['actions'][$aActionName])
        )
            throw new Exception('Error Processing Request '.$aControllerName.'/'.$aActionName);

        $lActions = static::$acces_table[$aControllerName]['actions'];
        $lRoles   = static::$acces_table[$aControllerName]['roles'];

        $lPermission = [];

        foreach ($lNeedCheck as $lKey => $lCheckRole)
        {
            if (isset($lRoles[$lCheckRole]))
            {
                if (isset($lActions[$aActionName][$lCheckRole]))
                {
                    $lPermission[] = $lActions[$aActionName][$lCheckRole];
                    continue;
                }
                if (isset($lActions[$aActionName]['all_'.$lKey]))
                {
                    $lPermission[] = $lActions[$aActionName]['all_'.$lKey];
                    continue;
                }
                $lPermission[] = $lRoles[$lCheckRole];
                continue;
            }

            if (isset($lRoles['all_'.$lKey]))
            {
                if (isset($lActions[$aActionName][$lCheckRole]))
                {
                    $lPermission[] = $lActions[$aActionName][$lCheckRole];
                    continue;
                }
                if (isset($lActions[$aActionName]['all_'.$lKey]))
                {
                    $lPermission[] = $lActions[$aActionName]['all_'.$lKey];
                    continue;
                }
                $lPermission[] = $lRoles['all_'.$lKey];
                continue;
            }

            if (isset($lActions[$aActionName][$lCheckRole]))
            {
                $lPermission[] = $lActions[$aActionName][$lCheckRole];
                continue;
            }
            if (isset($lActions[$aActionName]['all_'.$lKey]))
            {
                $lPermission[] = $lActions[$aActionName]['all_'.$lKey];
                continue;
            }

            switch($lKey)
            {
                case 'users': $lPermission[] = false;
                    break;
                case 'company': $lPermission[] = true;
                    break;
                default : false;
            }
        }

        $lResult = true;

        foreach($lPermission as $lValue)
        {
            $lResult = $lResult && $lValue;
        }

        return $lResult;
    }
}