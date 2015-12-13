<?php

class Controller_Ajax_Articles extends Controller_Ajax_Baseajax
{
    public function before()
    {
        parent::before();

        if (!$this->is_logged)
        {
            die(json_encode(
                ['status' => 'error', 'message' => 'Login please'],
                JSON_UNESCAPED_UNICODE)
            );
        }

        $this->is_admin = ($this->current_user['role_id'] == AuthModule::UR_ADMIN);
    }

    public function action_add()
    {
        $lData = Input::post('article', null);

        if (empty($lData))
        {
            die(json_encode(
                ['status' => 'error', 'message' => 'Empty article data'],
                JSON_UNESCAPED_UNICODE)
            );
        }

        $lData['user_id'] = $this->current_user['id'];

        Model_Articles::add($lData);

        die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));
    }

    public function action_edit()
    {
        $lData = Input::post('article', null);

        if (empty($lData)
            || empty($lData['article_id'])
            || !is_numeric($lData['article_id']))
        {
            die(json_encode(
                ['status' => 'error', 'message' => 'Empty article data'],
                JSON_UNESCAPED_UNICODE)
            );
        }

        $lResult = Model_Articles::getById($lData['article_id'], $this->lang);
        $lId = $lData['article_id'];
        unset($lData['article_id']);

        if ($lResult['user_id'] != $this->current_user['id'] && !$this->is_admin)
            die(json_encode([
                'status'  => 'error',
                'message' => 'Permition denied. You have not rights to edit this article.'
                ], JSON_UNESCAPED_UNICODE));

        Model_Articles::edit($lData, $lId);

        die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));
    }

    public function action_delete()
    {
        $lData = Input::post('article', null);

        if (empty($lData)
            || empty($lData['article_id'])
            || !is_numeric($lData['article_id']))
        {
            die(json_encode(
                ['status' => 'error', 'message' => 'Empty article data'],
                JSON_UNESCAPED_UNICODE)
            );
        }

        $lResult = Model_Articles::getById($lData['article_id'], $this->lang);
        $lId = $lData['article_id'];
        unset($lData['article_id']);

        if ($lResult['user_id'] != $this->current_user['id'] && !$this->is_admin)
            die(json_encode([
                'status'  => 'error',
                'message' => 'Permition denied. You have not rights to edit this article.'
                ], JSON_UNESCAPED_UNICODE));

        Model_Articles::edit(['is_deleted' => true], $lId);

        die(json_encode(['status' => 'ok'], JSON_UNESCAPED_UNICODE));
    }
}