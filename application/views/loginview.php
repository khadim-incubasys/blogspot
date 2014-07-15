<?php
 // $this->load->view('partial/header');
?>
	<center>
     <div>
		 <h3>Login Form</h3> 
		
		 <form method="POST" action="login"> 
			 <label>Email ID</label>  <input type="text" name="email"/><br>
			 <label>Password</label><input type="password" name="pwd"/><br>
			 <input id="button" type="submit" name="submit" value="LogIn"><br>
		  </form> 
		  <p>Don't have account</p>
		  <input type="button" value="sign up" onclick="location.href='gotosignup'" />
	  </div> 
	</center>
<?php
// $this->load->view('partial/footer');
?>