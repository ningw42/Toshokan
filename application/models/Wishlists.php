<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Wishlists extends Data_Mapper {
	public $id;
	public $user_id;
	public $link;
	public $user_name;

	public static $table = 'wish_lists';

	public function __construct($data=null)
	{
		if($data)
		{
			$this->id = $data['id'];
			$this->user_id = $data['user_id'];
			$this->link = $data['link'];
			$this->user_name = $data['user_name'];
		}

	}

	public function get_fields()
	{
		return array(
			'id' => $this->id,
			'user_id' => $this->user_id,
			'link' => $this->link,
			'user_name' => $this->user_name
		);
	}
}
