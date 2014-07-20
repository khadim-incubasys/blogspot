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
   					<!-- <a href="<?= base_url().'post/viewarticle/'.$row['postid'] ?>">Read More</a>  -->


   					<!--  Images loadings -->

<?php
$count=0;
foreach ($images->result_array() as $img)
{ ?>
<!-- <h3><?= base_url().$img['image_name'] ?></h3> -->
<img src="<?= base_url().$img['image_name'] ?>" style="width:100px;height:100px"  class="img-thumbnail">
&nbsp;
<?php } ?>

<!-- end images loADINGS -->



					<p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
				  <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>
				  </div>
				<div class="col-xs-3"></div>
			  </div>
			  <br><br>
			</div>




<form action="<?= base_url();?>post/addComment" method="post">
<div  style='margin:40px 0px 30px 180px;'>
			<table style='width:80%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<!-- <td valign='top' style='width:70px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/266f5dcea9a18816f5c361e4f2da684d?s=90' class='sc_rc' style='max-width:50px; margin-right:10px;display:block;' />
						<div>
						
						
					</td> -->
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<!-- <div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-06 7:37 am
						</div> -->
				        <div>
				            <input type="hidden" value="<?= $post_id; ?>" name = "postid"> 
				            <fieldset>
									<label>Write Comment</label>
									<textarea rows="12" name="comment" id="comment"></textarea>
							</fieldset>
							<!-- <textarea name="comment" id="comment" comment>
							Hey... say something!
							</textarea><br /> -->
						</div>			
					</td>
				</tr>
			</table>

						<div class="submit_link" style=" float:right;margin-right:190px;">
							<select>
								<option>Draft</option>
								<option>Published</option>
							</select>
							<input type="submit" value="Publish" class="alt_btn">
							<!-- <input type="submit" value="Reset"> -->
						</div>
		</div>
</form>


		  </div>
		  <hr> 
 <?php     } ?>




<?php
foreach ($comments->result_array() as $row)
{ ?>
		<div  style='margin:40px 0px 30px 180px;'>
			<table style='width:80%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/266f5dcea9a18816f5c361e4f2da684d?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<!-- <div><a style='font-size:16px;' href='//www.gravatar.com/266f5dcea9a18816f5c361e4f2da684d'><?=$row['author'] ?></a></div> -->
						<div><a style='font-size:16px;' href='//www.gravatar.com/266f5dcea9a18816f5c361e4f2da684d'>Dummy</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-06 7:37 am
						</div>
				        <div>
				            <p><?=$row['comment'] ?>&nbsp;<!-- <span style="background-color: #f2f2f2; font-family: 'Courier New', Courier, monospace; font-size: 12px; line-height: 22px; white-space: nowrap;">php?id=1 at my page, im using phpadmin v 5.1,</span> -->
				           </p>
							<!-- <p><span style="background-color: #f2f2f2; font-family: 'Courier New', Courier, monospace; font-size: 12px; line-height: 22px; white-space: nowrap;"> without article id, nothing i can progress. tq</span>
							</p> -->
						</div>			
					</td>
				</tr>
			</table>
		</div>
 <?php     } ?>
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
