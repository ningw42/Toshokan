<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// home page for display books
	public function index()
	{
		$this->load->model('Books');
		$books = Books::findOnCond(array(), 0);

		$results = array(
											'one' => array(),
											'two' => array(),
											'three' => array()
										);
		foreach ($books as $key => $value) {
			switch ($key % 3) {
				case 0:
					$results['one'][] = $value;
					break;
				case 1:
					$results['two'][] = $value;
					break;
				case 2:
					$results['three'][] = $value;
					break;
			}
		}

		$this->loadAll('index', $results);
	}

	// get User record
	public function record()
	{
		$user = $this->current_user();
		$this->load->model('records');
		
		$cond = array(
			'user_id' => $user->id
			);
		$records = Records::findOnCond($cond);
		$data['records'] = $records;
		$this->loadAll('record', $data);
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

	private function current_user()
	{
		$this->load->model('users');
		return Users::findByIds(2);
	}
}
