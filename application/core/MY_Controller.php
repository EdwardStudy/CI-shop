<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User: Zida
 * Date: 2015/3/16
 * Time: 15:01
 */

//前台父控制器
class Home_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->switch_themes_on();
    }

}

//后台父控制器
class Admin_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->switch_themes_off();
    }

}