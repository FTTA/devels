<?php

class Controller_Articles extends Controller_Base
{
    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
        $this->template->scripts[] = 'form_getter.js';
        $this->template->scripts[] = 'articles.js';

        $this->template->content = View::forge('article_add');

        return $this->template;
    }

    public function action_article()
    {
        $lArticleId = Input::get('article_id', null);

        $lResult = Model_Articles::getById($lArticleId, $this->lang);

        $this->template->content = View::forge('article', ['article' => $lResult]);
        return $this->template;
    }

    public function action_edit()
    {
        $this->template->scripts[] = 'form_getter.js';
        $this->template->scripts[] = 'articles.js';

        $lArticleId = Input::get('article_id', null);
        if (empty($lArticleId) || !is_numeric($lArticleId))
            throw new Exception('Invalid article ID: '.$lArticleId);

        $lResult = Model_Articles::getById($lArticleId, $this->lang);
        if (empty($lResult))
            throw new Exception('Empty data, Sorry');

        if ($lResult['user_id'] != $this->current_user['id']
                && $this->current_user['role_id'] != AuthModule::UR_ADMIN)
            throw new Exception('Permition denied. You have not rights to edit this article.');

        $this->template->content = View::forge('article_add', [
            'article'   => $lResult,
            'edit_mode' => true
        ]);

        return $this->template;
    }
}