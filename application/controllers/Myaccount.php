<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

   function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
        $this->load->library('session');

    }
	public function index()
	{
		
		$this->load->view('myaccount');
		$this->load->view('footer');
	} 
        
      public function userinfo(){
            $session_data = $this->session->userdata('users');

		     if($session_data['logged_in'] == 1){
		         //users already logged in
				  $data['email'] = $session_data['email'];
        $this->load->model('model');
        $users = $this->model->getuser( $data['email']);

        $infoarr = array();
                 
      foreach($users as $user)
       {
          
          $arr = array('id'=> $user->id,'name'=> $user->name, 'email' => $user->email , 'phone'=> $user->phone, 'address'=> $user->address , 'city'=> $user->city , 'country'=>$user->country,'pincode'=> $user->pincode , 'plan'=> $user->plan, 'status'=> $user->status );
          array_push($infoarr,$arr);
       
       }

            $data['user_data'] = $infoarr;
           //print_r($table_data);
         

    $this->load->view('myaccount',$data);
  }
}
}