<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

   function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
        $this->load->library('session');

    }
	public function index()
	{
		
		$this->load->view('register');
		$this->load->view('footer');
	}

	   public function save(){
        
        $this->load->model('model');
        if($this->input->post('email') !="")
        {
           date_default_timezone_set('Asia/Calcutta');

           $check_user = $this->model->check_user($this->input->post('email') , 'users');
          

            if($check_user['email'] == $this->input->post('email')){
            $this->session->set_flashdata('error_msg', "User with this email is already Registered, Please use different details");
            redirect('register','refresh');
              }
            
	       else
	       {
		           $insertdata['name'] = htmlentities(ucfirst($this->input->post('name')));
		           $insertdata['email'] = htmlentities($this->input->post('email'));
		           $insertdata['address']  = htmlentities($this->input->post('address'));    
		           $insertdata['phone']    =  $this->input->post('phone');
		           $insertdata['city'] = htmlentities($this->input->post('city'));
		           $insertdata['country'] = htmlentities($this->input->post('country'));
		           $insertdata['pincode'] = $this->input->post('postalcode');
		           $insertdata['plan'] = $this->input->post('plan');
		           $insertdata['password'] = md5($this->input->post('password'));
		           $insertdata['time'] = $this->input->post('time');
		           $insertdata['status'] = "1";
	                  $query = $this->model->insertdata($insertdata,'users');
           

	               if($query){
	                 $this->session->set_flashdata('success_msg', "Registrered Successfully");
	                  redirect('register','refresh');
			         }
			         else{
			    
			            $this->session->set_flashdata('error_msg', "Oops! Something Happened..");
			             redirect('register','refresh');
			         }
	        
	       }
                 
        }
        else{
            redirect('register','refresh');
        }
        

    }

	public function update()
	{

	}

	public function delete()
	{

	}
}
