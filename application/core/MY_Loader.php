<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User: Zida
 * Date: 2015/3/16
 * Time: 15:00
 */

class MY_Loader extends CI_Loader{

    protected $_theme = 'default/';

    //开启皮肤功能
    public function switch_themes_on(){
        $this->_ci_view_paths = array(APPPATH . THEMES_DIR . $this->_theme => TRUE);
    }

    //关闭皮肤功能
    public function switch_themes_off(){
        //NULL
    }
}