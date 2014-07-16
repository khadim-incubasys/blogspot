
  <div class="container">
    <center>
      <section class="main">
        <form method="post" action="login" name="myform" data-validate="parsley">
          <h1><span class="log-in">Log in</span> or <span class="sign-up">sign up</span></h1>
          <TABLE>
            <tr>
              <td><label for="email">Enter email</label></td>
              <td><input name="email" type="email" id="email" value="" data-required="true" data-type="email" /></td>
              </tr>
              <tr>
                <td><label for="email">Enter Pass</label></td>
                <td><input name="email" type="password" id="pwd" value="" data-required="true" data-type="password" /></td>
              </tr>
           
               <p class="clearfix"> 
            <form class="form-signin" role="form">
              <table>
                <tr>
                  <td><a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block" style="width: 140px; height: 40px;" role="button">Facebook Login</a></td>
                  <td><label><i class="icon-lock"></i>OR</label></td>
                  <td><input id="button" class="btn btn-lg btn-success" type="submit" name="submit" value="LogIn"></td>
                </tr>
              </table>
            </form>
          </p>
          </TABLE>



          <!-- <p class="float">
          <label for="email"><i class="icon-user"></i>user email</label>
          <input type="email" name="email" data-parsley-trigger="change" required  placeholder="Username or email"/>
          </p>
          <p class="float">
            <label for="password"><i class="icon-lock"></i>Password</label>
            <input type="password" name="pwd" data-parsley-trigger="change" required  placeholder="password" class="showpassword"/>
          </p>


          <p class="clearfix"> 
            <form class="form-signin" role="form">
              <table>
                <tr>
                  <td><a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block" style="width: 140px; height: 40px;" role="button">Facebook Login</a></td>
                  <td><label><i class="icon-lock"></i>OR</label></td>
                  <td><input id="button" class="btn btn-lg btn-success" type="submit" name="submit" value="LogIn"></td>
                </tr>
              </table>
            </form>
          </p> -->
        </form>​​
        <p>Don't have account</p>
        <!-- <input type="button" value="sign up" onclick="location.href='gotosignup'" /> -->
        <!-- <a href='gotosignup' class="btn btn-lg btn-success" 
        data-toggle="modal" 
        data-target="#basicModal">Create New Account</a> -->
        <a href="gotosignup" class="btn btn-lg btn-success">Create New Account</a></p>

      </section>
    </center>
  </div>


  


<!-- js for login -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
  $(function(){
    $(".showpassword").each(function(index,input) {
      var $input = $(input);
      $("<p class='opt'/>").append(
        $("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
          var change = $(this).is(":checked") ? "text" : "password";
          var rep = $("<input placeholder='Password' type='" + change + "' />")
          .attr("id", $input.attr("id"))
          .attr("name", $input.attr("name"))
          .attr('class', $input.attr('class'))
          .val($input.val())
          .insertBefore($input);
          $input.remove();
          $input = rep;
        })
        ).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
    });

    $('#showPassword').click(function(){
      if($("#showPassword").is(":checked")) {
        $('.icon-lock').addClass('icon-unlock');
        $('.icon-unlock').removeClass('icon-lock');    
      } else {
        $('.icon-unlock').addClass('icon-lock');
        $('.icon-lock').removeClass('icon-unlock');
      }
    });
  });
</script>
<!--  -->