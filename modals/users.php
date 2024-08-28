<!-- add user form -->
<div class="modal fade fixed-right" id="addUser" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header align-items-center">
				<div class="text-center">
					<h6 class="mb-0 text-bold">Register new system users</h6>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
					<div class="row">
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Full names (as they appear in National ID) <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" required name="user_name" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Personal/ID Number <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" name="user_personal_number" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Email address <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="email" required name="user_email" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Phone number <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="phone" required name="user_phone_number" class="form-control">
							</div>
						</div>
						
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label"> User Ward <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="hidden" required name="user_ward_id" class="form-control">
                                <select type="text" required name="user_ward_id" class="form-control">
                                    <?php
                                    $fetch_services_sql = mysqli_query(
                                        $mysqli,
                                        "SELECT * FROM ward"
                                    );
                                    if (mysqli_num_rows($fetch_services_sql) > 0) {
                                        while ($services = mysqli_fetch_array($fetch_services_sql)) {
                                    ?>
                                            <option value="<?php echo $services['ward_id']; ?>"><?php echo $services['ward_name']; ?></option>
                                    <?php }
                                    } ?>
                                </select>
							</div>
						</div>										
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Access level <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<select type="text" required name="user_access_level" class="form-control">
									<option value="System Administrator">System Administrator</option>
									<option value="ECM">ECM - ICT, Education & Internship</option>
									<option value="ECMS">ECMs</option>
									<option value="Chief Officer">Chief Officer</option>
									<option value="Director">Director</option>
									<option value="Director">Executive</option>
									<option value="Director - IMV">Director - IMV</option>
									<option value="Ward Administrator">Ward Administrator</option>
									<option value="Revenue Collector">Revenue Collector</option>
								</select>
							</div>
						</div>
					</div>
					<div class="text-right">
						<button type="submit" name="Add_User" class="btn btn-outline-success">Add User</button>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
<!-- update user -->
<div class="modal fade fixed-right" id="update_<?php echo $rows['user_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
	<div class="modal-content">
			<div class="modal-header align-items-center">
				<div class="text-center">
					<h6 class="mb-0 text-bold">Update system user</h6>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
					<div class="row">
						<div class="form-group col-sm-12 col-lg-6 col-xl-6 d-none">
							<label class="form-control-label">id <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" required name="user_id" value="<?php echo $rows['user_id']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Full names (as they appear in National ID) <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" required name="user_names" value="<?php echo $rows['user_names']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Personal/ID Number <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" name="user_personal_number" value="<?php echo $rows['user_personal_number']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Email address <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="email" required name="user_email"  value="<?php echo $rows['user_email']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Phone number <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="phone" required name="user_phone_number" value="<?php echo $rows['user_phone_number']; ?>" class="form-control">
							</div>
						</div>
						
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label"> User Ward <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="hidden" required name="user_ward_id" class="form-control">
                                <select type="text" required name="user_ward_id" class="form-control">
									<option value="<?php echo $rows['user_ward_id']; ?>"><?php echo $rows['ward_name']; ?></option>
                                    <?php
                                    $fetch_services_sql = mysqli_query(
                                        $mysqli,
                                        "SELECT * FROM ward"
                                    );
                                    if (mysqli_num_rows($fetch_services_sql) > 0) {
                                        while ($services = mysqli_fetch_array($fetch_services_sql)) {
                                    ?>
                                            <option value="<?php echo $services['ward_id']; ?>"><?php echo $services['ward_name']; ?></option>
                                    <?php }
                                    } ?>
                                </select>
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Access level <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<select type="text" required name="user_access_level" class="form-control">
									<option value="<?php echo $rows['user_access_level']; ?>"><?php echo $rows['user_access_level']; ?></option>
									<option value="System Administrator">System Administrator</option>
									<option value="ECM">ECM - ICT, Education & Internship</option>
									<option value="ECMS">ECMs</option>
									<option value="Chief Officer">Chief Officer</option>
									<option value="Director">Director</option>
									<option value="Director - IMV">Director - IMV</option>
									<option value="Ward Administrator">Ward Administrator</option>
									<option value="Staff">Revenue Collector</option>
								</select>
							</div>
						</div>
					</div>
					<div class="text-right">
						<button type="submit" name="UpdateProfile" class="btn btn-outline-success">Add User</button>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
