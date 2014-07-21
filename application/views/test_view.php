<?php
   echo '<a href='.base_url().'test/buildPaymentRequest>New Post</a>';
?>

<!-- <form action="signUp" method="post" id="register-form" novalidate="novalidate">
 
    <h2>User Registration</h2>
 
    <div id="form-content">
        <fieldset>
 
            <div class="fieldgroup">
                <label for="firstname">First Name</label>
                <input type="text" name="fname"/>
            </div>
 
            <div class="fieldgroup">
                <label for="lastname">Last Name</label>
                <input type="text" name="lname"/>
            </div>
 
            <div class="fieldgroup">
                <label for="email">Email</label>
                <input type="text" name="email"/>
            </div>
 
            <div class="fieldgroup">
                <label for="password">Password</label>
                <input type="password" name="pwd"/>
            </div>
            <div class="fieldgroup">
                <label for="password">Confrim Password</label>
                <input type="password" name="cpwd"/>
            </div>
            <div class="fieldgroup">
                <p class="right">By clicking register you agree to our <a target="_blank" href="/policy">policy</a>.</p>
                <input type="submit" value="Register" class="submit"/>
            </div>
 
        </fieldset>
    </div>
 
        <div class="fieldgroup">
            <p>Already registered? <a href="index">Sign in</a>.</p>
        </div>
</form>
 -->


<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style type="text/css">
    body { font-family:Arial; font-size:12pt; padding:20px; width: 800px; margin:20px auto; border:solid 1px black; }
    h1 { font-size:16pt; }
    h2 { font-size:13pt; }
    ul { width:350px; list-style-type: none; margin:0px; padding:0px; }
    li { float:left; padding:5px; width:100px; height:100px; }
    li div { width:90px; height:50px; border:solid 1px black; background-color:#E0E0E0; text-align:center; padding-top:40px; }
    .placeHolder div { background-color:white!important; border:dashed 1px gray !important; }
  </style>
</head>
<body>
    <div>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <ul id="gallery">
      <?php
        $list = array("1", "2", "3", "4", "5","6");
        for ($idx = 0; $idx < count($list); $idx+=1) {
          echo "<li data-itemid='myid" . $idx . "'>";
          echo "<div>" . $list[$idx] . "</div>";
          echo "</li>";
        }
      ?>
    </ul>
    
    <script type="text/javascript" src="<?php echo base_url("assets/dragsort/jquery.dragsort-0.5.1.min.js"); ?>"></script>
    <script type="text/javascript">
        $("#gallery").dragsort({ dragSelector: "div", dragEnd: saveOrder, placeHolderTemplate: "<li class='placeHolder'><div></div></li>" });

        function saveOrder() {
        var data = $("#gallery li").map(function() { return $(this).data("itemid"); }).get();
            $.post("sort_drag_drop", { "ids[]": data });
        };
      </script>
        
        <div style="clear:both;"></div>
    </div>
</body>
</html> -->

<!-- sort darg and drop -->
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery Dynamic Drag'n Drop</title>
<script type="text/javascript" src="<?php echo base_url("assets/dragsort/jquery-1.3.2.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/dragsort/jquery-ui-1.7.1.custom.min.js"); ?>"></script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 16px;
  margin-top: 10px;
}

ul {
  margin: 0;
}

#contentWrap {
  width: 700px;
  margin: 0 auto;
  height: auto;
  overflow: hidden;
}

#contentTop {
  width: 600px;
  padding: 10px;
  margin-left: 30px;
}

#contentLeft {
  float: left;
  width: 400px;
}

#contentLeft li {
  list-style: none;
  margin: 0 0 4px 0;
  padding: 10px;
  background-color:#00CCCC;
  border: #CCCCCC solid 1px;
  color:#fff;
}
#contentRight {
  float: right;
  width: 260px;
  padding:10px;
  background-color:#336600;
  color:#FFFFFF;
}

</style>

<script type="text/javascript">
$(document).ready(function(){ 
               
  $(function() {
    $("#contentLeft ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {
      alert('hit');
      var order = $(this).sortable("serialize") + '&action=updateRecordsListings'; 
      $.post("dragdrop_ordering", order, function(theResponse){
        $("#contentRight").html(theResponse);
      });                                
    }                 
    });
  });

}); 
</script>

</head>
<body style="cursor:auto;">

  <div id="contentWrap">
    <div id="contentLeft">
      <ul>
        <?php
        $query  = "SELECT * FROM records ORDER BY recordListingID ASC";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
        {
        ?>
          <li id="recordsArray_<?php echo $row['recordID']; ?>"><?php echo $row['recordID'] . ". " . $row['recordText']; ?></li>
        <?php } ?>
      </ul>
    </div>
    
    <div id="contentRight">
      <p>Array will be displayed here.</p>
      <p>&nbsp; </p>
    </div>
  </div>

</body>
</html> -->
<!-- end of sort drag drop