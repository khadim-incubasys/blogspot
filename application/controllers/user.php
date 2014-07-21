<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('array');
		$this->load->helper('login');
		date_default_timezone_set('Asia/karachi');
	}
	public function index()
	{
		$this->fblogin();
	}
	function gotosignup()
	{
		        $this->load->model('Category_model');
				$data['cat']=$this->Category_model->retrieve_cat();

				$this->load->view('partial/header',$data);
		        // $this->load->view('test_view');
		        $this->load->view('signup_view');
		        $this->load->view('partial/footer');
	}
	function send_email()
	{
		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'user@example.com';                 // SMTP username
		$mail->Password = 'secret';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

		$mail->From = 'from@example.com';
		$mail->FromName = 'Mailer';
		$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
		$mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo('info@example.com', 'Information');
		$mail->addCC('cc@example.com');
		$mail->addBCC('bcc@example.com');

		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Here is the subject';
		$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Message has been sent';
}
	}
	function signUp()
	{
		$this->send_email();

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
			if ($result->fname=='khadim') 
			{
				 $arr['url']='admin/index';
			}
			else
			{
				 $arr['url']='welcome/index';
			}
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
		        $this->load->view('login_view',$data);
		        //$this->load->view('test_view',$data);
		       // $this->load->view('signup_view');
		        $this->load->view('partial/footer');
		   }
}
}