<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller
{
	
	function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
        $this->load->model('model');
        $this->load->library('session');

    }

	function index()
	{
		$this->session->sess_destroy();
		redirect('', 'refresh');
	}
}
?>