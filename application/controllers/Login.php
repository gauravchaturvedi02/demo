<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

   function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
        $this->load->library('session');

    }
	public function index()
	{
		
		$this->load->view('login');
		$this->load->view('footer');
	}



	public function save(){
		$session_data = $this->session->userdata('users');

		     if($session_data['logged_in'] == 1){
		         //users already logged in
				  $data['email'] = $session_data['email'];
				  redirect('','refresh');
				 
	            }
	         else if($this->input->post('submit'))
	         {
	            	$this->load->model('model');
	                //get email and paassword from form..
					$email = $this->input->post('email');
					$password = $this->input->post('password');
					$check_login = $this->model->check_login($email,$password,'users');
					
					if($check_login)
					{
						$sessdata = array(
									        'email'  => $email,
									        'logged_in' => TRUE,
									        'ip' => $_SERVER['REMOTE_ADDR'],
									        'data' => $check_login,
									        'name'=> $check_login['name'],
									);

                                 $data['email'] = $email;

								// $this->session->set_userdata($sessdata);
                                                                $this->session->set_userdata(array("users" => $sessdata));
								 //update last login detail into table..
	 							$id = $check_login['id'];
	 							$this->session->set_flashdata('success', "Logged in Successfully");
	 							redirect('','refresh');

								
	 					 }
	 					else{
	 							$this->session->set_flashdata('error', 'success');
	 							 header("Location: " . $_SERVER['REQUEST_URI']);
								
	 						}
					}
	            
	         else{
	            	
	            	redirect('login','refresh');
	            }
		
	}

}
