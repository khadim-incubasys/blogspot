<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Controller 
{
	public function __construct() {

		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('text');
	}

	public function set_order()
	{
		$this->load->model('Image_model');
		$param=$this->Image_model->order_set();
		$data['message']='Comment added Successfully! . . :)';
        $data['home']='';
        $this->load->model('Category_model');
		$data['cat']=$this->Category_model->retrieve_cat();
        $this->load->view('partial/header',$data);
		$this->load->view('errorshow',$data);
		$this->load->view('partial/footer');	
	}
}
