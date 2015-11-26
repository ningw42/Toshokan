<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Records extends Data_Mapper {
	public $id;
	public $user_id;
	public $book_id;
	public $borrow_time;
	public $due;
	public $is_returned;

	public static $table = 'records';

	public function __construct($data=null)
	{
		if($data)
		{
			$this->id = $data['id'];
			$this->user_id = $data['user_id'];
			$this->book_id = $data['book_id'];
			$this->book_name = $data['book_name'];
			$this->borrow_time = $data['borrow_time'];
			$this->due = $data['due'];
			$this->is_returned = $data['is_returned'];
		}
		
	}

	public function get_fields()
	{

		return array(
			'id' => $this->id,
			'user_id' => $this->user_id,
			'book_id' => $this->book_id,
			'borrow_time' => $this->borrow_time,
			'due' => $this->due,
			'is_returned' => $this->is_returned
		);
	}

}