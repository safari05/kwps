<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_customers extends CI_Model{
    
    private $table = 'customers';
    private $primarykey = 'code';
    
    
    public function GetAllByOrderby($num,$offset){
        
        $this->db->order_by('code','ASC');
        $data = $this->db->get($this->table,$num,$offset);
        return $data->result();
    }
    public function searchCustomers($search){
        $this->db->like($this->primarykey,$search);
        $this->db->or_like("customersname",$search);
        return $this->db->get($this->table);
    }
    
}