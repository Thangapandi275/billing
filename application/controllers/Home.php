<?php

class Home extends Ci_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('loginmodel');
    }
    public function index(){
        if(!empty($this->session->userdata('userId'))){
            $homedata['title'] = "Home";
            $this->load->view('home', $homedata);
        }else{
            redirect('login', 'refresh');
        }
        
    }
}