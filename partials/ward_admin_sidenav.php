<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #124491 ">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="../public/dist/img/AdminLTELogo.png" alt="makueni Logo" class="brand-image" style="opacity: .8">
		<span class="brand-text font-weight-light">Admin</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="../public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>

			<div class="info pt-0 mt-0">
				<a href="#" class="">
					<?php echo $_SESSION['user_names']; ?>
					<br />
					<?php echo $_SESSION['user_access_level']; ?>
				</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>


		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<li class="nav-item">
					<a href="dashboard" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt text-success"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
                    <a href="users" class="nav-link">
						<i class="nav-icon fas fa-users text-success"></i>
						<p>
                            System Users
                        </p>
                    </a>
                </li>


				<!-- Reports -->
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-flag text-success"></i>
						<p>
							Reports
							<i class="fas fa-angle-left right"></i>
							
								<span class="badge badge-info right">5</span>
							
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Pending</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Approved</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Rejected</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>All reports</p>
							</a>
						</li>
					</ul>
				</li>


			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>