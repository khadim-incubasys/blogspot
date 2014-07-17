	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
   </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>


	
	<section id="secondary_bar">
		<div class="user">
			<p>John Doe (<a href="#">3 Messages</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Content</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="#">New Article</a></li>
			<li class="icn_edit_article"><a href="#">Edit Articles</a></li>

			<li class="icn_categories"><a href="http:\\localhost\blogspot\category\">Categories</a></li>
			<li class="icn_tags"><a href="#">Tags</a></li>
		</ul>
		<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="#">Add New User</a></li>
			<li class="icn_view_users"><a href="#">View Users</a></li>
			<li class="icn_profile"><a href="#">Your Profile</a></li>
		</ul>
		<h3>Media</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="#">File Manager</a></li>
			<li class="icn_photo"><a href="#">Gallery</a></li>
			<li class="icn_audio"><a href="#">Audio</a></li>
			<li class="icn_video"><a href="#">Video</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#">Options</a></li>
			<li class="icn_security"><a href="#">Security</a></li>
			<li class="icn_jump_back"><a href="#">Logout</a></li>
		</ul>
		
		
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		<article class="module width_full">
			<header><h3>Stats</h3></header>
			<div class="module_content">
				<article class="stats_graph">
					<img src="http://chart.apis.google.com/chart?chxr=0,0,3000&chxt=y&chs=520x140&cht=lc&chco=76A4FB,80C65A&chd=s:Tdjpsvyvttmiihgmnrst,OTbdcfhhggcTUTTUadfk&chls=2|2&chma=40,20,20,30" width="520" height="140" alt="" />
				</article>
				
				<article class="stats_overview">
					<div class="overview_today">
						<p class="overview_day">Today</p>
						<p class="overview_count">1,876</p>
						<p class="overview_type">Hits</p>
						<p class="overview_count">2,103</p>
						<p class="overview_type">Views</p>
					</div>
					<div class="overview_previous">
						<p class="overview_day">Yesterday</p>
						<p class="overview_count">1,646</p>
						<p class="overview_type">Hits</p>
						<p class="overview_count">2,054</p>
						<p class="overview_type">Views</p>
					</div>
				</article>
				<div class="clear"></div>
			</div>
		</article><!-- end of stats article -->
		
		<!-- content manager -->
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Content Manager</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Posts</a></li>
    		<li><a href="#tab2">Comments</a></li>
		</ul>
		</header>


<!-- java script -->
<script>
	 var columns = new Array("cname");
	 var placeholder = new Array("Enter category Name");
	 var inputType = new Array("text");
	 var table = "tableDemo";
	 
	 // Set button class names 
	 var savebutton = "ajaxSave";
	 var deletebutton = "ajaxDelete";
	 var editbutton = "ajaxEdit";
	 var updatebutton = "ajaxUpdate";
	 var cancelbutton = "cancel";
	 
	 var saveImage = "<?php echo base_url('assets/dynamicCRUD/images/save.png'); ?>"
	 var editImage = "<?php echo base_url('assets/dynamicCRUD/images/edit.png'); ?>"
	 var deleteImage ="<?php echo base_url('assets/dynamicCRUD/images/remove.png'); ?>" 
	 var cancelImage ="<?php echo base_url('assets/dynamicCRUD/images/back.png'); ?>" 
	 var updateImage ="<?php echo base_url('assets/dynamicCRUD/images/save.png'); ?>" 

	 // Set highlight animation delay (higher the value longer will be the animation)
	 var saveAnimationDelay = 3000; 
	 var deleteAnimationDelay = 1000;
	 var effect = "flash"; 
  </script>

 <link rel="stylesheet" href="<?php echo base_url("assets/dynamicCRUD/css/style.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("assets/dynamicCRUD/js/dashboard.js"); ?>"></script>

<!--  -->



		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th>Post Title</th> 
    				<th>Category</th> 
    				<th>Created On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<!-- <td><input type="checkbox"></td>  -->
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Articles</td> 
    				
    				<td>5th April 2011</td> 
    				<td>
    				<input type="image" src="<?php echo base_url('assets/dashboard/images/icn_edit.png'); ?>" title="Edit">
    				<input type="image" src="<?php echo base_url('assets/dashboard/images/icn_trash.png'); ?>" title="Trash">
    				<input type="image" src="<?php echo base_url('assets/dashboard/images/icn_alert_success.png'); ?>" title="Trash">
    				</td> 
				</tr>
				<?php
					foreach ($query as $row)
					{ ?>
						 <tr id="<?php echo $row->id ; ?>">
						 <td class="fname"><?php echo word_limiter($row->title,5); ?></td>
						<td class="fname"><?php echo $row->blogid; ?></td>
						<td>5td April 2011</td>
						<td>
							<a href="javascript:;" id="<?php echo $row->id;?>" class="ajaxEdit"><img src="<?php echo base_url('assets/dashboard/images/icn_edit.png'); ?>" class="eimage"></a>
							<a href="javascript:;" id="<?php echo $row->id;?>" class="ajaxDelete"><img src="<?php echo base_url('assets/dashboard/images/icn_trash.png'); ?>" class="dimage"></a>
							<a href="javascript:;" id="<?php echo $row->id;?>" class="ajaxDelete"><img src="<?php echo base_url('assets/dashboard/images/icn_alert_success.png'); ?>" class="okimage"></a>
							<!-- <input type="image" src="<?php echo base_url('assets/dashboard/images/icn_edit.png'); ?>" title="Edit">
			    				<input type="image" src="<?php echo base_url('assets/dashboard/images/icn_trash.png'); ?>" title="Trash">
			    			 -->	
			    			 <!-- <input type="image" src="<?php echo base_url('assets/dashboard/images/icn_alert_success.png'); ?>" title="Trash"> -->
						</th>
					</tr>	 
				 <?php     } ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Comment</th> 
    				<th>Posted by</th> 
    				<th>Posted On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Mark Corrigan</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="<?php echo base_url('assets/dashboard/images/icn_edit.png'); ?>" title="Edit">
    				<input type="image" src="<?php echo base_url('assets/dashboard/images/icn_trash.png'); ?>" title="Trash">
    				<input type="image" src="<?php echo base_url('assets/dashboard/images/icn_alert_success.png'); ?>" title="Trash"></td> 
				</tr> 
				
			</tbody> 
			</table>

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		<article class="module width_quarter">
			<header><h3>Messages</h3></header>
			<div class="message_list">
				<div class="module_content">
					<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
					<p><strong>John Doe</strong></p></div>
					<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
					<p><strong>John Doe</strong></p></div>
					<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
					<p><strong>John Doe</strong></p></div>
					<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
					<p><strong>John Doe</strong></p></div>
					<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
					<p><strong>John Doe</strong></p></div>
				</div>
			</div>
			<!-- <footer>
				<form class="post_message">
					<input type="text" value="Message" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
					<input type="submit" class="btn_post_message" value=""/>
				</form>
			</footer> -->
		</article><!-- end of messages article -->
		
		<div class="clear"></div>
		
		<!-- <article class="module width_full">
			<header><h3>Post New Article</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Post Title</label>
							<input type="text">
						</fieldset>
						<fieldset>
							<label>Content</label>
							<textarea rows="12"></textarea>
						</fieldset>
						<fieldset style="width:48%; float:left; margin-right: 3%;"> 
							<label>Category</label>
							<select style="width:92%;">
								<option>Articles</option>
								<option>Tutorials</option>
								<option>Freebies</option>
							</select>
						</fieldset>
						<fieldset style="width:48%; float:left;"> 
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
					<input type="submit" value="Reset">
				</div>
			</footer>
		<div class="spacer"></div>
		</article> -->
	</section>
