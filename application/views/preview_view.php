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
										<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
										<ul id="gallery" style=" list-style-type: none; margin: 0; padding: 0;">
										<?php
											$count=0;
											$arr[]=array();
											foreach($images->result_array() as $img) {
												$str="<img src=".base_url().$img['image_name']."   class='img-thumbnail' >";
												$arr[$count]=$str ;
												echo "<li data-itemid='" . $img['id'] . "'>";
												echo "<div>" . $arr[$count] . "</div>";
												echo "</li>";
												$count=$count+1;
											}
											?>
										</ul>
										<!-- end images loADINGS -->
										<div>
											<script type="text/javascript" src="<?php echo base_url("assets/dragsort/jquery.dragsort-0.5.1.min.js"); ?>"></script>
											<script type="text/javascript">
												$("#gallery").dragsort({ dragSelector: "div", dragEnd: saveOrder, placeHolderTemplate: "<li class='placeHolder'><div></div></li>" });

												function saveOrder() {
													var data = $("#gallery li").map(function() { return $(this).data("itemid"); }).get();
													var url=$("#baseurl").val();
													$.post("http://localhost/blogspot/dragdrop/sort_drag_drop", { "ids[]": data, "pid": <?= $param ?> });
												};
											</script>

											<div style="clear:both;"></div>
										</div>

										<!-- ***************** -->
									</div>
									<div class="col-xs-3"></div>
								</div>
								<br><br>
							</div>
						</div>
						<?php     } ?>
						<!--/stories-->
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