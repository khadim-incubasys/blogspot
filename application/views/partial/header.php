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
<!-- for drag drop sort -->

<script type="text/javascript" src="<?php echo base_url("assets/dragsort/jquery-1.3.2.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dragsort/jquery-ui-1.7.1.custom.min.js"); ?>"></script>

<!-- for drg -->
<style type="text/css">
/*    body { font-family:Arial; font-size:12pt; padding:20px; width: 800px; margin:20px auto; border:solid 1px black; }
    h1 { font-size:16pt; }
    h2 { font-size:13pt; }
    ul { width:350px; list-style-type: none; margin:0px; padding:0px; }
    li { float:left; padding:5px; width:100px; height:100px; }
    li div { width:90px; height:50px; border:solid 1px black; background-color:#E0E0E0; text-align:center; padding-top:40px; }
    .placeHolder div { background-color:white!important; border:dashed 1px gray !important; }*/
  </style>
  <!--  -->

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 16px;
  margin-top: 10px;
}

ul {
  margin: 0;
}

#contentWrap {
  width: 700px;
  margin: 0 auto;
  height: auto;
  overflow: hidden;
}

#contentTop {
  width: 600px;
  padding: 10px;
  margin-left: 30px;
}

#contentLeft {
  float: left;
  width: 400px;
}

#contentLeft li {
  list-style: none;
  margin: 0 0 4px 0;
  padding: 10px;
  background-color:#00CCCC;
  border: #CCCCCC solid 1px;
  color:#fff;
}
#contentRight {
  float: right;
  width: 260px;
  padding:10px;
  background-color:#336600;
  color:#FFFFFF;
}
</style>

<script type="text/javascript">
$(document).ready(function(){        
  $(function() {
    $("#contentLeft ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {
      alert('hit');
      var order = $(this).sortable("serialize") + '&action=updateRecordsListings'; 
      $.post("dragdrop/dragdrop_ordering", order, function(theResponse){
        $("#contentRight").html(theResponse);
      });                                
    }                 
    });
  });

}); 
</script>
<!-- end of drag drop sort -->
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


