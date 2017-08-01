<?php
	/**
	* 
	*/
	class Admin_model extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}
		public function login($data)
		{
			$condition['email']=$data['email'];
			$condition['password']= $data['password'];
			$email=$data['email'];;
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where($condition);
			$query = $this->db->get();
			$data= $query->result();		
				return $data;
		}

}		