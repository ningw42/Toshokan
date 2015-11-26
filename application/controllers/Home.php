<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// home page for display books
	public function index()
	{
		$this->loadAll('index', array());
	}

	// get User record
	public function record()
	{
		loadAll('record', $data);
	}

	// get User wishlist
	public function wishlist()
	{
		laodAll('wishlist', $data);
	}

	private function loadAll($part, $data)
	{
		if (!$part || !$data) {
			$part = 'index';
			$data = array();
		}
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view($part, $data);
		$this->load->view('modal');
		$this->load->view('footer');
	}
}
