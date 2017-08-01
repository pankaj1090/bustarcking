<?php

class Merchant_model extends CI_Model
{
    public function __construct()
    {
        $this->load->helper('new_helper');
    }

    public function merchant_insert($data)
    {
        $this->db->insert('merchant', $data);
          return $this->db->insert_id();
    }
    public function add_bus($data)
    {
        $this->db->insert('bus', $data);
        return true;
    }
     public function add_driver($data)
    {
        $this->db->insert('driver', $data);
        return true;
    }
    public function login_parents($mobile_no,$password)
    {
        $this->db->where('mobile_no',$mobile_no);
        $this->db->where('password',md5($password));
        $this -> db -> from('merchant');
        $query = $this -> db -> get();
        return $query->result();
    }
     public function login_admin($mobile_no,$password)
    {
        $this->db->where('mobile_no',$mobile_no);
        $this->db->where('password',$password);
        $this -> db -> from('admin');
        $query = $this -> db -> get();
        return $query->result();
    }
     public function login_driver($mobile_no,$password)
    {
        $this->db->where('mobile_no',$mobile_no);
        $this->db->where('password',md5($password));
        $this -> db -> from('driver');
        $query = $this -> db -> get();
        return $query->result();
    }
     public function get_bus($id)
    {
        $this->db->where('id',$id);
        $this -> db -> from('bus');
        $query = $this -> db -> get();
        return $query->result();
    }
     public function get_bus_by_no($bus_no)
    {
        $this->db->where('id',$bus_no);
        $this -> db -> from('bus');
        $query = $this -> db -> get();
        return $query->result();
    }
      public function get_driver($id)
    {
        $this->db->where('id',$id);
        $this -> db -> from('driver');
        $query = $this -> db -> get();
        return $query->result();
    }
   public function get_driver_by_bus($bus_no)
    {
        $this->db->where('bus_no',$bus_no);
        $this -> db -> from('driver');
        $query = $this -> db -> get();
        return $query->result();
    }
       public function get_parent($id)
    {
        $this->db->where('id',$id);
        $this -> db -> from('merchant');
        $query = $this -> db -> get();
        return $query->result();
    }
    public function  check_merchant($mobile_no)
    {
    	$this->db->where('mobile_no',$mobile_no);
        $this -> db -> from('merchant');
        $query = $this -> db -> get();
        return $query->result();
    }
 public function  check_driver($mobile_no)
    {
    	$this->db->where('mobile_no',$mobile_no);
        $this -> db -> from('driver');
        $query = $this -> db -> get();
        return $query->result();
    }
    public function get_all_merchant()
    {
        $this -> db -> from('merchant');
        $query = $this -> db -> get();
        return $query->result();
    }
    public function all_driver()
    {
        $this -> db -> from('driver');
        $query = $this -> db -> get();
        return $query->result();
    }
    public function  all_bus_available()
    {
    	$this->db->where('status','available');
        $this -> db -> from('bus');
        $query = $this -> db -> get();
        return $query->result();
    }
    public function all_bus()
    {
        $this -> db -> from('bus');
        $query = $this -> db -> get();
        return $query->result();
    }
    public function deletebus($id)
    {
        $this->db-> where('id', $id);
        $query = $this->db->delete('bus');   
    }
    public function deletedriver($id)
    {
        $this->db-> where('id', $id);
        $query = $this->db->delete('driver');   
    }
    public function deleteparent($id)
    {
        $this->db-> where('id', $id);
        $query = $this->db->delete('merchant');   
    }
    public function get_driver_by_id($id)
    {
        $this->db-> where('id', $id);
        $this->db->select("*");
        $this->db->from('driver');
        $query = $this->db->get();
        return $query->result();   
    }
   public function edit_driver($data, $id)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('driver',$data);
    }
   public function update_bus($getdata)
    {
        $this->db->where('id', $getdata['id']);
        $this->db->update('bus',$getdata);
    }
    public function update_bus_location($data, $id)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('bus',$data);
    }
}
