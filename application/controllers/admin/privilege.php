<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User: Zida
 * Date: 2015/3/16
 * Time: 19:43
 */

//权限控制器
class Privilege extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //载入验证码
        $this->load->helper('captcha');
    }

    public function login(){
//        $vals = array(
//            'img_path' => './data/captcha', //指定保存路径
//            'img_url' => base_url() . 'data/captcha/', //图片url
//        );
//
//        $data = create_captcha($vals); //生成验证码
////        var_dump($data);
        $this->load->view('login.html');
    }

    //生成验证码
    public function code(){
        create_captcha();
    }
}