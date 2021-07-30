<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * ユーザーエージェントライブラリ <Useragent>
 *
 * @package    Ken Order System
 * @since      2018/11/12
 * @category   library
 * @author     takehara@cmps.jp
 */
class Useragent
{
    function __construct()
    {
        $this->CI =& get_instance();
    }

    public function assignAll(&$Smarty)
    {
        $Smarty->assign('is_ie', $this->is_ie());
        $Smarty->assign('is_ie', $this->is_ie());
        $Smarty->assign('is_ie6', $this->is_ie6());
        $Smarty->assign('is_ie7', $this->is_ie7());
        $Smarty->assign('is_ie8', $this->is_ie8());
        $Smarty->assign('is_ie9', $this->is_ie9());
        $Smarty->assign('is_ipad', $this->is_ipad());
        $Smarty->assign('is_prime', $this->is_prime());
        $Smarty->assign('is_prime_ios7', $this->is_prime_ios7());
        $Smarty->assign('is_prime_ios8', $this->is_prime_ios8());
        $Smarty->assign('is_prime_ios9', $this->is_prime_ios9());
        $Smarty->assign('is_prime_ios10', $this->is_prime_ios10());
        $Smarty->assign('is_sumaho', $this->is_sumaho());
        $Smarty->assign('is_iphone', $this->is_iphone());
        $Smarty->assign('is_android', $this->is_android());
        $Smarty->assign('is_firefox', $this->is_firefox());
        $Smarty->assign('is_androidLU', $this->is_androidLU());
        $Smarty->assign('is_android23', $this->is_android23());
        $Smarty->assign('is_android40', $this->is_android40());
        $Smarty->assign('is_ios8', $this->is_ios8()); //フォームのセレクトボックス用。iOS8のみバグる処理があるので出し分け。
    }

    public function is_sumaho()
    {
        if ($this->is_iphone() || $this->is_android()) {
            return true;
        } else {
            return false;
        }
    }

    public function checkAgent()
    {
        $http_user_agent = $this->CI->input->server('HTTP_USER_AGENT');
        return ($http_user_agent) ? $http_user_agent : '';
    }

    public function is_ie()
    {
        return preg_match('/MSIE/', $this->checkAgent()) ? true : false ;
    }

    public function is_ie6()
    {
        return preg_match('/MSIE 6/', $this->checkAgent()) ? true : false ;
    }

    public function is_ie7()
    {
        return preg_match('/MSIE 7/', $this->checkAgent()) ? true : false ;
    }

    public function is_ie8()
    {
        return preg_match('/MSIE 8/', $this->checkAgent()) ? true : false ;
    }

    public function is_ie9()
    {
        return preg_match('/MSIE 9/', $this->checkAgent()) ? true : false ;
    }

    public function is_iphone()
    {
        return preg_match('/iPhone/', $this->checkAgent()) ? true : false ;
    }

    public function is_ipad()
    {
        return preg_match('/iPad/', $this->checkAgent()) ? true : false ;
    }

    public function is_prime()
    {
        if (preg_match('/iPad/', $this->checkAgent())
         && !preg_match('/Safari/', $this->checkAgent())
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function is_prime_ios7()
    {
        if (preg_match('/iPad; CPU OS 7/', $this->checkAgent())
         && !preg_match('/Safari/', $this->checkAgent())
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function is_prime_ios8()
    {
        if (preg_match('/iPad; CPU OS 8/', $this->checkAgent())
         && !preg_match('/Safari/', $this->checkAgent())
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function is_prime_ios9()
    {
        if (preg_match('/iPad; CPU OS 9/', $this->checkAgent())
         && !preg_match('/Safari/', $this->checkAgent())
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function is_prime_ios10()
    {
        if (preg_match('/iPad; CPU OS 10/', $this->checkAgent())
         && !preg_match('/Safari/', $this->checkAgent())
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function is_ios8()
    {
        return preg_match('/iPhone OS 8/', $this->checkAgent()) ? true : false ;
    }

    public function is_android()
    {
        $ua = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($ua, 'Android') !== false && strpos($ua, 'Mobile') !== false) {
            return true;
        } else {
            return false;
        }
    }

    public function is_androidtab()
    {
        $ua = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($ua, 'Android') !== false && strpos($ua, 'Mobile') === false) {
            return true;
        } else {
            return false;
        }
    }

    public function is_androidLU()
    {
        return preg_match('/Linux; U;/', $this->checkAgent()) ? true : false ;
    }

    public function is_android23()
    {
        return preg_match('/Android 2.3/', $this->checkAgent()) ? true : false ;
    }

    public function is_android40()
    {
        return preg_match('/Android 4.0/', $this->checkAgent()) ? true : false ;
    }

    public function is_firefox()
    {
        return preg_match('/Firefox/', $this->checkAgent()) ? true : false ;
    }
}
