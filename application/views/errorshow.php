<?php
    echo '<center> <h3>'.$message.'</h3>';
    if (isset($param))
    {
        ?>
         <a href=' <?=base_url().$home.'/'.$param ?> '>OKAY</a>
         <?php
    
    }
    else
    {

        if ($home!='') 
        {

        	echo '<a href='.base_url().''.$home.'>OKAY</a>';
        }
        else
        {
        	echo '<a href='.$_SERVER['HTTP_REFERER'].' >BACK</a>';
        }
    }
     
    echo " </center>";
	?>