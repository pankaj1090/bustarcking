<?php
/**
 * Created by PhpStorm.
 * User: pankaj Choudhary   
 * Date: 03/07/2017
 * Time: 4:17 PM
 */
//        if (!defined('BASEPATH'))
//        exit('No direct script access allowed');
class Login_model extends CI_Model
{
    public function __construct()
    {
        $this->load->helper('new_helper');
    }
    public function check_user($email)
    {
        $this -> db -> where('email', $email);
        $this -> db -> from('user');
        $query = $this -> db -> get();
        if( $query -> result())
        {
            return true;
        }
        else{
            return false;
            }

        //echo test_method('Hello World');
    }
    public function insert_data($data)
    {

        if($this->check_user($data['email']))
        {
            return false;

        }
        else{
         $this->db->insert('user', $data);
        return true;
        }
    }

    public function get_user($email,$password)
        {
            echo $email,$password;

        }
}