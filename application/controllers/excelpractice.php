<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excelpractice extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->helper('string');
		// $this->load->library('phpexcel');
	}

	public function index()
	{
		$this->load->model('Category_model');
		$data['cat']=$this->Category_model->retrieve_cat();

		$this->load->view('partial/header',$data);
		$this->load->view('excelpractice_view');
		$this->load->view('partial/footer');
		
	}
	function make_report()
	{
		$this->load->model('Excelpractice_model');
		$data['cat']=$this->Excelpractice_model->export_file();

	}
	function count_words()
	{
		$this->load->model('Excelpractice_model');
		$this->Excelpractice_model->count_words();

	}
}