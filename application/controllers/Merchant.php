<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchant extends CI_Controller
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
       
            $data['merchant']=$this->Merchant_model->get_all_merchant();

            $this -> load -> view('common/head.php');
            $this->load->view('common/sidebar.php');
            $this->load->view('dashboard.php');
            $this -> load -> view('common/footer.php');
    }
    public function parent()
    {
      
            $data['merchant']=$this->Merchant_model->get_all_merchant();
            $data['page']='parents';
            $this -> load -> view('common/head.php');
            $this->load->view('common/sidebar.php', $data);
            $this->load->view('parents.php',$data);
            $this -> load -> view('common/footer.php');

    }
    public function add_bus()
    {
       
           $data['merchant']=$this->Merchant_model->all_bus();

            $data['page']='add_bus';
            $this -> load -> view('common/head.php');
            $this->load->view('common/sidebar.php', $data);
            $this->load->view('add_bus.php', $data);
            $this -> load -> view('common/footer.php');

    }
    public function all_driver()
    {
      
            $data['merchant']=$this->Merchant_model->all_driver();

            $data['page']='driver';
            $data['sub_page']='view_doctors';
            $this -> load -> view('common/head.php');
            $this->load->view('common/sidebar.php', $data);
            $this->load->view('all_drivers.php', $data);
            $this -> load -> view('common/footer.php');

    }
    public function add_driver()
    {
       
           $data['merchant']=$this->Merchant_model->all_bus_available();

            $data['page']='driver';
            $data['sub_page']='add_driver';
            $this -> load -> view('common/head.php');
            $this->load->view('common/sidebar.php', $data);
            $this->load->view('add_driver.php');
            $this -> load -> view('common/footer.php');
    }
    
}