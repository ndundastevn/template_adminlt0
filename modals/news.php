<!-- add News form -->
<div class="modal fade fixed-right" id="addUser" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header align-items-center">
				<div class="text-center">
					<h6 class="mb-0 text-bold">News and Updates</h6>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
					<div class="row">
						<div class="form-group col-sm-12 col-lg-12 col-xl-12">
							<label class="form-control-label">Subject <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" required name="news_subject" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-12 col-xl-12">
							<label class="form-control-label">Message <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<textarea name="news_message"  class="form-control" required></textarea>
							</div>
						</div>	
						<div class="form-group col-sm-12 col-lg-12 col-xl-12">
							<div class="form-group form-check">
								<input type="checkbox" name="published_status" class="form-check-input">
								<label class="form-control-label">Publish</label>
								</div>
						</div>				
					</div>
					<div class="text-right">
						<button type="submit" name="Add_News" class="btn btn-outline-success">Save</button>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- Update News form -->
<div class="modal fade fixed-right" id="update_<?php echo $rows['news_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header align-items-center">
				<div class="text-center">
					<h6 class="mb-0 text-bold">News and Updates</h6>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
					<div class="row">
						<div class="form-group col-sm-12 col-lg-12 col-xl-12">
							<label class="form-control-label">Subject <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" hidden name="news_id" value="<?php echo $rows['news_id']; ?>" class="form-control">
								<input type="text" required name="news_subject" value="<?php echo $rows['news_subject']; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-12 col-xl-12">
							<label class="form-control-label">Message <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<textarea name="news_message" class="form-control" required><?php echo $rows['news_message']; ?></textarea>
							</div>
						</div>	
						<div class="form-group col-sm-12 col-lg-12 col-xl-12">
							<div class="form-group form-check">
								<input type="checkbox" name="published_status" class="form-check-input">
								<label class="form-control-label">Publish</label>
								</div>
						</div>				
					</div>
					<div class="text-right">
						<button type="submit" name="Update_News" class="btn btn-outline-success">Update</button>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- Delete news -->
<div class="modal fade" id="delete_<?php echo $rows['news_id'];?>" tabindex="-1" role="dialog" aria-labelledby="deactivateModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deactivateModalLabel">Delete News</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
					<input type="hidden" name="news_id" value="<?php echo $rows['news_id'];?>">
					<p>Are you sure you want to delete, <b><?php echo $rows['news_subject'];?>? </b></p>
					<button type="submit" name="deleteNews" class="btn btn-warning">Delete</button>
				</form>
			</div>
		</div>
	</div>
</div>
