<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 店舗管理コントローラ <Client>
 *
 * @package    Ken Order System
 * @since      2018/11/12
 * @category   Controller
 * @author     takehara@cmps.jp
 */
class Client extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        /* ページ内共通項目 （headタグ内に追加）*/
        $this->assign('sideNav', 'navClient'); /* Global Navigation に付与するClass 選択状態指定 空：未選択 */
        $this->assign('canonical', base_url()); /* link canonical * 空：使わない(SEO)*/
        $this->assign('head_title', '店舗管理'); /* head title top ページ以外には入力 */
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
     * 店舗一覧
     *
     */
    public function index()
    {
        $this->view('client/index.tpl');
    }
    /**
     * 新規店舗登録
     *
     */
    public function create()
    {
        $this->assign('head_title', '新規店舗登録｜店舗管理');
        $this->view('client/create.tpl');
    }
    /**
     * 店舗編集
     *
     */
    public function edit()
    {
        $this->assign('head_title', '店舗編集｜店舗管理');
        $this->view('client/edit.tpl');
    }
    /**
     *商品管理
     *
     */
    public function handled()
    {
        $this->assign('head_title', '商品管理｜店舗管理');
        $this->view('client/handled.tpl');
    }
}