<?php
session_start();
include_once('../functions/reusableQuery.php');

include('../config/config.php');
include('../config/checklogin.php');
include('../partials/headn.php');

?>


<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<?php include('../partials/preloader.php'); ?>

		<!-- Navbar -->
		<?php include('../partials/header.php'); ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php
		/* Load Specific side Based On User Access Level */
		if ($_SESSION['user_access_level'] == 'System Administrator') {
			/* Admin */
			include('../partials/ward_admin_sidenav.php');
		} else {
			include('../partials/ward_admin_sidenav.php');
		} ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">

			<?php
			/* Load Specific Dashboard Based On User Access Level */
			if (
				$_SESSION['user_access_level'] == 'System Administrator'
			) {
				require_once('../partials/wardadmin_dashboard.php');
			} else {
				/* Revenue collectors */
				require_once('../partials/wardadmin_dashboard.php');
			} ?>


		</div>
		<!-- /.content-wrapper -->
		<?php include('../partials/footer.php'); ?>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- scripts -->
	<?php
		include('../partials/scriptn.php');
	
	?>

</body>

</html>