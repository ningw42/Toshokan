<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function signin()
	{
		$post_params = $this->input->post();
		if (auth($post_params)) {
			// logged in
		} else {
			// auth failed
			
		}
	}

  public function signup()
  {

  }

  public function signout()
  {

  }
}
