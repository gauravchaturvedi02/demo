<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

   function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
        $this->load->library('session');

    }
	public function index()
	{
		
		$this->load->view('homepage');
		$this->load->view('footer');
	}
}
