

<div id="masthead">  
  <div class="container">
	<div class="row">
	  <div class="col-md-7">
		<h1>Blog Spot
		  <p class="lead">Leave related Post</p>
		</h1>
	  </div>
	  <div class="col-md-5">
		<div class="well well-lg"> 
		  <div class="row">
			<div class="col-sm-12">
			  Ad Space          
			</div>
		  </div>
		</div>
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
foreach ($query as $row)
{ ?>
		<div class="row"> <br> <div class="col-md-2 col-sm-3 text-center">
			  <a class="story-img" href="#"><img src="//placehold.it/100" style="width:100px;height:100px" class="img-circle"></a>
			</div> 
		 <div class="col-md-10 col-sm-9"> 
		 <h3><?= $row->title ?></h3> 
			<div class="row">
				<div class="col-xs-9"> 


   					<p> <?= word_limiter($row->post,200) ?></p> 
   					<a href="<?= base_url().'post/viewarticle/'.$row->postid ?>">Read More</a> 

					<p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
				  <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>
				  </div>
				<div class="col-xs-3"></div>
			  </div>
			  <br><br>
			</div>
		  </div>
		  <hr> 
 <?php     } ?>
 <p><?php echo $links; ?></p>
		  <!--/stories-->
		  
		  
		  <a href="/" class="btn btn-primary pull-right btnNext">More <i class="glyphicon glyphicon-chevron-right"></i></a>
		
		  
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

