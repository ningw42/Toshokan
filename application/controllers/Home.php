<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// home page for display books
	public function index()
	{
		$this->load->database();
		$this->load->view('home');
	}

	// get User record
	public function record()
	{

	}

	// get User wishlist
	public function wishlist()
	{

	}
}
