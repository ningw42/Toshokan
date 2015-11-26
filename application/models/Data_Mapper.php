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

  public function save($is_update = NULL)
  {
    if(!empty($this->id))
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
    * ('id>' => 10, 'name' => 'James')
    * where id >= 10 and name = 'James'
    * @param  [number] $limit [description]
    * @return array(obj)
    */
  public static function findOnCond($cond, $limit=null, $order_by=null, $desc_or_asc=null)
  {
    $CI =& get_instance();
    $result = array();
    $CI->db->where( $cond, $limit);
    
    if($order_by)
    {
      if($desc_or_asc==null)
      {
        $CI->db->order_by($order_by, 'ASC');
      }
      else
      {
        $CI->db->order_by($order_by, $desc_or_asc);
      }
    }
    $query = $CI->db->get(static::$table);
    foreach ($query->result_array() as $row)
    {
        // echo $row;
        $obj = new static($row);
        // echo $obj->book_name;
    	array_push($result, $obj);
    }
    // echo $result[0]['book_name'];
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
