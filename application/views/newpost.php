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

					<form action="<?= base_url();?>post/newPost" method="post">
						<div  style='margin:40px 0px 30px 180px;'>
							<center>
								<h1>Add New Post</h1><br />
								<label>Title:</label><input type="text" name="title"/>

								<select name="cat" id="cat">
									<?php
									foreach ($cat->result_array()as $row) 
									{
										echo '<option value='.$row['id'].'>'.$row['cname'].'</option>';
									}
									?> 
								</select>

								<br>
							</center>
							<table style='width:80%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
								<tr>
									<td valign='top' style='width:70px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
										<img src='//www.gravatar.com/avatar/266f5dcea9a18816f5c361e4f2da684d?s=90' class='sc_rc' style='max-width:50px; margin-right:10px;display:block;' />
										<div><a style='font-size:16px;' href='//www.gravatar.com/266f5dcea9a18816f5c361e4f2da684d'><?= $this->session->userdata('udata')->fname ?></a></div>
										<div>
										</td>
										<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<!-- <div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-06 7:37 am
					</div> -->
					<div>
						<textarea name="post" id="comment" style='width:700px; height:400px; '>
							Write New Post!
						</textarea><br />
					</div>			
				</td>
				
			</tr>
			
		</table>
		<center>
			<input type="submit" value="Add Post" />
		</center>
	</div>
</form>

<!-- For the file uploading -->

<!-- end of file uploading -->
</div>
<hr> 


<a href="/" class="btn btn-primary pull-right btnNext">More <i class="glyphicon glyphicon-chevron-right"></i></a>
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
