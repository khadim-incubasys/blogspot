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

<link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/blogspot.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-responsive.min.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</head>

<?php 
$data['query']=$query;
$this->load->view('partial/header',$data); 
$this->load->view('partial/body',$data); 
$this->load->view('partial/footer',$data); 
?>
</html> 

