<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

  public function add()
  {
  	$link = $this->input->post('link');

    $temp = [];
    // echo $link;
    preg_match('/([0-9]+)/i', $link, $temp);
    $id = $temp[0];


  	$this->load->model('wishlists');

    $wishlist = Wishlists::findByIds($id);
    if (NULL != $wishlist->id) {
      # update
      // echo "string";
      $wishlist->count += 1;
      $wishlist->save(TRUE);
    } else {
      // echo $id;
      $user = $this->current_user();
      // echo $user->name;
      // echo $user->id;
    	$wishlist = new Wishlists();
    	$wishlist->link = $link;
    	$wishlist->user_id = $user->id;
    	$wishlist->user_name = $user->name;
      $wishlist->id = $id;
      $wishlist->count = 1;
      $wishlist->save(FALSE);
    }
  }

  public function addById()
  {
    $id = $this->input->post('id');

    $this->load->model('wishlists');
    $wishlist = Wishlists::findByIds($id);
    if (NULL != $wishlist->id) {
      # update
      // echo "string";
      $wishlist->count += 1;
      $wishlist->save(TRUE);
      echo "update";
    } else {
      // echo $id;
      $user = $this->current_user();
      // echo $user->name;
      // echo $user->id;
      $wishlist = new Wishlists();
      $wishlist->link = 'http://book.douban.com/subject/'.$id.'/';
      $wishlist->user_id = $user->id;
      $wishlist->user_name = $user->name;
      $wishlist->id = $id;
      $wishlist->count = 1;
      $wishlist->save(FALSE);
      echo "add";
    }
  }

  public function archive()
  {
  	$this->load->model('wishlists');
  	//get all wish lists
  	$wishlists = Wishlists::findOnCond(array(), 20, 'count', 'DESC');
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
