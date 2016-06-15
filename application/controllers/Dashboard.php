<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

   function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
        $this->load->library('session');

    }
	public function index()
	{
		    $session_data = $this->session->userdata('admin');
         // print_r($session_data);
            
             if($session_data['logged_in'] == 1){
               
                 //users already logged in 
                  $data['username'] = $session_data['name'];

                  $this->load->view('admin/dashboard');

                }
                else{
                  redirect('admin','refresh');
                }
      }

  public function allusers(){
    $this->load->model('model');
    $users = $this->model->getusers();

    $infoarr = array();
                 
      foreach($users as $user)
       {
          
          $arr = array('id'=> $user->id,'name'=> $user->name, 'email' => $user->email , 'phone'=> $user->phone, 'address'=> $user->address , 'city'=> $user->city , 'country'=>$user->country,'pincode'=> $user->pincode , 'plan'=> $user->plan, 'status'=> $user->status );
          array_push($infoarr,$arr);
       
       }

            $data['user_data'] = $infoarr;
           //print_r($table_data);
         

    $this->load->view('admin/all-users',$data);
  }

  public function addnew(){  
    $this->load->model('model');
    $this->load->view('admin/add-new',$data);
    
  }
  public function edit($id){
      $this->load->model('model');
      
      $data['user']=$this->model->getuserrow($id);
      $this->load->view('admin/customerinfo',$data);
      
}
public function delete($id){
    $user_id = "POST['id']";
echo '$user_id';
 $this->load->model('model');
$query= $this->model->remove_item($userid);
redirect('dashboard/all-users',refresh);
}
public function viewuser($id){
$user_id = "POST['id']";
echo '$user_id';
$this->load->model('model');
$query= $this->model->getuserrow($user_id);
$this->load->view('admin/customerinfo');
}
}
