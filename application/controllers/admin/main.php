<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User: Zida
 * Date: 2015/3/16
 * Time: 15:49
 */

class Main extends Admin_Controller{

    //展示后台首页面
    public function index(){
        $this->load->view('index.html');
    }

    //展示头部
    public function  top(){
        $this->load->view('top.html');
    }

    //展示左边菜单
    public function  menu(){
        $this->load->view('menu.html');
    }

    //展示头部
    public function  drag(){
        $this->load->view('drag.html');
    }

    //展示正文
    public function  content(){
        $this->load->view('main.html');
    }


}