<!-- change password -->
<div class="modal fade fixed-right" id="passwordddd_<?php echo $rows['user_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
	<div class="modal-content">
			<div class="modal-header align-items-center">
				<div class="text-center">
					<h6 class="mb-0 text-bold">Rest Password</h6>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
					<div class="row">
						<div class="form-group col-sm-12 col-lg-6 col-xl-6 d-none">
							<label class="form-control-label">Full names (as they appear in National ID) <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" required name="user_id" value="<?php echo $rows['user_id']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Personal/ID Number <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" name="user_personal_number" value="<?php echo $rows['user_personal_number']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Email address <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="disabled" required name="user_email"  value="<?php echo $rows['user_email']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Phone number <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="disabled" required name="user_phone_number" value="<?php echo $rows['user_phone_number']; ?>" class="form-control">
							</div>
						</div>
						
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label"> User Ward <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="hidden" required name="user_ward_id" class="form-control">
                                <select type="disabled" required name="user_ward_id" class="form-control">
									<option value="<?php echo $rows['user_ward_id']; ?>"><?php echo $rows['ward_name']; ?></option>
                                    <?php
                                    $fetch_services_sql = mysqli_query(
                                        $mysqli,
                                        "SELECT * FROM ward"
                                    );
                                    if (mysqli_num_rows($fetch_services_sql) > 0) {
                                        while ($services = mysqli_fetch_array($fetch_services_sql)) {
                                    ?>
                                            <option value="<?php echo $services['ward_id']; ?>"><?php echo $services['ward_name']; ?></option>
                                    <?php }
                                    } ?>
                                </select>
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Access level <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<select type="disabled" required name="user_access_level" class="form-control">
									<option value="<?php echo $rows['user_access_level']; ?>"><?php echo $rows['user_access_level']; ?></option>
									<option value="System Administrator">System Administrator</option>
									<option value="ECM">ECM - ICT, Education & Internship</option>
									<option value="ECMS">ECMs</option>
									<option value="Chief Officer">Chief Officer</option>
									<option value="Director">Director</option>
									<option value="Director - IMV">Director - IMV</option>
									<option value="Ward Administrator">Ward Administrator</option>
									<option value="Staff">Revenue Collector</option>
								</select>
							</div>
						</div>
					</div>
					<div class="text-right">
						<button type="submit" name="Update_Officer_Password" class="btn btn-outline-success">Reset Password</button>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
<!-- disable ser -->
<div class="modal fade fixed-right" id="disable_<?php echo $rows['user_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
	<div class="modal-content">
			<div class="modal-header align-items-center">
				<div class="text-center">
					<h6 class="mb-0 text-bold">Rest Password</h6>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
					<div class="row">
						<div class="form-group col-sm-12 col-lg-6 col-xl-6 d-none">
							<label class="form-control-label">Full names (as they appear in National ID) <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" required name="user_id" value="<?php echo $rows['user_id']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Personal/ID Number <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" name="user_personal_number" value="<?php echo $rows['user_personal_number']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Email address <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="disabled" required name="user_email"  value="<?php echo $rows['user_email']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Phone number <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="disabled" required name="user_phone_number" value="<?php echo $rows['user_phone_number']; ?>" class="form-control">
							</div>
						</div>
						
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label"> User Ward <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="hidden" required name="user_ward_id" class="form-control">
                                <select type="disabled" required name="user_ward_id" class="form-control">
									<option value="<?php echo $rows['user_ward_id']; ?>"><?php echo $rows['ward_name']; ?></option>
                                    <?php
                                    $fetch_services_sql = mysqli_query(
                                        $mysqli,
                                        "SELECT * FROM ward"
                                    );
                                    if (mysqli_num_rows($fetch_services_sql) > 0) {
                                        while ($services = mysqli_fetch_array($fetch_services_sql)) {
                                    ?>
                                            <option value="<?php echo $services['ward_id']; ?>"><?php echo $services['ward_name']; ?></option>
                                    <?php }
                                    } ?>
                                </select>
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Access level <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<select type="disabled" required name="user_access_level" class="form-control">
									<option value="<?php echo $rows['user_access_level']; ?>"><?php echo $rows['user_access_level']; ?></option>
									<option value="System Administrator">System Administrator</option>
									<option value="ECM">ECM - ICT, Education & Internship</option>
									<option value="ECMS">ECMs</option>
									<option value="Chief Officer">Chief Officer</option>
									<option value="Director">Director</option>
									<option value="Director - IMV">Director - IMV</option>
									<option value="Ward Administrator">Ward Administrator</option>
									<option value="Staff">Revenue Collector</option>
								</select>
							</div>
						</div>
					</div>
					<div class="text-right">
						<button type="submit" name="Disable_User" class="btn btn-outline-success">Disable User</button>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- Deactivate User -->
<div class="modal fade" id="deactivate_<?php echo $rows['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="deactivateModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deactivateModalLabel">Deactivate system user</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
					<input type="hidden" name="user_id" value="<?php echo $rows['user_id'];?>">
					<p>Are you sure you want to deactivate <?php echo $rows['user_names'];?>?</p>
					<button type="submit" name="deactivate_user" class="btn btn-warning">Deactivate</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Passod rest -->
<div class="modal fade" id="password_<?php echo $rows['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="deactivateModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deactivateModalLabel">Reset system user password</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
					<input type="hidden" name="user_id" value="<?php echo $rows['user_id'];?>">
					<p>Are you sure you want to reset password for <?php echo $rows['user_names'];?> to default "Makueni102"? </p>
					<button type="submit" name="Update_Officer_Password" class="btn btn-warning">Reset</button>
				</form>
			</div>
		</div>
	</div>
</div>




