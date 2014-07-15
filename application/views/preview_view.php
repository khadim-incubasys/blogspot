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
		
		  


 <!--/stories-->
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
   					<!--  Images loadings -->
					<form action='<?=base_url()?>image/set_order' method="post">
					<?php
					$count=0;
					foreach ($images->result_array() as $img)
					{ ?>
					<!-- <h3><?= base_url().$img['image_name'] ?></h3> -->
					<img src="<?= base_url().$img['image_name'] ?>" style="width:100px;height:100px"  class="img-thumbnail">
					oder:<input type="text"  style="width:20px" name="<?= $count ?>">
					&nbsp;
					<input type="hidden" name="pid<?= $count ?>" value="<?= $img['id'] ?>">
					<?php $count=$count+1; } ?>
					<input type="hidden" name="count" value="<?= $count ?>">

					<input type="submit" value="Set order" >
					</form>	 
					<!-- end images loADINGS -->

   				</div>
				<div class="col-xs-3"></div>
			</div>
			  <br><br>
			</div>
		  </div>
 <?php     } ?>
<!--/stories-->
		  <!-- <a href="preview" class="btn btn-primary pull-right btnNext">BACK <i class="glyphicon glyphicon-chevron-right"></i></a> -->
		  <a href="<?= base_url().'post/upload_img'.'/'.$param ?>" class="btn btn-primary pull-right btnNext" >BACK</a>
		  
		</div>
	  </div>
																					   
													
													  
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
