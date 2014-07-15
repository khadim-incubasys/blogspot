<?php
class Dragdrop extends CI_Controller 
{
	public function __construct() {

		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('text');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('test_view');
	}
	function sort_drag_drop()
	{
		if ($_POST) 
		{
			$this->load->model('Dragdrop_model');
			$this->Dragdrop_model->save_orders();
			return ;
		}
	}
	function dragdrop_ordering()
	{
		$action = mysql_real_escape_string($_POST['action']); 
		$updateRecordsArray = $_POST['recordsArray'];

		if ($action == "updateRecordsListings")
		{
			$this->load->model('Dragdrop_model');
			$this->Dragdrop_model->saverecords();
			
			echo '<pre>';
			print_r($updateRecordsArray);
			echo '</pre>';
			echo 'If you refresh the page, you will see that records will stay just as you modified.';
		}

	}

}
