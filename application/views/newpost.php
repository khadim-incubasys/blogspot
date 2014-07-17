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

					<form action="<?= base_url();?>post/newPost" method="post">
						<div  style='margin:20px 0px 30px 180px;'>

					<article class="module width_full">
						<header><h3>Post New Article</h3></header>
						<div class="module_content">
								<fieldset>
									<label>Post Title</label>
									<input type="text" name="title"/>
								</fieldset>
								<fieldset>
									<label>Content</label>
									<textarea rows="12" name="post" id="comment"></textarea>
								</fieldset>
								<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
									<label>Category</label>
									<!-- <select style="width:92%;">
										<option>Articles</option>
										<option>Tutorials</option>
										<option>Freebies</option>
									</select> -->
									<select name="cat" id="cat" style="width:92%;">
											<?php
											foreach ($cat->result_array()as $row) 
											{
												echo '<option value='.$row['id'].'>'.$row['cname'].'</option>';
											}
											?> 
										</select>
								</fieldset>
								<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
									<label>Tags</label>
									<input type="text" style="width:92%;">
								</fieldset><div class="clear"></div>
						</div>
					<footer>
						<div class="submit_link">
							<select>
								<option>Draft</option>
								<option>Published</option>
							</select>
							<input type="submit" value="Publish" class="alt_btn">
							<!-- <input type="submit" value="Reset"> -->
						</div>
					</footer>
							</article>
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
