<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apidetails extends CI_Controller
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
        $this -> load -> model('Merchant_model');
    }
    public function index()
    {
        $this -> load -> view('api_views/allapi.php');

    }
    public function signup()
    {
        $this->load->view('api_views/signup.php');
    }
    public function login()
    {
        $this->load->view('api_views/login.php');
    }
     public function get_driver()
    {
        $this->load->view('api_views/get_driver.php');
    }
     public function get_parent()
    {
        $this->load->view('api_views/get_parent.php');
    }
      public function update_bus_location()
    {
        $this->load->view('api_views/update_bus_location.php');
    }
     public function get_bus()
    {
        $this->load->view('api_views/get_bus.php');
    }
     public function allbus()
    {
        $allbus= $this->Merchant_model->all_bus();
        //print_r($package_data);

        if ($allbus) 
        {           
            $arr = array('status' => 'true', 'message' => 'Get All Bus','data'=> $allbus);
             header('Content-Type: application/json');      
              echo json_encode($arr);
            }
            else
            {

                $arr = array('status' => 'false', 'message' => 'No Bus Found'); 
                header('Content-Type: application/json');      
                echo json_encode($arr);
            }
    }
     public function alldrivers()
    {
       
        $alldriver= $this->Merchant_model->all_driver();

        if ($alldriver) 
        {           
            foreach ($alldriver as $alldriver1) {
                $alldriver1->image= base_url($alldriver1->image);

            }
            //echo $alldriver->image;

            $arr = array('status' => 'true', 'message' => 'Get All Bus Drivers','data'=> $alldriver);
             header('Content-Type: application/json');      
              echo json_encode($arr);
            }
            else
            {

                $arr = array('status' => 'false', 'message' => 'No Bus Driver Found'); 
                header('Content-Type: application/json');      
                echo json_encode($arr);
            }
    }
      public function allparents()
    {
        $allparents= $this->Merchant_model->get_all_merchant();
        //print_r($package_data);

        if ($allparents) 
        {           
            $arr = array('status' => 'true', 'message' => 'Get All Parents','data'=> $allparents);
             header('Content-Type: application/json');      
              echo json_encode($arr);
            }
            else
            {

                $arr = array('status' => 'false', 'message' => 'No Parents Found'); 
                header('Content-Type: application/json');      
                echo json_encode($arr);
            }
    }
}
