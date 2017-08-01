<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this -> load -> library('session');
        $this -> load -> helper('form');
        $this -> load -> helper('url');
        $this -> load -> database();
        $this -> load -> library('form_validation');
        $this -> load -> model('Login_model');
        $this -> load -> model('Admin_model');

    }

    /**
     *
     */
    public function index()
    {
        $email= $_POST['email'];
        $password=$_POST['password'];
       // echo $email,$password;

        $data['email']= $email;
        $data['password']= $password;
                $sess_array=array();
        $getdata=$this->Admin_model->login($data);
        if($getdata)
        {           
  
        $this->session->unset_userdata($sess_array);
            $sess_array = array(
             'email' => $getdata[0]->email,
             'name' => $getdata[0]->name,
           );
           $this->session->set_userdata( $sess_array);
        $dataget['get_data'] =$getdata;
            $dataget['see_data'] =$sess_array;
            redirect('Merchant');
        }
        else
        {
             redirect('Login');
        }

    }
    public function login()
    {
        $this -> load -> view('common/head.php');
        $this -> load ->view('login.php');
        $this -> load -> view('common/footer.php');
    }
    public function signup()
    {
        $this -> load -> view('common/head.php');
        $this -> load ->view('signup.php');
        $this -> load -> view('common/footer.php');
    }

    public function signup_Store()
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $data['name']=$name;
        $data['email']=$email;
        $data['password']=md5($password);
        if($this -> Login_model -> insert_data($data)){
                redirect('Login');
        }
        else{
            redirect('Signup');
        }

    }

    public function forgotpassword()
    {
        $this -> load -> view('common/head.php');
        $this->load ->view('forgotpassword.php');
        $this -> load -> view('common/footer.php');
    }
}

