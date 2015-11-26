<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Mapper extends CI_Model
{
	public function __construct()
    {
        // Call the CI_Model constructor
        $this->load->database();
    }

    public function save()
    {
    	if(!empty($this->id))
    	{
    		//update
    		$this->db->where('id', $this->id);
    		$this->db->update($this->table, $this->get_fields());
    	}
    	else
    	{
    		$this->db->insert($this->table, $this->get_fields());
    	}
    }

    public static function findById($id)
    {
        $CI =& get_instance();
    	$query = $CI->db->get_where(static::$table, array('id' => $id));
        $obj = new static();
    	return $query->row_array();
    }

}