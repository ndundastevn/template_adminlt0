<?php
require('../config/config.php');


?>

<!-- Main content -->
<section class="content">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">
						<?php echo $greeting . ', ' . $_SESSION['user_names'] ?>
					</h1>
					<small>AdminLTE supper template</small>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="dashboard">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- widgets -->
	<div class="container-fluid mt-4">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-12">
				<a href="ward_revenue_target" class="text-dark">
				<!-- <a href="ward_revenue_target?month=<?php $months ?>&fy=2024/2025" class="text-dark"> -->
					<div class="info-box">
						<span class="info-box-icon" style="background: #ffcd3d"><i class="far fa-flag"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">System Users</span>
							<span class="info-box-number">
								1
							</span>
						</div>
						<!-- /.info-box-content -->
					</div>
				</a>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-6 col-sm-6 col-12">
				<!-- <a href="ward_revenue_target" class="text-dark"> -->
				<!-- <a href="ward_collections?month=<?php $months ?>&fy=2024/2025" class="text-dark"> -->
				<a href="ward_collections" class="text-dark">

					<div class="info-box">
						<span class="info-box-icon" style="background: #ffcd3d"><i class="fas fa-wallet"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Inquiries</span>
							<span class="info-box-number">
								2
							</span>
						</div>
						<!-- /.info-box-content -->
					</div>
				</a>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			
		</div>		
	</div>
	<!-- ./widgets -->

	<div class="container-fluid">
			<!-- Bar graph -->
	<div class="row">
	

	<!-- Logs -->
	<div class="col-12 col-sm-12 col-md-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title m-0">Today, <?php echo date('d M Y'); ?> Authenitcation Logs</h5>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>User </th>
							<th>IP Address</th>
							<th>Device</th>
							<th>Time</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$today = date('Y-m-d');
						$tomorrow = date('Y-m-d', strtotime('tomorrow'));
						$fetch_records_sql = mysqli_query(
							$mysqli,
							"SELECT * FROM logs l
						INNER JOIN users u ON u.user_id = l.log_user_id
						WHERE u.user_id = '{$user_id}' AND
						l.log_date BETWEEN '{$today}' AND '{$tomorrow}' ORDER BY l.log_id DESC"
						);
						$cnt = 1;
						if (mysqli_num_rows($fetch_records_sql) > 0) {
							while ($return_results = mysqli_fetch_array($fetch_records_sql)) {
						?>
								<tr>
									<td><?php echo $cnt; ?></td>
									<td><?php echo $return_results['user_names']; ?></td>
									<td><?php echo $return_results['log_ip_address']; ?></td>
									<td><?php echo $return_results['log_device']; ?></td>
									<td><?php echo date('g:ia', strtotime($return_results['log_date'])); ?></td>
								</tr>
						<?php
								$cnt = $cnt + 1;
							}
						} ?>

					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col -->
</div>
		
	</div>
	<!-- /.container-fluid -->
</section>

