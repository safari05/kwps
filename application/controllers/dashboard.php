<?php
class Dashboard extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        //$this->load->model('m_petugas');
        $this->load->library(array('form_validation','template','session'));
        /*
        if(!$this->session->userdata('username')){
            redirect('web');
        }
        */
    }
    public function index(){
        $data['title'] = 'Dashborad index';
        $this->template->display('dashboard/index',$data);
    }
    
}

