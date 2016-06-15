<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

   function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
        $this->load->library('session');

    }
    function index(){
        $this->load->view('task.php');
        
    }
              function submit(){
                  $this->load->model('model');
                           $insertdata['name'] =$this->input->post('name');
		           $insertdata['email'] = $this->input->post('email');
		           $insertdata['mobile'] = $this->input->post('mobile');    
		           $insertdata['message']  =  $this->input->post('message');
                           $query = $this->model->insertdata($insertdata,'db');
    }
}

