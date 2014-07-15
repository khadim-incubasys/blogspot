<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct() {

		parent::__construct();
		$this->load->helper("url");
		$this->load->library( 'pagination' );
		$this->load->helper('text');
		$this->load->library('session');
	}

	public function index()
	{
		$config = array();
		$config["base_url"] = base_url() . 'welcome/index/';
		$this->load->model('Post_model');
		$config["total_rows"] = $this->Post_model->record_count();
		$config["per_page"] = 2;
		$config["uri_segment"] = 3;        $config['num_links'] = 5;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['query'] = $this->Post_model->fetch_all_posts($config["per_page"], $page);
		$data['links'] = $this->pagination->create_links();


        $this->load->model('Category_model');
        $data['cat']=$this->Category_model->retrieve_cat();
		$this->load->view('partial/header',$data);
		$this->load->view('partial/body',$data);
		$this->load->view('partial/footer');

	}
}
