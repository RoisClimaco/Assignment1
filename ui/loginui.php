<div class = "bg">
	<div class="container h-100 loginPadding">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<h2>Login</h2>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form role="form" method="post" action="login.php">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="log_username" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="log_password" class="form-control input_pass" value="" placeholder="password">
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<input type="submit" name="button" class="btn login_btn"/>
				   </div>
					</form>
				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="register.php" class="ml-2">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>