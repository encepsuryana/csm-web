<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>

	<section class="content-header">
		<div class="content-header-left">
			<h1>Edit Team Member</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/team-member" class="btn btn-primary btn-sm">View All</a>
		</div>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-md-12">

				<?php if($error): ?>
					<div class="callout callout-danger">
						<p>
							<?php echo $error; ?>
						</p>
					</div>
				<?php endif; ?>

				<?php if($success): ?>
					<div class="callout callout-success">
						<p><?php echo $success; ?></p>
					</div>
				<?php endif; ?>

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/team-member/edit/'.$team_member['id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info  b-box">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php echo $team_member['name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Select Designation <span>*</span></label>
							<div class="col-sm-3">
								<select class="form-control select2" name="designation_id" style="width:300px;">
									<?php
									$i=0;
									foreach ($all_designation as $row) {
										?>
										<option value="<?php echo $row['designation_id']; ?>" <?php if($row['designation_id']==$team_member['designation_id']){echo 'selected';} ?>><?php echo $row['designation_name']; ?></option>
										<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?php echo base_url();; ?>public/uploads/<?php echo $team_member['photo']; ?>" alt="Team Member Photo" style="width:200px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo <span>*</span></label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Facebook </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="facebook" value="<?php echo $team_member['facebook']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Twitter </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="twitter" value="<?php echo $team_member['twitter']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">LinkedIn </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="linkedin" value="<?php echo $team_member['linkedin']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">YouTube </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="youtube" value="<?php echo $team_member['youtube']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Google Plus </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="google_plus" value="<?php echo $team_member['google_plus']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Instagram </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="instagram" value="<?php echo $team_member['instagram']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Flickr </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="flickr" value="<?php echo $team_member['flickr']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>

	</section>
<?php } else { ?>
	<div class="forbiden">
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
		<span>Akses Tidak tersedia</span>
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
	</div>
	<?php }?>