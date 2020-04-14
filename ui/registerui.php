<div class="bg">
  <br>
  <div class = "container h-500 register">
    <div class = "d-flex justify-content-center h-100">
      <form role="form" method="post" action=<?php echo urlDirector::$registrationURL?>>
        <fieldset>
          <br>

          <center><h2>Sign up</h2></center>
          <br>
          <div class="form-group">
            <input type="text" name="txtUsername" id="txtUsername" class="form-control input-lg" placeholder="Username">
          </div>

          <div class="form-group">
            <input type="email" name="txtEmail" id="txtEmail" class="form-control input-lg" placeholder="Email Address">
          </div>
          <div class="form-group">
            <input type="password" name="txtPassword" id="txtPassword" class="form-control input-lg" placeholder="Password">
          </div>
            <div class="form-group">
            <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" class="form-control input-lg" placeholder="Confirm Password">
          </div>
          <div class="form-group">
            <input type="text" name="txtFirstname" id="txtFirstname" class="form-control input-lg" placeholder="First Name">
          </div>
          <div class="form-group">
            <input type="text" name="txtLastname" id="txtLastname" class="form-control input-lg" placeholder="Last Name">
          </div>
          <div class="form-check">
    By Signing up, I am agreeing to WIS' policy & terms
          <div>
            <br>
            <center>
                <input type="submit" class="btn btn-lg btn-primary" value="Register">
                </center>
          </div>
        </fieldset>
      </form>
      </div>
      <div style="color:red; font-weight:bold">
        <?php
          if (!empty($validationErrors)) {
          foreach ($validationErrors as $key => $value) {
            print $value . '<br>';
          }
          }
        ?>
      </div>
    </div>
  </div>
</div>
