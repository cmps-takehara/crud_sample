<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Smarty認識用クラス
 *
 * @package     Codeigniter
 * @since       2018/11/12
 * @category    library
 * @author      takehara@cmps.jp
 * @source      https://qiita.com/fgnhssb/items/a7bce303874b324a9fea
 */

// Smarty3.1.*はnamespace対応していないのでrequireして使用
require_once APPPATH.'/../vendor/smarty/smarty/libs/Smarty.class.php';

class Load_smarty extends Smarty
{
    public function __construct()
    {
        parent::__construct();

        $this->assign( 'APPPATH', APPPATH );
        $this->assign( 'BASEPATH', BASEPATH );

        // Assign CodeIgniter object by reference to CI
        if (method_exists($this, 'assignByRef')) {
            $ci =& get_instance();
            $this->assignByRef("ci", $ci);
        }

        log_message('debug', "Smarty Class Initialized");
    }

    public function view($template, $data = array(), $return = FALSE)
    {
        foreach ($data as $key => $val) {
            $this->assign($key, $val);
        }

        if ($return == FALSE) {
            $CI =& get_instance();
            if (method_exists($CI->output, 'set_output')) {
                $CI->output->set_output( $this->fetch($template) );
            } else {
                $CI->output->final_output = $this->fetch($template);
            }
            return;
        } else {
            return $this->fetch($template);
        }
    }
}
