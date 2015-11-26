<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Wishlists extends Data_Mapper {
	public $id;
	public $user_id;
	public $link;
	public $user_name;
	public $is_stocked_in;
	public $count;
	public $name;
	public $publisher;
	public $author;
	public $price;

	public static $table = 'wish_lists';

	public function __construct($data=null)
	{
		if($data)
		{
			$this->id = $data['id'];
			$this->user_id = $data['user_id'];
			$this->link = $data['link'];
			$this->user_name = $data['user_name'];
			$this->count = $data['count'];
			$this->is_stocked_in = $data['is_stocked_in'];
			$this->name = $data['name'];
			$this->publisher = $data['publisher'];
			$this->author = $data['author'];
			$this->price = $data['price'];
		}

	}

	public function get_fields()
	{
		return array(
			'id' => $this->id,
			'user_id' => $this->user_id,
			'link' => $this->link,
			'user_name' => $this->user_name,
			'count' => $this->count,
			'is_stocked_in' => $this->is_stocked_in,
			'name' => $this->name,
			'author' => $this->author,
			'price' => $this->price,
			'publisher' => $this->publisher,
		);
	}

	public function save($is_update = NULL)
  {
    if($is_update)
    {
    	//update
    	$this->db->where('id', $this->id);
    	$this->db->update(static::$table, $this->get_fields());
    }
    else
    {
    	$this->db->insert(static::$table, $this->get_fields());
    }
  }
}
