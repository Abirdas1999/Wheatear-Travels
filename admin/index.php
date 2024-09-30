
<?php
// Include the Register class
// include_once './admin/classes/registerUpdate.php';
include_once 'admin/classes/registerUpdate.php';
session_start(); // Start the session to store messages

// Initialize the Register object
$register = new Register();

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	// Registration form submission
	if (isset($_POST['register'])) {
		$register->setName($_POST['name']);
		$register->setEmail($_POST['email']);
		$register->setPass($_POST['password']);

		// Register the user
		if ($register->registerUser()) {
			$_SESSION['success'] = 'Registration successful!';
			header("Location: index.php"); // Redirect to avoid form resubmission
			exit();
		} else {
			$_SESSION['error'] = 'Error during registration. Please try again.';
			header("Location: index.php");
			exit();
		}
	}

	// Login form submission
	if (isset($_POST['login'])) {
		$register->setEmail($_POST['email']);
		$register->setPass($_POST['pass']);

		// Attempt login
		$user = $register->loginUser();
		if ($user) {
			$_SESSION['user'] = $user;  // Store user info in session
			$_SESSION['success'] = '';
			header("Location: dashboard.php");
			exit();
		} else {
			$_SESSION['error'] = 'Invalid email or password.';
			header("Location: index.php");
			exit();
		}
	}
}

// Display success or error messages
$successMessage = isset($_SESSION['success']) ? $_SESSION['success'] : '';
$errorMessage = isset($_SESSION['error']) ? $_SESSION['error'] : '';

// Clear the messages from the session after displaying them
unset($_SESSION['success']);
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="src/img/photos/R-K-Dental-Care_logo-small_-120x120.webp" />
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Wheatever-Travels | Dashboard</title>

	<link href="./css/login.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<div class="container">
			<section class="user">
				<div class="user_options-container">
					<div class="user_options-text">
						<div class="user_options-unregistered">
							<h1 class="user_unregistered-title"style="font-size: 2rem;">Welcome to</h1>
                            <h1 class="user_unregistered-title"style="font-size: 3rem;">Wheatever-Travels</h1>
							<h2 class="user_unregistered-title">This is an Admin Panel</h2>
							<!-- <p class="user_unregistered-text">Don't have an account?</p> -->
							<!-- <button class="user_unregistered-signup" id="signup-button">Sign up</button> -->
						</div>

						<div class="user_options-registered">
							<h1 class="user_unregistered-title" style="font-size: 3rem;">Welcome to R.K.Dental</h1>
							<h2 class="user_unregistered-title">Have an account?</h2>
							<button class="user_registered-login" id="login-button">Login</button>
						</div>
					</div>

					<div class="user_options-forms" id="user_options-forms">
						<!-- Display success or error messages -->
						<?php if ($successMessage): ?>
							<div class="alert alert-success">
								<?= $successMessage ?>
							</div>
						<?php endif; ?>

						<?php if ($errorMessage): ?>
							<div class="alert alert-danger">
								<?= $errorMessage ?>
							</div>
						<?php endif; ?>

						<!-- Login Form -->
						<div class="user_forms-login">
							<h2 class="forms_title">Login</h2>
							<form class="forms_form" method="POST">
								<fieldset class="forms_fieldset">
									<div class="forms_field">
										<input type="email" name="email" placeholder="Email" class="forms_field-input" required autofocus />
									</div>
									<div class="forms_field">
										<input type="password" name="pass" placeholder="Password" class="forms_field-input" required />
									</div>
								</fieldset>
								<div class="forms_buttons">
									<button type="button" class="forms_buttons-forgot" id="forgotPasswordButton">Forgot password?</button>
									<input type="submit" name="login" value="Log In" class="forms_buttons-action">
								</div>

							</form>
							<!-- Popup Div -->
							<div class="popup-container" id="popup">
								<div class="popup-content">
									<h2>Opps!...</h2>
									<h5 style="margin-top: 2rem; color:red">Please contact your developer</h5>
									<button class="popup-button" id="okButton">OK</button>
								</div>
							</div>

						</div>

						<!-- Registration Form -->
						<!-- <div class="user_forms-signup">
							<h2 class="forms_title">Sign Up</h2>
							<form class="forms_form" method="POST">
								<fieldset class="forms_fieldset">
									<div class="forms_field">
										<input type="text" name="name" placeholder="Full Name" class="forms_field-input" required />
									</div>
									<div class="forms_field">
										<input type="email" name="email" placeholder="Email" class="forms_field-input" required />
									</div>
									<div class="forms_field">
										<input type="password" name="password" placeholder="Password" class="forms_field-input" required />
									</div>
								</fieldset>
								<div class="forms_buttons">
									<input type="submit" name="register" value="Sign up" class="forms_buttons-action">
								</div>
							</form>
						</div> -->
					</div>
				</div>
			</section>
		</div>
	</div>

	<script>
		const signupButton = document.getElementById('signup-button'),
			loginButton = document.getElementById('login-button'),
			userForms = document.getElementById('user_options-forms')

		signupButton.addEventListener('click', () => {
			userForms.classList.remove('bounceRight')
			userForms.classList.add('bounceLeft')
		}, false)

		loginButton.addEventListener('click', () => {
			userForms.classList.remove('bounceLeft')
			userForms.classList.add('bounceRight')
		}, false)
	</script>
	<script>
		document.getElementById('forgotPasswordButton').addEventListener('click', function() {
			document.getElementById('popup').style.display = 'flex';
		});

		document.getElementById('okButton').addEventListener('click', function() {
			document.getElementById('popup').style.display = 'none';
		});
	</script>

</body>

</html>