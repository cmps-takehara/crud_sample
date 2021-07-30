<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Orderコントローラ <Order>
 *
 * @package    Ken Order System
 * @since      2018/11/12
 * @category   Controller
 * @author     takehara@cmps.jp
 */
class Order extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        /* ページ内共通項目 （headタグ内に追加）*/
        $this->assign('sideNav', 'navHome'); /* Global Navigation に付与するClass 選択状態指定 空：未選択 */
        $this->assign('canonical', base_url()); /* link canonical * 空：使わない(SEO)*/
        $this->assign('head_title', '注文管理'); /* head title top ページ以外には入力 */
        $this->assign('head_keywords', ''); /* meta keywords */
        $this->assign('description', '');/* meta description */
        $this->assign('pageID', ''); /* bodyタグに入るid */
        $this->assign('page_css1', ''); /* style.cssより先に読み込む場合 ( 空：使わない css共通 cssファイル名を入力 ) */
        $this->assign('page_css2', ''); /* style.cssより先に読み込む場合 ( 空：使わない css共通 cssファイル名を入力 ) */
        $this->assign('page_css3', '');
        $this->assign('page_css4', '');
        $this->assign('jq_cookie', ''); /* jquery_cookie 空：使用しない */
        $this->assign('js_file1', '');
        $this->assign('js_file2', ''); /* 空：使用しない ※PC SP共通JS jsファイル名を入力 */
        $this->assign('js_file3', '');
        $this->assign('js_file4', '');
    }

    /**
     * 管理画面トップページ（未配送一覧）
     *
     */
    public function index()
    {
        $this->view('order/index.tpl');
    }
    /**
     * 配送済み一覧
     *
     */
    public function history()
    {
        $this->view('order/history.tpl');
    }
    /**
     * 取消一覧
     *
     */
    public function cancel()
    {
        $this->view('order/cancel.tpl');
    }
    /**
     * 電話注文登録
     *
     */
    public function create()
    {
        $this->assign('head_title', '電話注文登録｜注文管理');
        $this->view('order/create.tpl');
    }
}