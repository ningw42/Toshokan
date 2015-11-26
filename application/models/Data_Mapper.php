<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Mapper extends CI_Model
{
	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
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

    /**
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function findByIds($id)
    {
        $CI =& get_instance();
    	$query = $CI->db->get_where(static::$table, array('id' => $id));
        return new static($query->row_array());
    }

    public static function findOnCond($cond, $limit)
    {

    }

    /**
     * support insert batch
     */
    public static function insert()
    {

    }

    /**
     * support delete batch
     */
    public static function delete()
    {

    }

}