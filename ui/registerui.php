<div class="bg">
  <br>
<div class = "container h-500 register">
  <div class = "d-flex justify-content-center h-100">
  <form role="form" method="post" action="register.php">
    <fieldset>
      <br>

      <center><h2>Sign up</h2></center>
      <br>
      <div class="form-group">
        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username">
      </div>

      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
      </div>
      <div class="form-group">
        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
      </div>
        <div class="form-group">
        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control input-lg" placeholder="Confirm Password">
      </div>
      <div class="form-group">
        <input type="text" name="firstname" id="firstname" class="form-control input-lg" placeholder="First Name">
      </div>
      <div class="form-group">
        <input type="text" name="lastname" id="lastname" class="form-control input-lg" placeholder="Last Name">
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
