<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 設定コントローラ <Setting>
 *
 * @package    Ken Order System
 * @since      2018/11/12
 * @category   Controller
 * @author     takehara@cmps.jp
 */
class Setting extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        /* ページ内共通項目 （headタグ内に追加）*/
        $this->assign('sideNav', 'navSetting'); /* Global Navigation に付与するClass 選択状態指定 空：未選択 */
        $this->assign('canonical', base_url()); /* link canonical * 空：使わない(SEO)*/
        $this->assign('head_title', '商品設定'); /* head title top ページ以外には入力 */
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
     * 商品設定
     *
     */
    public function index()
    {
        $this->view('setting/index.tpl');
    }

    /**
     * 商品登録
     *
     */
    public function create()
    {
        $this->assign('head_title', '商品登録｜設定');
        $this->view('setting/create.tpl');
    }

    /**
     * 商品詳細
     *
     */
    public function details()
    {
        $this->assign('head_title', '商品詳細｜設定');
        $this->view('setting/details.tpl');
    }

    /**
     * アカウント
     *
     */
    public function account()
    {
        $this->assign('head_title', 'アカウント｜設定');
        $this->view('setting/account.tpl');
    }

    /**
     * アカウント登録
     *
     */
    public function account_create()
    {
        $this->assign('head_title', 'アカウント登録｜設定');
        $this->view('setting/account_create.tpl');
    }
 }