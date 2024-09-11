<?php
session_start();

require_once('../functions/reusableQuery.php');
require_once('../config/config.php');
require_once('../helpers/auth.php');
require_once('../helpers/news.php');
require_once('../partials/headn.php');
?>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<?php include('../partials/preloader.php'); ?>

		<!-- Navbar -->
		<?php include('../partials/header.php'); ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php include('../partials/ward_admin_sidenav.php'); ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0"> News and Updates</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="dashboard">Home</a></li>
								<li class="breadcrumb-item active">News</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container">
					<!-- row  -->
					<div class="row">
						<!-- system users dashboard -->
						<div class="col-lg-12">
							<div class="card card-primary card-outline">
								<div class="card-header">
									<h3 class="card-title"></h3>
									<!-- Add new user button -->
									<div class="card-tools flex">
										<a data-toggle="modal" data-target="#addUser"><button type="button" class="btn btn-block btn-success">Add News</button></a>
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th style="width: 10px">#</th>
												<th>Subject</th>
												<th>Message</th>
												<th>Date</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$fetch_records_sql = mysqli_query(
												$mysqli,
												"SELECT * FROM news"
											);
											if (mysqli_num_rows($fetch_records_sql) > 0) {
												$cnt =  1;
												while ($rows = mysqli_fetch_array($fetch_records_sql)) {
											?>
													<tr>
														<td>
															<?php echo $cnt; ?>
														</td>
														<td>
															<?php echo $rows['news_subject']; ?>
														</td>
														<td>
															<?php echo $rows['news_message']; ?>
														</td>
														<td>
															<?php
															// Create a DateTime object
															$dateTime = new DateTime($rows['created_at']);

															// Format the date without the time
															echo $dateTime->format('F j, Y'); ?>
														</td>

														<td>
															<?php if ($rows['published_status'] == 'On') {
																echo 'Published';
															} else {
																echo 'Pending';
															} ?>
														</td>
														<td>
															<a data-toggle="modal" href="#update_<?php echo $rows['news_id']; ?>" class="badge badge-primary"><i class="fas fa-edit"></i> Edit</a>
															<a data-toggle="modal" href="#delete_<?php echo $rows['news_id']; ?>" class="badge badge-danger"><i class="fas fa-trash"></i> Delete</a>
														</td>
													</tr>
											<?php
													$cnt = $cnt + 1;
													include('../modals/news.php');
												}
											} ?>
										</tbody>

										</tbody>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
					</div>
					<!-- /.row -->
				</div>
			</div>
			<!-- /.content -->
			<?php include('../modals/news.php'); ?>
			<!-- Add user modal -->



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
	<?php include('../partials/scriptn.php'); ?>

</body>

</html>