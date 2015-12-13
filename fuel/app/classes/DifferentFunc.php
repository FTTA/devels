<?php

class DifferentFunc
{
    public static function translation($aKey)
    {
        $lSession = Session::instance();
        $lTranslation = $lSession->get('translation', []);
        if (!empty($lTranslation[$aKey]))
            return $lTranslation[$aKey];
        return $aKey;
    }
}