<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login :: MyPos</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
				<div class="row flex-grow">
					<div class="col-lg-6 d-flex align-items-center justify-content-center">
						<div class="auth-form-transparent text-left p-3">
							<div class="brand-logo">
								<img src="<?php echo base_url(); ?>assets/images/logo.svg" alt="logo">
							</div>
							<h4>Welcome back!</h4>
							<h6 class="font-weight-light">Happy to see you again!</h6>
							<form class="pt-3" action="<?php echo site_url('auth/process')?>" method="post">
								<div class="form-group">
									<label for="username">Username</label>
									<div class="input-group">
										<div class="input-group-prepend bg-transparent">
											<span class="input-group-text bg-transparent border-right-0">
												<i class="mdi mdi-account-outline text-primary"></i>
											</span>
										</div>
										<input type="text" class="form-control form-control-lg border-left-0" id="username" name="username"
											placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<div class="input-group">
										<div class="input-group-prepend bg-transparent">
											<span class="input-group-text bg-transparent border-right-0">
												<i class="mdi mdi-lock-outline text-primary"></i>
											</span>
										</div>
										<input type="password" class="form-control form-control-lg border-left-0"
											id="password" name="password" placeholder="Password">
									</div>
								</div>
								<!-- <div class="my-2 d-flex justify-content-between align-items-center">
									<div class="form-check">
										<label class="form-check-label text-muted">
											<input type="checkbox" class="form-check-input"> Keep me signed in </label>
									</div>
									<a href="#" class="auth-link text-black">Forgot password?</a>
								</div> -->
								<div class="my-3">
									<button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6 login-half-bg d-flex flex-row">
						<p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy;
							2018 All rights reserved.</p>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?php echo base_url(); ?>assets/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/misc.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>
