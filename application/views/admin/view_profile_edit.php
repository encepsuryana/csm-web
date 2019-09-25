<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<?php if ($this->session->userdata('role') == 'admin') { ?>

	<section class="content-header">
		<div class="content-header-left">
			<h1>Edit User</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/profile" class="btn btn-primary btn-sm">Lihat Semua</a>
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

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/profile/edit/'.$profile['id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info  b-box">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nama Lengkap <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="full_name" value="<?php echo $profile['full_name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Email <span>*</span></label>
							<div class="col-sm-6">
								<input type="email" autocomplete="off" class="form-control" name="email" value="<?php echo $profile['email']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">No. Telp <span>*</span></label>
							<div class="col-sm-6">
								<input type="number" autocomplete="off" class="form-control" name="phone" value="<?php echo $profile['phone']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Password <span>*</span></label>
							<div class="col-sm-6">
								<input type="password" autocomplete="off" class="form-control" name="password">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ulangi Password </label>
							<div class="col-sm-4">
								<input type="password" class="form-control" name="re_password">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $profile['photo']; ?>" alt="Avatar" style="width:180px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="photo">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Role <span>*</span></label>
							<div class="col-sm-2" style="padding-top:6px;">
								<select name="role" class="form-control select2">
									<option value="admin" <?php if($profile['role']=='admin') {echo 'selected';} ?>>Admin</option>
									<option value="hrd" <?php if($profile['role']=='hrd') {echo 'selected';} ?>>HRD</option>
									<option value="staff" <?php if($profile['role']=='staff') {echo 'selected';} ?>>Staff</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Status <span>*</span></label>
							<div class="col-sm-2" style="padding-top:6px;">
								<select name="status" class="form-control select2">
									<option value="admin" <?php if($profile['status']=='Active') {echo 'selected';} ?>>Active</option>
									<option value="hrd" <?php if($profile['status']=='InActive') {echo 'selected';} ?>>InActive</option>
								</select>
							</div>
						</div>	
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Token <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="token" value="<?php echo $profile['token']; ?>">
							</div>
						</div>	

						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form_update">Submit</button>
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
		<span><div class="forbiden">
			<i class="fa fa-minus-circle" aria-hidden="true"></i>
			<span>Akses Tidak tersedia</span>
			<i class="fa fa-minus-circle" aria-hidden="true"></i>
		</div></span>
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
	</div>
	<?php }?>