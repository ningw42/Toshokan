<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Book extends Data_Mapper {
	public $id;
	public $name;
	public $author;
	public $publisher;
	public $link;
	public $price;
	public $tag;
	public $description;
	public $borrow_times;
	public $cover;

	public static $table = 'books';

	public function get_fields()
	{
		return array(
			'id' => $this->id,
			'name' => $this->name,
			'author' => $this->author,
			'publisher' => $this->publisher,
			'link' => $this->link,
			'price' => $this->price,
			'tag' => $this->tag,
			'description' => $description
			'borrow_times' => $borrow_times,
			'cover' => $cover
		);
	}
	/*public function __construct()
	{		
		// Call the CI_Model constructor
        parent::__construct();
	}*/
}