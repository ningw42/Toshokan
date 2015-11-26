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
    $CI = &get_instance();
    $query = $CI->db->get_where(static::$table, array('id' => $id));
    return new static($query->row_array());
  }

  /**
    * select on condition
    * @param  [array] $cond
    * ('id>' => 10, 'name' = 'James')
    * where id >= 10 and name = 'James'
    * @param  [number] $limit [description]
    * @return array(obj)
    */
  public static function findOnCond($cond, $limit)
  {
    $CI =& get_instance();
    $result = array();
    $query = $CI->db->get_where(static::$table, $cond, $limit);
    foreach ($query->result_array() as $row)
    {
    	array_push($result, new static($row));
    }
    return $result;
  }

  public static function insert($data)
  {
    $CI =& get_instance();
    $query = $CI->db->insert(static::$table, $data);
  }


  /**
    * insert batch
    */
  public static function insert_batch($data)
  {
    $CI =& get_instance();
    $query = $CI->db->insert_batch(static::$table, $data);
  }
  /**
    * support delete batch
    */
  public static function delete($cond)
	{
    $CI =& get_instance();
    $CI->db->where($cond);
    $CI->db->delete(static::$table);
  }

}
