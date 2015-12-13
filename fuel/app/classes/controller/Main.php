<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2015 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Main extends Controller_Base
{
    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
        $lPage   = Input::get('current_page', 1);
        $lArticles = Model_Articles::getAll($lPage, $this->lang);

        $lPagination = Pagination::forge('data_table',
            array(
                'pagination_url' => '/main/index',
                'total_items'    => DB::count_last_query(),
                'num_links'      => 3,
                'per_page'       => \Config::get('db.items_per_page'),
                'current_page'   => $lPage,
                'uri_segment'    => 'current_page'
            )
        )->render();

        $this->template->content = View::forge('index',[
            'articles'   => $lArticles,
            'pagination' => $lPagination
        ], false);

        return $this->template;
        //return Response::forge(View::forge('welcome/index'));
    }

    public function action_accessDenied()
    {
        $lMsg = Input::get('msg', null);
        $this->template->content = View::forge('access_denied', $lMsg);
        return $this->template;
    }

    /**
     * A typical "Hello, Bob!" type example.  This uses a Presenter to
     * show how to use them.
     *
     * @access  public
     * @return  Response
     */
    public function action_hello()
    {
        return Response::forge(Presenter::forge('welcome/hello'));
    }

    /**
     * The 404 action for the application.
     *
     * @access  public
     * @return  Response
     */
    public function action_404()
    {
        return Response::forge(Presenter::forge('welcome/404'), 404);
    }

}