<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class web extends CI_Controller {
    
    private $title = 'kwps';
    private $limit = 10;
        
    public function __construct(){
        parent::__construct();
        $this->load->library(array('pagination'));
        $this->load->model('m_customers');
    }
	public function index()
	{
	   $data['title']=$this->title;
       $this->load->view('web/index',$data);
	}
    
    public function customers_view($id=null){
        $data['title']='Data Customers';
        
        //create query customers all with function nums_row
       // $sql = $this->db->get('customers');
        $sql = $this->db->get('customers'); 
        $config['base_url'] = base_url().'web/customers_view';
        $config['total_rows'] = $sql->num_rows();
        $config['per_page'] = 10;
        $config['first_page'] ='Awal';
        $config['last_page'] = 'Akhir';
        $config['next_page'] = '>>';
        $config['prev_page'] = '<<';
        
        //initialitation load library pagination
        $this->pagination->initialize($config);
        
        // create link for view page
        $data['halaman']= $this->pagination->create_links();
        
        //showng data
        $data['query'] = $this->m_customers->GetAllByOrderby($config['per_page'],$id); 
               
        $this->load->view('web/customers_view',$data);
    }
    
    public function search_customers(){
        $data['title'] = 'Data Customers';
        $search =$this->input->post('search');
        $data['query'] = $this->m_customers->searchCustomers($search)->result();
        $this->load->view('web/customers_view',$data);
        
    }
}
