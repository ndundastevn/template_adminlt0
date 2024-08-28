<?php
/*
 *   Crafted On Mon Jul 29 2024
 *   Author Stephen Ndunda (ndundastevn@gmail.com)
 * 
 *   www.makueni.go.ke
 *   info@makueni.go.ke
 *
 *
 *   The Government of Makueni County Applications Development Section End User License Agreement
 *   Copyright (c) 2023 Government of Makueni County 
 *
 *
 *   1. GRANT OF LICENSE 
 *   GoMC Applications Development Section hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 *   install and activate this system on one computer solely for your official and non-commercial use,
 *   unless you have purchased a commercial license from GoMC Applications Development Section. Sharing this Software with other individuals, 
 *   or allowing other individuals to view the contents of this Software, is in violation of this license.
 *   You may not make the Software available on a network, or in any way provide the Software to multiple users
 *   unless you have first purchased at least a multi-user license from GoMC Applications Development Section
 *
 *   2. COPYRIGHT 
 *   The Software is owned by GoMC Applications Development Section and protected by copyright law and international copyright treaties. 
 *   You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 *
 *   3. RESTRICTIONS ON USE
 *   You may not, and you may not permit others to
 *   (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 *   (b) modify, distribute, or create derivative works of the Software;
 *   (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 *   otherwise exploit the Software. 
 *
 *
 *   4. TERM
 *   This License is effective until terminated. 
 *   You may terminate it at any time by destroying the Software, together with all copies thereof.
 *   This License will also terminate if you fail to comply with any term or condition of this Agreement.
 *   Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 *
 *   5. NO OTHER WARRANTIES. 
 *   GoMC APPLICATIONS DEVELOPMENT SECTION DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 *   GoMC APPLICATIONS DEVELOPMENT SECTION SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 *   EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 *   SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 *   ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 *   INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 *   SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 *   THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 *   HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 *
 *   6. SEVERABILITY
 *   In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 *   affect the validity of the remaining portions of this license.
 *
 *
 *   7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL GoMC APPLICATIONS DEVELOPMENT SECTION OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 *   CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 *   USE OF THE SOFTWARE, EVEN IF GoMC APPLICATIONS DEVELOPMENT SECTION HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 *   IN NO EVENT WILL GoMC APPLICATIONS DEVELOPMENT SECTION LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 *   TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 *
 */
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
                            <h1 class="m-0"> System Users</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Users</li>
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
										<a data-toggle="modal" data-target="#addUser"><button type="button" class="btn btn-block btn-success">Add New User</button></a>
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>                  
											<tr>
												<th style="width: 10px">#</th>
												<th>Name</th>
												<th>Email</th>																				
												<th>ID Number</th>																				
												<th>Access Level</th>												
												<th>Status</th>												
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										<?php
                                        $fetch_records_sql = mysqli_query(
                                            $mysqli,
                                            "SELECT * FROM users"												
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
                                                        <?php echo $rows['user_names']; ?>
                                                    </td>
													<td>
														<?php echo $rows['user_email']; ?>
													</td>                                                 
													<td>
														<?php echo $rows['user_personal_number']; ?>
													</td>                                                 
                                                    <td>
                                                        <?php echo $rows['user_access_level']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($rows['user_active_status']){
															echo 'Active';
														}else{
															echo 'Disabled';
														} ?>
                                                    </td>
                                                    <td>
                                                        <a data-toggle="modal" href="#update_<?php echo $rows['user_id']; ?>" class="badge badge-primary"><i class="fas fa-edit"></i> Edit</a>
                                                        <a data-toggle="modal" href="#password_<?php echo $rows['user_id']; ?>" class="badge badge-warning"><i class="fas fa-lock"></i> Reset password</a>
                                                        <a data-toggle="modal" href="#deactivate_<?php echo $rows['user_id']; ?>" class="badge badge-danger"><i class="fas fa-trash"></i> Disable</a>
                                                    </td>
                                                </tr>
                                        <?php
                                                $cnt = $cnt + 1;
                                                include('../modals/users.php');
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

