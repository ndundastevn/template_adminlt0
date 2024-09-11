<?php
session_start();
require_once('../config/config.php');
require_once('../helpers/auth.php');
require_once('../partials/head.php');
?>

<body class="hold-transition login-page" style="background-image: url('https://eregister.makueni.go.ke/public/img/bg.jpg'); background-size: cover;">
	<div class="login-box">
		<?php include('../partials/auth_header.php'); ?>
		<div class="card card-outline card-primary">
			<div class="card-body login-card-body">
				<p class="login-box-msg text-dark">
					Sign in to start your session
				</p>
				<form role="form" method="POST" onsubmit="return validateForm()">
					<div class="row">
						<div class="form-group col-sm-12 col-lg-12 col-xl-12">
							<label class="form-control-label">Full names <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" required name="user_names" class="form-control" pattern="(^[a-zA-Z ]+$)" title="Your names must not contain digits">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Email address <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="email" required name="user_email" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Phone number <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="number" required name="user_phone_number" class="form-control">
							</div>
						</div>
					
						<div class="form-group mb-4 col-sm-12 col-lg-6 col-xl-6">
							<div class="d-flex align-items-center justify-content-between">
								<div>
									<label class="form-control-label">Password <span class="text-danger">*</span></label>
								</div>
							</div>
							<div class="input-group input-group-merge">
								<input type="password" id="password" required name="user_password" class="form-control">
							</div>
						</div>
						<div class="form-group mb-4 col-sm-12 col-lg-6 col-xl-6">
							<div class="d-flex align-items-center justify-content-between">
								<div>
									<label class="form-control-label">Confirm password <span class="text-danger">*</span></label>
								</div>
							</div>
							<div class="input-group input-group-merge">
								<input type="password" id="confirm_password" required name="confirm_password" class="form-control">
							</div>
						</div>
						<div id="message" class="d-none">
							<label class="text-center font-weight-bold">Password must contain the following:</label>
							<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
							<p id="capital" class="invalid">An <b>uppercase</b> letter</p>
							<p id="number" class="invalid">A <b>number</b></p>
							<p id="symbol" class="invalid">A <b>symbol</b></p>
							<p id="length" class="invalid">Minimum <b>8 characters</b></p>
						</div>
						<div id="confirm_message">
							<p id="match" class="invalid">Passwords <b> match</b></p>
						</div>
						<div class="form-group col-sm-12 col-lg-12 col-xl-12">
							<div class="form-group form-check">
								<input type="checkbox" required class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									By clicking Sign up you acknowledge that you have read and agreed to the
									<a target="_blank" href="#"> Privacy Policy </a>
								</label>
							</div>
						</div>
					</div>
					<div class="mt-4 text-center">
						<button type="submit" name="Add_User" class="btn btn-sm btn-primary btn-icon rounded-pill">
							<span class="btn-inner--text">Sign up</span>
							<span class="btn-inner--icon"><i class="far fa-user-plus"></i></span>
						</button>
					</div>
				</form>
				
				<hr>
				<p class="mb-1 text-center">
					Aready have an account? <a href="#">Login</a> Forgot password <a href="reset_password">reset</a>
				</p>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>

	<!-- Scripts-->
	<?php include('../partials/scripts.php'); ?>

	<script>
		/* Password checker */
		function validateForm() {
			var new_password = document.getElementById("new_password").value;
			var confirm_password = document.getElementById("confirm_password").value;
			//minimum password length validation  
			if (new_password.length < 6) {
				document.getElementById("message1").innerHTML = "**Password length must be atleast 6 characters";
				return false;
			}

			//maximum length of password validation  
			if (confirm_password.length > 15) {
				document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
				return false;
			}
		}

		/* Password Validations */
		var newpassword = document.getElementById("password");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");
		var match = document.getElementById("match");
		var symbol = document.getElementById("symbol");
		var confirm_password = document.getElementById("confirm_password");

		// When the user clicks on the password field, show the message box
		newpassword.onfocus = function() {
			document.getElementById("message").style.display = "block";
		};

		confirm_password.onfocus = function() {
			document.getElementById("confirm_message").style.display = "block";
		};

		// When the user clicks outside of the password field, hide the message box
		newpassword.onblur = function() {
			document.getElementById("message").style.display = "none";
		};

		confirm_password.onblur = function() {
			document.getElementById("confirm_message").style.display = "none";
		};

		// When the user starts to type something inside the password field
		newpassword.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if (newpassword.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if (newpassword.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if (newpassword.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}

			// Validate length
			if (newpassword.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}

			//Validate symbols
			var symbols = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
			if (newpassword.value.match(symbols)) {
				symbol.classList.remove("invalid");
				symbol.classList.add("valid");
			} else {
				symbol.classList.remove("valid");
				symbol.classList.add("invalid");
			}
		};

		confirm_password.onkeyup = function() {
			//Check If Passwords Match
			var password = document.getElementById("password"),
				confirm_password = document.getElementById("confirm_password");
			if (password.value != confirm_password.value) {
				match.classList.remove("valid");
				match.classList.add("invalid");
			} else {
				match.classList.remove("invalid");
				match.classList.add("valid");
			}
		};
	</script>

</body>

</html>