<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * MY_Controller
 *
 * @package     Ken Order System
 * @since       2018/11/12
 * @category    Controller
 * @author      takehara@cmps.jp
 */
class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        ini_set( 'display_errors', 1 );

        $this->load->library('load_smarty', '', 'smarty');

        $this->smarty->template_dir = APPPATH.'views/';
        $this->smarty->compile_dir  = APPPATH.'cache/';
        $this->smarty->auto_literal = true;

        $this->useragent->assignAll($this->smarty);

        $this->assignGlobal();
    }

    protected function assignGlobal()
    {
        $this->smarty->assign('base_url', base_url());
    }

    protected function assign($field, $assignVal)
    {
        $this->smarty->assign($field, $assignVal);
    }

    protected function view($templete, $assignVals=array())
    {
        $this->smarty->view($templete, $assignVals);
    }
}
