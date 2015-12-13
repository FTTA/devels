<?php

class Model_Translations extends Model_Base
{
    static protected $conditions = [
        'id'       => ['type' => self::VAR_NUMERIC, 'required' => false],
        'sys_name' => ['type' => self::VAR_CHAR,    'required' => true],
        'en'       => ['type' => self::VAR_CHAR,    'required' => true],
        'ua'       => ['type' => self::VAR_CHAR,    'required' => true],

    ];

    const TABLE = 'translations';

    public static function add($aData)
    {
        $lResult = self::insert($aData, self::TABLE);
        return $lResult[0];
    }

    public static function getAll($aLang)
    {
        if (empty($aLang))
            throw new Exception('Empty lang');

        $lSql = "SELECT".CRLF.
                    "sys_name,".CRLF.
                    "COALESCE(text_".$aLang.", text_en) AS text".CRLF.
                "FROM ".self::TABLE;

        $lResult = DB::query($lSql)
            ->execute()
            ->as_array();

        $lProcessed = [];
        foreach ($lResult as $lVal)
            $lProcessed[$lVal['sys_name']] = $lVal['text'];

        return $lProcessed;
    }

    public static function getById($aId)
    {
        if (empty($aId) || !is_numeric($aId))
            throw new Exception('Invalid ID'.$aId);

        $lSql = "SELECT * FROM ".self::TABLE.CRLF.
                "WHERE id = :id";

        return DB::query($lSql)
            ->parameters([':id' => $aId])
            ->execute()
            ->current();
    }

    public static function edit($aData, $aId)
    {
        if (empty($aId) || !is_numeric($aId))
            throw new Exception('Invalid ID: '.$aId);

        if (empty($aData) || !is_array($aData))
            throw new Exception('Invalid data for edit');

        self::update($aData, self::TABLE, ['id' => $aId]);
    }

    public static function delete($aId)
    {
        if (empty($aId) || !is_numeric($aId))
            throw new Exception('Invalid ID: '.$aId);

        $lSql = "DELETE FROM ".self::TABLE.CRLF.
                "WHERE id = :id";

        DB::query($lSql)
            ->parameters([':id' => $aId])
            ->execute();
    }
}