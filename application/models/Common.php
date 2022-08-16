<?php

class Common extends Ci_Model{
    public function __construct(){
        parent::__construct();
    }
    // public function index(){
        
    //     $this->load->view('common');
    // }

    public function insert($tablename, $data){
        return $this->db->insert($tablename, $data);
    }

    public function select($tablename){
        
    }

    public function getCategories(){
        if(1 == 2){

        }
        $sql = "SELECT * FROM cr_category";
        $data = $this->db->query($sql);
        return $data->result_array();
    }

}