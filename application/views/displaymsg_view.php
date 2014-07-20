<?php   
foreach ($messages->result_array() as $key) {
 	print_r($key['msg']);
 	echo "<br>";
 } 
?>