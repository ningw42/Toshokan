<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User extends Data_Mapper {
	public $id;
	public $name;
	public $avatar;
	public $department;
	public $phone;
	public $role;
	public $borrow_times;
	public $password;

	public static $table = 'users';

	// public $data = array(
	// 	'id' => $this->id,
	// 	'name' => $this->name,
	// 	'avatar' => $this->department,
	// 	'phone' => $this->phone,
	// 	'role' => $this->role,
	// 	'borrow_times' => $this->borrow_times,
	// 	'password' => $this->password
	// );
	// 
	// public function __construct()
 //    {
 //        // Call the CI_Model constructor
 //        parent::__construct();
 //        $this->load->database();
 //    }

	public function get_fields()
	{
		return array(
			'id' => $this->id,
			'name' => $this->name,
			'avatar' => $this->department,
			'phone' => $this->phone,
			'role' => $this->role,
			'borrow_times' => $this->borrow_times,
			'password' => $this->password
		);
	}

	

	public function isAdmin()
	{
		return $this->role == 1; 
	}

	public function list_books_borrowed()
	{
		
	}

}