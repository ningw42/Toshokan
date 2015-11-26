<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends Data_Mapper {
	public $id;
	public $name;
	public $avatar;
	public $department;
	public $phone;
	public $role;
	public $borrow_times;
	public $password;

	public static $table = 'users';

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

	public function __construct($data=null)
	{
		if($data)
		{
			$this->id = $data['id'];
			$this->name = $data['name'];
			$this->avatar = $data['avatar'];
			$this->department = $data['phone'];
			$this->role = $data['role'];
			$this->borrow_times = $data['borrow_times'];
			$this->password = $data['password'];
		}
		
	}

	

	public function isAdmin()
	{
		return $this->role == 1; 
	}

	public function list_books_borrowed()
	{
		
	}

}