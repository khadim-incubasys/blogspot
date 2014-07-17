<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('array');
	}
	public function index()
	{
		$this->load->model('Category_model');
		$data['cat']=$this->Category_model->retrieve_cat();

		$this->load->view('partial/header',$data);
         $this->load->view('category_view',$data);
       // $this->load->view('signup_view');
        $this->load->view('partial/footer');
    }
    function crud()
    {
    	// echo json_encode(array("success" => "1","id" => "4"));
    	// print_r($_POST['action']);
    	// die();
	$this->load->model('Category_model');
	//$this->Category_model->retrieve_cat();		
	// $this->Category_model =$this->model->()

	if(isset($_POST) && count($_POST))
	{
		
		// whats the action ??
		$action = $_POST['action'];
		unset($_POST['action']);

		if($action == "save"){		
			// remove 'action' key from array, we no longer need it

			// Never ever believe on end user, he could be a evil minded
			$escapedPost = array_map('mysql_real_escape_string', $_POST);
			$escapedPost = array_map('htmlentities', $escapedPost);
				
			$res = $this->Category_model->save($escapedPost);
			
			if($res){
				$escapedPost["success"] = "1";
				$escapedPost["id"] = $res;
				echo json_encode($escapedPost);
			}
			else
				echo $this->Category_model->error("save");
		}else if($action == "del"){
			$id = $_POST['rid'];
			$res = $this->Category_model->delete_record($id);
			if($res)
				echo json_encode(array("success" => "1","id" => $id));	
			else
				echo $this->Category_model->error("delete");
		}
		else if($action == "update"){
			
			$escapedPost = array_map('mysql_real_escape_string', $_POST);
			$escapedPost = array_map('htmlentities', $escapedPost);

			$id = $this->Category_model->update_record($escapedPost);
			if($id)
			{
				
				echo json_encode(array_merge(array("success" => "1","id" => $id),$escapedPost));	
			}
			else
			{

				echo $this->Category_model->error("update");
			}
		}
		else if($action == "updatetd"){
			
			$escapedPost = array_map('mysql_real_escape_string', $_POST);
			$escapedPost = array_map('htmlentities', $escapedPost);

			$id = $this->Category_model->update_column($escapedPost);
			if($id)
				echo json_encode(array_merge(array("success" => "1","id" => $id),$escapedPost));	
			else
				echo $this->Category_model->error("updatetd");
		}
	}
	else
		echo $this->Category_model->error("delete");

    }
    function foo()
    {
    	echo "string";
    }
}