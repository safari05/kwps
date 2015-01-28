<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller{
    
    private $title = 'Data Customers';
    private $table = 'customers';
    private $primarykey = 'code';
    
    public function __construct(){
        parent::__construct();
        
        $this->load->library(array('pagination','session','template'));
        $this->load->model(array('m_customers'));
        
        if($this->session->userdata('username')){
            redirect('web');
        }
    }
    
    public function index(){
       
        
        $this->template->display('customers/index');
    }
}