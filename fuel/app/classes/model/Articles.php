<?php

class Model_Articles extends Model_Base
{
    static protected $conditions = [
        'id'         => ['type' => self::VAR_NUMERIC,  'required' => false],
        'user_id'    => ['type' => self::VAR_NUMERIC,  'required' => true],
        'name_en'    => ['type' => self::VAR_CHAR,     'required' => true],
        'text_en'    => ['type' => self::VAR_CHAR,     'required' => true],
        'name_ua'    => ['type' => self::VAR_CHAR,     'required' => true],
        'text_ua'    => ['type' => self::VAR_CHAR,     'required' => true],
        'date'       => ['type' => self::VAR_CHAR],
        'is_deleted' => ['type' => self::VAR_BOOL],
    ];

    const TABLE = 'articles';

    public static function add($aData)
    {
        $aData['date'] = date('Y-m-d');
        return self::insert($aData, self::TABLE);
    }

    protected static function get($aFilters = [], $aReturnType = false, $aLang = 'en')
    {
        if (!in_array($aLang, ['en', 'ua']))
            throw new Exception('Invalid lang: '.$aLang);
        \Config::load('db', true);

        $lCondition    = [];
        $lPrepared     = [];
        $lItemsPerPage = \Config::get('db.items_per_page');

        $lPage = ((empty($aFilters['page']) || $aFilters['page'] < 1) ? 0 : $aFilters['page'] - 1);

        if (isset($aFilters['id'])) {
            $lCondition[] = 'A.id = :article_id';
            $lPrepared[':article_id'] = $aFilters['id'];
        }
        if (empty($aFilters['show_deleted'])) {
            $lCondition[] = 'is_deleted = false';
        }

        $lSql = "SELECT".CRLF.
                    "A.*,".CRLF.
                    "COALESCE(A.name_".$aLang.", name_en) AS name,".CRLF.
                    "COALESCE(A.text_".$aLang.", text_en) AS text,".CRLF.
                    "U.username as user_name".CRLF.
                "FROM ".self::TABLE." AS A".CRLF.
                "LEFT JOIN ".self::TABLE_USERS." AS U".CRLF.
                    "ON U.id = A.user_id".CRLF.
                (!empty($lCondition) ? "WHERE ".implode(' AND ', $lCondition) : '').CRLF.
                "ORDER BY A.id DESC".CRLF.
                "LIMIT ".$lItemsPerPage.CRLF.
                "OFFSET ".($lPage * $lItemsPerPage);

        $lResult = DB::query($lSql)
            ->parameters($lPrepared)
            ->execute();

        switch($aReturnType)
        {
            case 'current':
                return $lResult->current();
            case 'as_array':
            default:
                /*$lSql = "SELECT COUNT(id) FROM ".self::TABLE.CRLF.
                    (!empty($lCondition) ? "WHERE ".implode(' AND ', $lCondition) : '');
                $lCount = DB::query($lSql)
                    ->parameters($lPrepared)
                    ->execute();*/

                return $lResult->as_array();
        }
    }

    public static function getAll($aPage = 0, $aLang)
    {
        if (!is_numeric($aPage))
            throw new Exception('Invalid page '.$aPage);

        if (empty($aLang))
            throw new Exception('Invalid lang: '.$aLang);

        return self::get(['page' => $aPage], false, $aLang);
    }

    public static function getById($aArticleId, $aLang)
    {
        if (empty($aArticleId) || !is_numeric($aArticleId))
            throw new Exception('Invalid Article ID: '.$aArticleId);

        if (empty($aLang))
            throw new Exception('Invalid lang: '.$aLang);

        return self::get(['id' => $aArticleId], 'current', $aLang);
    }

    public static function edit($aData, $aArticleId)
    {
        if (empty($aArticleId) || !is_numeric($aArticleId))
            throw new Exception('Invalid Article ID: '.$aArticleId);

        if (empty($aData) || !is_array($aData))
            throw new Exception('Invalid data for edit of Article');

        self::update($aData, self::TABLE, ['id' => $aArticleId]);
    }
}