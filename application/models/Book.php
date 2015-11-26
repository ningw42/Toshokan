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

	public function __construct($data)
	{
		$this->id = $data['id'];
		$this->name = $data['name'];
		$this->author = $data['author'];
		$this->publisher = $data['publisher'];
		$this->link = $data['link'];
		$this->price = $data['price'];
		$this->tag = $data['tag'];
		$this->description = $data['description'];
		$this->borrow_times = $data['borrow_times'];
		$this->cover = $data['cover'];
	}

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