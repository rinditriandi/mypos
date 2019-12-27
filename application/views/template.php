<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $title; ?></title>

	<link href="<?= base_url(); ?>static_files/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>static_files/font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Morris -->
	<link href="<?= base_url(); ?>static_files/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

	<link href="<?= base_url(); ?>static_files/css/animate.css" rel="stylesheet">
	<link href="<?= base_url(); ?>static_files/css/style.css" rel="stylesheet">

</head>

<body>
	<div id="wrapper">
		<?php $this->load->view('_partials/sidebar'); ?>

		<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<?php $this->load->view('_partials/navbar'); ?>
			</div>

			<!----------content--------->
			<?php echo $contents ?>
			<!--------end content--------->

			<!---------Footer---------->
			<?php $this->load->view('_partials/footer'); ?>
			<!-------End Footer-------->

		</div>

	</div>

	<!-- Mainly scripts -->
	<script src="<?= base_url(); ?>static_files/js/jquery-3.1.1.min.js"></script>
	<script src="<?= base_url(); ?>static_files/js/popper.min.js"></script>
	<script src="<?= base_url(); ?>static_files/js/bootstrap.js"></script>
	<script src="<?= base_url(); ?>static_files/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="<?= base_url(); ?>static_files/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom and plugin javascript -->
	<script src="<?= base_url(); ?>static_files/js/inspinia.js"></script>
	<script src="<?= base_url(); ?>static_files/js/plugins/pace/pace.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?= base_url(); ?>static_files/js/plugins/jquery-ui/jquery-ui.min.js"></script>

</body>

</html>
