<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Books extends Data_Mapper {
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
	public $inventory;

	public static $table = 'books';
	
	public function __construct($data=null)
	{
		if($data)
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
			$this->inventory = $data['inventory'];
		}

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
			'description' => $this->description,
			'borrow_times' => $this->borrow_times,
			'cover' => $this->cover,
			'inventory' => $this->inventory,
		);
	}
	/*public function __construct()
	{
		// Call the CI_Model constructor
        parent::__construct();
	}*/
}
