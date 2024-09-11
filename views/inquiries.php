<?php
session_start();

require_once('../functions/reusableQuery.php');
require_once('../config/config.php');
require_once('../helpers/auth.php');
require_once('../helpers/users.php');
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
                            <h1 class="m-0"> Inquiries</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Inquiries</li>
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
									
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>                  
											<tr>
												<th style="width: 10px">#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Email</th>																				
												<th>Phone</th>																				
												<th>Subject</th>												
												<th>Message</th>										
												<th>Date</th>										
												
											</tr>
										</thead>
										<tbody>
										<?php
                                        $fetch_records_sql = mysqli_query(
                                            $mysqli,
                                            "SELECT * FROM inquirys"												
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
                                                        <?php echo $rows['user_fname']; ?>
                                                    </td>
													<td>
														<?php echo $rows['user_lname']; ?>
													</td>                                                 
													<td>
														<?php echo $rows['user_email']; ?>
													</td>                                                 
                                                    <td>
                                                        <?php echo $rows['user_phone']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rows['inquiry_subject']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rows['inquiry_message']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rows['created_at']; ?>
                                                    </td>
                                                                                                       
                                                </tr>
                                        <?php
                                                $cnt = $cnt + 1;
                                                
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
        <?php include('../modals/users.php');?>
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

