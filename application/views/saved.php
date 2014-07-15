 <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Blog Spot</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/blogspot.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-responsive.min.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</head>


<body>
<header class="navbar navbar-default navbar-" role="banner">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Home</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Categories <b class="caret"></b></a>
            <ul class="dropdown-menu">
               <?php
                    foreach ($cat->result_array()as $row) 
                    { ?> 
                    <li><a href="#"><?= $row['cname'] ?></a></li>
              <?php } ?>     
            </ul>
        </li>
        <li>
          <?php
          echo '<a href='.base_url().'post/addnewpost>New Post</a>';
          ?>

        </li>
        <li>
          <a href="#">About Us</a>
        </li>
        <li>
          <a href="#">Contact us</a>
        </li>
      </ul>
      <ul class="nav navbar-right navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
          <ul class="dropdown-menu" style="padding:12px;">
            <form class="form-inline">
              <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
            </form>
          </ul>
        </li>
        <li>
          <a>
            <?php
              if ($this->session->userdata('udata'))
             {
              $row=$this->session->userdata('udata');
              ?>
              <?=$row['fname'].' '.$row['lname'] ?>
               <?php   } ?>
          </a>
        </li>
        <li>
          <a>

<img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="https://graph.facebook.com/<?=$this->session->userdata('udata')['pic']['id']?>/picture?type=large" style="width: 70px; height: 60px;">
          </a>
        </li>
        <li>
          <!-- <a href="#">Login</a> -->
          <?php
           if (!$this->session->userdata('udata')) {
              echo '<a href="'. base_url().'user/fblogin">Login</a> ';
           }
           else
           {
            echo '<a href="'. base_url().'user/logout">LogOut</a> ';
           }
          ?>
         
        </li>
      </ul>
    </nav>
  </div>
</header>







<!-- // $data['pic'] = $this->facebook->api('/me/picture?type=large&redirect=false');
												// $pic=$data['pic'];
												// print_r($pic['data']['url']); -->











<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//print_r($_POST);
class User extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('array');
  }
  public function index()
  {

    //$this->load->view('login');

    $this->fblogin();
  }
  function gotosignup()
  {
    $this->load->view('signupview');
  }
  function signUp()
  {
    $this->load->model('User_model');
    $this->load->helper(array('form', 'url'));

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
  function login_helper()
  {
        $data['message']='Loged In Successfully! . . :)';
        $data['home']='welcome/index';

        $this->load->model('Category_model');
        $data['cat']=$this->Category_model->retrieve_cat();

        $this->load->view('partial/header',$data);
        $this->load->view('errorshow',$data);
        $this->load->view('partial/footer');
  }
  function login()
  {
    $this->load->model('User_model');

    $result=$this->User_model->login();
    if($result)
    {
      $this->session->set_userdata('udata', $result);
      $this->login_helper();
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

  $data['message']='Loged Out Successfully! . . :)';
  $data['home']='welcome/index';
  $this->load->model('Category_model');
  $data['cat']=$this->Category_model->retrieve_cat();
  $this->load->view('partial/header',$data);
  $this->load->view('errorshow',$data);
  $this->load->view('partial/footer');
}

public function fblogin()
{

    $this->load->library('facebook'); // Automatically picks appId and secret from config
    $user = $this->facebook->getUser();
    if ($user) 
    {
      try 
      {
        $use = $this->facebook->api($user);
        $data['user_profile'] = $this->facebook->api('/me');
          $data['pic'] = $this->facebook->api('/me/picture?type=large&redirect=false');
          $pic=$data['pic'];
                  // print_r($pic['data']['url']);
        $udata=array(
          'fname' => $use['first_name'],
          'lname' => $use['last_name'],
           'pic'=> $pic['data']['url'],
          'email' => $use['email']
          );
        //$this->session->set_userdata('udata', $udata);
        $this->load->model('User_model');
        $result=$this->User_model->signup_fromfb($udata);
                        
        $this->session->set_userdata('udata', $result);
          $this->login_helper();
      } 
      catch (FacebookApiException $e) 
        {
          $user = null;
        }
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




