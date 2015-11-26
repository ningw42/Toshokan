<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

  public function add()
  {

  }

  public function archive()
  {
  	$this->load->model('wishlists');
  	//get all wish lists
  	$wishlists = Wishlists::findOnCond(array());
  	$data['wishlists'] = $wishlists;
  	$this->load->view('header');
	$this->load->view('navbar');
	$this->load->view('wishlist', $data);
	$this->load->view('modal');
	$this->load->view('footer');
  	
  }

  public function delete()
  {
    
  }
}
