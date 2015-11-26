<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

  public function add()
  {
  	$link = $this->input->post('link');
  	$this->load->model('wishlists');
  	$user = $this->current_user();
  	$wishlist = new Wishlists();
  	$wishlist->link = $link;
  	$wishlist->user_id = $user->id;
  	$wishlist->user_name = $user->name;
  	$wishlist->save();
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

  private function current_user()
	{
		$this->load->model('users');
		return Users::findByIds(2);
	}
}
