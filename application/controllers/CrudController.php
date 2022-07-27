<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {

	
	public function __construct(){

        parent::__construct();
        // $this->load->helper('url');
   
        // Load model
        $this->load->model('CrudModel');
   
      }
   
      public function index(){
   
        // load view
        $this->load->view('crud');
   
      }
   
      public function empList(){
        
        // POST data
        $postData = $this->input->post();
   
        // Get data
        $data = $this->CrudModel->get_list($postData);
        
        echo json_encode($data);
    }


    public function add_edit(){

        print_r($this->input->post());die("4534");
        echo json_encode("1");
    }
}
