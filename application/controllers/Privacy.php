<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller {

   function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
        $this->load->library('session');

    }
	public function index()
	{
	
		$this->load->view('privacy');
		$this->load->view('footer');
	}
}
