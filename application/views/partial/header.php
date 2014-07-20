 <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Blog Spot</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.1.1.min.js"); ?>"></script>

  

<!-- ********** for the file upload  ************-->
<link rel="stylesheet" href="<?php echo base_url("assets/fancy_multiple_file_uploads/css/vpb_uploader.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/dynamicCRUD/css/jquery-ui.css"); ?>">
<!-- ********************************* -->

<!-- parsley validation-->

<script type="text/javascript" src="https://rawgithub.com/ryanjoyceuk/Parsley.js/master/parsley.js"></script>

<!-- end op parsley -->

<!-- sitep piont form validation --><!-- ************** -->
<!-- <link rel="stylesheet" href="<?php echo base_url("assets/formsValidation/formvalid.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("assets/formsValidation/form.js"); ?>"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->

<!-- end   -->
<!-- for drag drop sort -->
<script type="text/javascript" src="<?php echo base_url("assets/dynamicCRUD/js/jquery-ui.js"); ?>"></script>

<!-- end **** -->
<!-- contactus -->
<!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/contactus.css"); ?>" > -->
<!--  -->
<!-- dasboard -->
  <link rel="stylesheet" href="<?php echo base_url("assets/dashboard/css/layout.css"); ?>" >
  <script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/hideshow.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.tablesorter.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/jquery.equalHeight.js"); ?>"></script>
<!--  -->

<!-- for stylish login -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
  <!--  -->

<style>

</style>
<link rel="stylesheet" href="<?php echo base_url("assets/css/blogspot.css"); ?>">
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
      <a href="<?= base_url() ?>" class="navbar-brand">Home</a>
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
          <?php
          echo '<a href='.base_url().'contactus/index>Contact Us</a>';
          ?>
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
              <?=$row->fname.' '.$row->lname ?>
               <?php   } ?>
          </a>
        </li>
        <li>
          <a>
          <?php
           if ($this->session->userdata('udata')) { 
               $row=$this->session->userdata('udata');
              ?>
             <img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="<?= $row->pic ?>" style="width: 50px; height: 55px;">
          <?php } ?>
          </a>
        </li>

        <li>
          <!-- <a href="#">Login</a> -->
          <?php
           if (!$this->session->userdata('udata')) {
              echo '<a href="'. base_url().'user/index">Login</a> ';
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


