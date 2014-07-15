<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('array');
		$this->load->helper('login');
	}
	public function index()
	{
		$this->fblogin();
	}
	function gotosignup()
	{
		$this->load->view('signupview');
	}
	function signUp()
	{
		$this->load->model('User_model');
		//$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('fname', 'fname', 'required|min_length[5]|max_length[12]|is_unique[user.username]');
		$this->form_validation->set_rules('fname', 'lname', 'required|min_length[5]|max_length[12]|');
		$this->form_validation->set_rules('pwd', 'Password', 'required|matches[cpwd]');
		$this->form_validation->set_rules('cpwd', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');

		if ($this->form_validation->run() == FALSE)
		{
			echo "Not validated ";
			echo validation_errors(); 
		}
		else
		{
			$result=$this->User_model->signUp();
		}
		$this->index();
	}
	function login()
	{
		$this->load->model('User_model');
		$result=$this->User_model->login();

		if($result)
		{
			$this->session->set_userdata('udata', $result);
	
			$arr['msg']='Loged In Successfully! . . :)';
            $arr['url']='welcome/index';
            $arr['obj']=$this;
            loaderrorshow($arr);
		}
		else
		{
			echo "User Not Exist";
			$this->index();
		}
}
function logout()
{
	$this->load->library('facebook');
	$this->facebook->destroySession();
	$this->session->sess_destroy();

	$arr['msg']='Loged Out Successfully! . . :)';
    $arr['url']='welcome/index';
    $arr['obj']=$this;
	loaderrorshow($arr);
}
public function fblogin()
{

		$this->load->library('facebook'); // Automatically picks appId and secret from config
		$user = $this->facebook->getUser();
		if ($user) 
		{
			
			 $this->load->model('Facebook_model');
		     $this->Facebook_model->login_from_fb($user);
		}
		else
			{
				$this->facebook->destroySession();

		    	$data['login_url'] = $this->facebook->getLoginUrl(array(
		  		'redirect_uri' => site_url('user/fblogin'), 
		        'scope' => array("email") ));

		    	$this->load->model('Category_model');
				$data['cat']=$this->Category_model->retrieve_cat();

				$this->load->view('partial/header',$data);
		        $this->load->view('login',$data);
		        $this->load->view('partial/footer');
		   }
}
}