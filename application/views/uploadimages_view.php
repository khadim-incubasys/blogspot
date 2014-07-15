<div id="masthead">  
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>Blog Spot
					<p class="lead">Leave related Post</p>
				</h1>
			</div>
			
		</div> 
	</div><!-- /cont -->
</div>
<div class="container">
	<div class="row">

		<div class="col-md-12"> 

			<div class="panel">
				<div class="panel-body">

<!--Post loading-->
<?php
$img=$this->session->userdata('udata');
foreach ($query->result_array() as $row)
{ ?>
		<div class="row"> <br> <div class="col-md-2 col-sm-3 text-center">
			<?php
           if ($this->session->userdata('udata')) { 
              ?>
               <a>
             <img  src="<?= $img->pic ?>"  style="width:100px;height:100px" class="img-circle">
           </a>
          <?php }
          else
           { 
           	?>
           	<a class="story-img" href="#"><img src="//placehold.it/100" style="width:100px;height:100px" class="img-circle"></a>
          <?php } ?>
			</div> 
		 <div class="col-md-10 col-sm-9"> 
		 <h3><?= $row['title'] ?></h3> 
			<div class="row">
				<div class="col-xs-9"> 


   					<p> <?=$row['post'] ?></p> 
   					<!-- <a href="<?= base_url().'post/viewarticle/'.$row['postid'] ?>">Read More</a>  -->

					<!-- <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p> -->
				  <!-- <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul> -->
				  </div>
				<div class="col-xs-3"></div>
			  </div>
			  <br><br>
			</div>
		  </div>
		  <hr> 
 <?php     } ?>
<!-- end post loading -->
<!-- For the file uploading -->
<div id="forms" class="menu">
	<center>
		<div style="font-family:Verdana, Geneva, sans-serif; font-size:24px;" align="center">Upload images for the Post</div>
	</center>
	<br clear="all" />

	<!-- Browse and Submit Added Giles Area -->
	<center>
		<div style="width:800px; margin-top:20px;" align="center">  
			<form name="vasplus_form_id" id="vasplus_form_id" action="javascript:void(0);" enctype="multipart/form-data">
				<div style="width:300px;" align="center">
					<div style="width:230px; float:left;" align="right">
						<div class="vpb_browse_file_box">
							<input type="file" name="vasplus_multiple_files" id="vasplus_multiple_files" multiple="multiple" style="opacity:0;-moz-opacity:0;filter:alpha(opacity:0);z-index:9999;width:90px;padding:5px;cursor:default;" />
						</div>
					</div>
					<div style="width:70px; float:left;" align="left">
						<input type="submit" value="Upload" class="popbtn" />
					</div>
					<br clear="all">
				</div>
			</form>
		</div>
	</center>
	
	<br clear="all" />

	<!-- Uploaded Files Displayer Area -->
	<div id="vpb_added_files_box" class="vpb_file_upload_main_wrapper" style="margin-left:-25px;"> 
		<div id="vpb_file_system_displayer_header">
			<div id="vpb_header_file_names">
				<div style="width:365px; float:left;">File Names</div>
				<div style="width:90px; float:left;">Status</div>
			</div>
			<div id="vpb_header_file_size">Size</div>
			<div id="vpb_header_file_last_date_modified">Last Modified</div>
			<br clear="all" />
		</div>
		<input type="hidden" id="added_class" value="vpb_blue">
		<span id="vpb_removed_files"></span> 
	</div>
		<p style="padding-bottom:40px;">&nbsp;</p>
	</div>

	<!-- end of file uploading -->
</div>

<hr> 
<a href="<?= base_url().'post/preview/'.$param ?>" class="btn btn-primary pull-right btnNext">Preview <i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
</div>
<input type="hidden" id="baseurl" value="<?= base_url();?>">


</div><!--/col-12-->
</div>
</div>


<hr>

<div class="container" id="footer">
	<div class="row">
		<div class="col col-sm-12">

			<h1>Follow Us</h1>
			<div class="btn-group">
				<a class="btn btn-twitter btn-lg" href="#"><i class="icon-twitter icon-large"></i> Twitter</a>
				<a class="btn btn-facebook btn-lg" href="#"><i class="icon-facebook icon-large"></i> Facebook</a>
				<a class="btn btn-google-plus btn-lg" href="#"><i class="icon-google-plus icon-large"></i> Google+</a>
			</div>

		</div>
	</div>
</div>
<hr>
