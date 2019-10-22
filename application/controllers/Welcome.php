<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function tim()
	{
		// fungsi untuk me-load view about.php
		$this->load->view('tim');
	}

	// public function contact()
	// {
	// 	// fungsi untuk me-load view contact.php
	// 	$this->load->view('contact');
	// }

}
