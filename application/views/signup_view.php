<!-- sign up popup modal -->
<!-- 
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
          <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
        </div>
        <div class="modal-body">


          <h5>
           <center>
             <div>
               <h3>Registration Form</h3> 
               <form method="POST" action="signUp"> 
                <p class="float">
                  <label for="login"><i class="icon-user"></i>First Name</label>
                  <input type="text" name="fname" placeholder="First Name">
                </p>
                <p class="float">
                  <label for="login"><i class="icon-user"></i>Last Name</label>
                  <input type="text" name="lname" placeholder="Last Name">
                </p>
                <p class="float">
                  <label for="email"><i class="icon-user"></i>User Email</label>
                  <input type="text" name="email" placeholder="email">
                </p>
                 <p class="float">
                  <label for="password"><i class="icon-lock"></i>Password</label>
                  <input type="password" name="pwd" placeholder="Password">
                </p>
                 <p class="float">
                  <label for="password"><i class="icon-lock"></i>Conf Pwd</label>
                  <input type="password" name="cpwd" placeholder="Password" class="showpassword">
                </p>
                <button type="submit" name="submit" class="btn btn-primary">Sign up</button><br>
              </form> 

            </div> 
          </center>
        </h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div> -->
<!-- end modal -->

<!-- parsely form validation --><!-- ************** -->

<!-- end   -->
<center>

<form action="signUp" method="post" id="register-form" novalidate="novalidate">
 
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
</center>