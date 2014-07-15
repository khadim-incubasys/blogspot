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
<!-- ********** for the file upload  ************-->
<script type="text/javascript" src="<?php echo base_url("assets/js/fileupload.js"); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url("assets/fancy_multiple_file_uploads/css/vpb_uploader.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("assets/fancy_multiple_file_uploads/js/jquery_1.5.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/fancy_multiple_file_uploads/js/vpb_uploader.js"); ?>"></script>
<!-- ********************************* -->

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


