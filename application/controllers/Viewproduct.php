<?php

class Viewproduct extends Ci_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view('viewproduct');
    }
}