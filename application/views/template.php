<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>myPos :: Dashboard</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<!-- partial:../../partials/_sidebar.html -->
		<?php $this->load->view('_partials/sidebar'); ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:../../partials/_navbar.html -->
			<nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
				<div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
					<a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="../../index.html"><img
							src="../../../assets/images/logo-mini.svg" alt="logo" /></a>
					<button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button"
						data-toggle="minimize">
						<i class="mdi mdi-menu"></i>
					</button>
					<!-- <ul class="navbar-nav">
				
					</ul> -->
					<ul class="navbar-nav navbar-nav-right ml-lg-auto">
						<li class="nav-item  nav-profile dropdown border-0">
							<a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
								<img class="nav-profile-img mr-2" alt="" src="<?php base_url(); ?>assets/images/face1.jpg">
								<span class="profile-name">Henry Klein</span>
							</a>
							<div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
								<a class="dropdown-item" href="#">
									<i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
							</div>
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
						data-toggle="offcanvas">
						<span class="mdi mdi-menu"></span>
					</button>
				</div>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
                   <?php echo $contents ?>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:../../partials/_footer.html -->
				<?php $this->load->view('_partials/footer'); ?>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
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
	<!-- Custom js for this page -->
	<!-- End custom js for this page -->
</body>

</html>
