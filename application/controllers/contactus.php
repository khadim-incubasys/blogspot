<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactus extends CI_Controller 
{
	public function __construct() {

		parent::__construct();
	}

	public function index()
	{
		
		$this->load->model('Category_model');
		$data['cat']=$this->Category_model->retrieve_cat();
        $this->load->view('partial/header',$data);

        $this->load->view('contactus');
		 $this->load->view('partial/footer');
		

	}
	function submitmsg()
	{

		$this->load->model('Contactus_model');
		$this->Contactus_model->savemessage();
		$data['messages']=$this->Contactus_model->fetch_messages();
		$this->load->view('displaymsg_view',$data);
	}
	function get_messages()
	{

		$this->load->model('Contactus_model');
		$data['messages']=$this->Contactus_model->fetch_messages();
		
		$this->load->view('displaymsg_view',$data);
	}
}