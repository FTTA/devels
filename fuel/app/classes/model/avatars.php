<?php

class Model_Avatars extends Model_Base
{
    static protected $conditions = [
        'id'        => ['type' => self::VAR_NUMERIC, 'required' => false],
        'file_name' => ['type' => self::VAR_CHAR,    'required' => true],
    ];

    const TABLE = 'avatars';

    public static function add($aData)
    {
        $lResult = self::insert($aData, self::TABLE);
        return $lResult[0];
    }

    public static function getById($aAvatarId)
    {
        if (empty($aAvatarId) || !is_numeric($aAvatarId))
            throw new Exception('Invalid Avatar ID'.$aAvatarId);

        $lSql = "SELECT * FROM ".self::TABLE.CRLF.
                "WHERE id = :id";

        return DB::query($lSql)
            ->parameters([':id' => $aAvatarId])
            ->execute()
            ->current();
    }

    public static function delete($aAvatarId)
    {
        if (empty($aAvatarId) || !is_numeric($aAvatarId))
            throw new Exception('Invalid Avatar ID: '.$aAvatarId);

        $lSql = "DELETE FROM ".self::TABLE.CRLF.
                "WHERE id = :id";

        DB::query($lSql)
            ->parameters([':id' => $aAvatarId])
            ->execute();
    }
}