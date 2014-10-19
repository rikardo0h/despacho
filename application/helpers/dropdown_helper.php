<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
 
  function listData($table,$name,$value,$orderBy='ASC') {
    $items = array();
    $CI =& get_instance();
    if($orderBy) {
      $CI->db->order_by($value,$orderBy);
    }
    $query = $CI->db->select("$name,$value")->from($table)->get();
    if ($query->num_rows() > 0) {
      foreach($query->result() as $data) {
        $items[$data->$name] = $data->$value;
      }
    $query->free_result();
    return $items;
  }
}

