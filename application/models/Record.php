<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Record extends Data_Mapper {
	public $id;
	public $user_id;
	public $book_id;
	public $borrow_time;
	public $due;

	public static $table = 'records';


	public function get_fields()
	{

		return array(
			'id' => $this->id,
			'user_id' => $this->user_id,
			'book_id' => $this->book_id,
			'borrow_time' => $this->borrow_time,
			'due' => $this->due
		);
	}

}