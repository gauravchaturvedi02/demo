<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

   function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
        $this->load->library('session');

    }
	public function index()
	{
	    $session_data = $this->session->userdata('admin');
          
             if($session_data['logged_in'] == 1){
               
                 //users already logged in
                  $data['username'] = $session_data['username'];

                  redirect('dashboard','refresh');

                }
                else{

                    $this->load->view('admin/login');
                }
		     
	}


    public function login(){

             $session_data = $this->session->userdata('admin');
           
             if(isset($session_data)){
                 if($session_data['logged_in'] == 1){
                  
                  $data['username'] = $session_data['name'];

                  redirect('dashboard','refresh');

                }
             }
      
             
                //execute when session is not set
                //user want to login through login screen..
                else if($this->input->post('login_btn') )
                 {   

                       //echo "hi";
                    
                           $this->load->model('model');

                            //get email and password from form..
                            $username = $this->input->post('username');
                            $password = $this->input->post('password');
                    
                            $check_admin = $this->model->check_admin($username,$password,'admin_users');
                            // print_r($check_admin);

                             if($check_admin)
                            {
                              $sessdata = array(
                                            'email'  => $check_admin['email'],
                                            'logged_in' => TRUE,
                                            'ip' => $_SERVER['REMOTE_ADDR'],
                                            'data' => $check_admin,
                                            'name'=> $username,
                                    );

                                 $data['name'] = $username;

                                 //$this->session->set_userdata($sessdata);
                                 $this->session->set_userdata(array("admin" => $sessdata)); 
                                // print_r($sessdata);
                            
                          
                                 redirect('dashboard','refresh');


                                $this->session->set_flashdata('success', "Logged in Successfully");
                              

                            }

                     
                       }
          
                else{
                        //echo "this";
                      redirect('admin','refresh');

                }

         }



}
