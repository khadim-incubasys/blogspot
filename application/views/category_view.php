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
<script type="text/javascript" src="<?php echo base_url("assets/dynamicCRUD/js/script.js"); ?>"></script>

	<table border="0" class="tableDemo bordered" style="margin-left:150px;">
		<tr class="ajaxTitle">
			<th width="2%">Cat Id</th>
			<th width="3%">Category Name</th>
			<th width="4%">Action</th>
		</tr>
		<?php
		if(count($cat)){
		 $i = 1;	
		 foreach($cat->result_array() as $eachRecord){
		?>
		<tr id="<?php echo $eachRecord['id']; ?>">
			<td class="fname"><?php echo $eachRecord['id']; ?></td>
			<td class="fname"><?php echo $eachRecord['cname'];?></td>
			<td>
				<a href="javascript:;" id="<?php echo $eachRecord['id'];?>" class="ajaxEdit"><img src="" class="eimage"></a>
				<a href="javascript:;" id="<?php echo $eachRecord['id'];?>" class="ajaxDelete"><img src="" class="dimage"></a>
			</td>
		</tr>
		<?php }
		}
		?>
	</table>  


<script>
$(document).ready(function(){
$("#loaddata").click(function(){ 
txtname=$("#txtinput").val();
txtlocation=$("#txtlocation").val();
$.post("foo",{ name:txtname, location: txtlocation },function(ajaxresult){
$("#postrequest").html(ajaxresult);
});
});
});
</script>


<!-- <div id="postrequest"></div>
Enter Name: <input type="text" id="txtinput"><br />
Enter Location: <input type="text" id="txtlocation"><br />
<button id="loaddata">Click to send request to post_test.php</button> -->