<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class web extends CI_Controller {

    private $title = 'kwps';
	public function index()
	{
	   $data['title']=$this->title;
       $this->load->view('web/index',$data);
	}
}
