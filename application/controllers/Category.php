<?php

class Category extends Ci_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['categorys'] = $this->common->getCategories();
        // print_r($data);die;
        $this->load->view('category', $data);
    }
    function addcategory(){
        $user_id = $_SESSION["userId"];
        $cat_name = $this->input->post("category_name");
        $categoryarray = array(
            "userid" => $user_id,
            "categoryname" => $cat_name,
        );

        $data = $this->common->insert("cr_category", $categoryarray);
        // print_r($data);die;
        if($data){
            // $this->session->set_flashdata('failed','Something went wrong. Please try again later..!');
            $this->session->set_flashdata('success','Categoty added success..!');
            redirect('category', 'refresh');
        }else{
            $this->session->set_flashdata('failed','Oops Something went wrong. Please try again later..!');
            redirect('category', 'refresh');
        }
    }
}