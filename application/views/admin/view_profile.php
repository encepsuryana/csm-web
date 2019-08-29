<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Edit Profile</h1>
		</div>
	</section>

	<section class="content" style="min-height:auto;margin-bottom: -30px;">
		<div class="row">
			<div class="col-md-12">
				<?php if($error): ?>
					<div class="callout callout-danger">
						<p><?php echo $error; ?></p>
					</div>
				<?php endif; ?>

				<?php if($success): ?>
					<div class="callout callout-success">
						<p><?php echo $success; ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php if ($this->session->userdata('role') == 'admin') { ?>
		<section class="content">
			<div class="row">
				<div class="col-md-12">

					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab">Update Information</a></li>
							<li><a href="#tab_2" data-toggle="tab">Update Photo</a></li>
							<li><a href="#tab_3" data-toggle="tab">Update Password</a></li>
							<li><a href="#tab_4" data-toggle="tab">Kelola Pengguna</a></li>
						</ul>
						<div class="tab-content">

							<div class="tab-pane active" id="tab_1">						
								<?php echo form_open(base_url().$this->session->userdata('role').'/profile/update',array('class' => 'form-horizontal')); ?>
								<div class="box box-info  b-box">
									<div class="box-body">
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="full_name" value="<?php echo $this->session->userdata('full_name'); ?>">
											</div>										
										</div>		
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Email Address <span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="email" value="<?php echo $this->session->userdata('email'); ?>">
											</div>			
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Phone </label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="phone" value="<?php echo $this->session->userdata('phone'); ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Role <span>*</span></label>
											<div class="col-sm-4" style="padding-top:7px;">
												<?php echo $this->session->userdata('role'); ?>
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label"></label>
											<div class="col-sm-6">
												<button type="submit" class="btn btn-success pull-left" name="form1">Update Information</button>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_close(); ?>
							</div>


							<div class="tab-pane" id="tab_2">
								<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/profile/update',array('class' => 'form-horizontal')); ?>
								<div class="box box-info  b-box">
									<div class="box-body">
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Existing Photo</label>
											<div class="col-sm-6" style="padding-top:6px;">
												<?php if($this->session->userdata('photo') ==''): ?>
													<img src="<?php echo base_url(); ?>public/img/no-photo.jpg" class="existing-photo" alt="profile photo" width="140">
													<?php else: ?>
														<img src="<?php echo base_url(); ?>public/uploads/<?php echo $this->session->userdata('photo'); ?>" class="existing-photo" width="140">
													<?php endif; ?>							                
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">New Photo</label>
												<div class="col-sm-6" style="padding-top:6px;">
													<input type="file" name="photo">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label"></label>
												<div class="col-sm-6">
													<button type="submit" class="btn btn-success pull-left" name="form2">Update Photo</button>
												</div>
											</div>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>


								<div class="tab-pane" id="tab_3">
									<?php echo form_open(base_url().$this->session->userdata('role').'/profile/update',array('class' => 'form-horizontal')); ?>
									<div class="box box-info  b-box">
										<div class="box-body">
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Password </label>
												<div class="col-sm-4">
													<input type="password" class="form-control" name="password">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Retype Password </label>
												<div class="col-sm-4">
													<input type="password" class="form-control" name="re_password">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label"></label>
												<div class="col-sm-6">
													<button type="submit" class="btn btn-success pull-left" name="form3">Update Password</button>
												</div>
											</div>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>

								<div class="tab-pane" id="tab_4">
									<?php echo form_open(base_url().$this->session->userdata('role').'/profile/update',array('class' => 'form-horizontal')); ?>
									<div class="box box-info b-box">
										<div class="box-body">
											Dalam Pengembangan
										</div>
									</div>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } elseif (($this->session->userdata('role') == 'hrd') or ($this->session->userdata('role') == 'staff')) { ?> 
		<section class="content">
			<div class="row">
				<div class="col-md-12">

					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab">Update Information</a></li>
							<li><a href="#tab_2" data-toggle="tab">Update Photo</a></li>
							<li><a href="#tab_3" data-toggle="tab">Update Password</a></li>
						</ul>
						<div class="tab-content">

							<div class="tab-pane active" id="tab_1">						
								<?php echo form_open(base_url().$this->session->userdata('role').'/profile/update',array('class' => 'form-horizontal')); ?>
								<div class="box box-info  b-box">
									<div class="box-body">
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="full_name" value="<?php echo $this->session->userdata('full_name'); ?>">
											</div>										
										</div>		
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Email Address <span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="email" value="<?php echo $this->session->userdata('email'); ?>">
											</div>			
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Phone </label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="phone" value="<?php echo $this->session->userdata('phone'); ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Role <span>*</span></label>
											<div class="col-sm-4" style="padding-top:7px;">
												<?php echo $this->session->userdata('role'); ?>
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label"></label>
											<div class="col-sm-6">
												<button type="submit" class="btn btn-success pull-left" name="form1">Update Information</button>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_close(); ?>
							</div>


							<div class="tab-pane" id="tab_2">
								<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/profile/update',array('class' => 'form-horizontal')); ?>
								<div class="box box-info  b-box">
									<div class="box-body">
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Existing Photo</label>
											<div class="col-sm-6" style="padding-top:6px;">
												<?php if($this->session->userdata('photo') ==''): ?>
													<img src="<?php echo base_url(); ?>public/img/no-photo.jpg" class="existing-photo" alt="profile photo" width="140">
													<?php else: ?>
														<img src="<?php echo base_url(); ?>public/uploads/<?php echo $this->session->userdata('photo'); ?>" class="existing-photo" width="140">
													<?php endif; ?>							                
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">New Photo</label>
												<div class="col-sm-6" style="padding-top:6px;">
													<input type="file" name="photo">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label"></label>
												<div class="col-sm-6">
													<button type="submit" class="btn btn-success pull-left" name="form2">Update Photo</button>
												</div>
											</div>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>


								<div class="tab-pane" id="tab_3">
									<?php echo form_open(base_url().$this->session->userdata('role').'/profile/update',array('class' => 'form-horizontal')); ?>
									<div class="box box-info  b-box">
										<div class="box-body">
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Password </label>
												<div class="col-sm-4">
													<input type="password" class="form-control" name="password">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label">Retype Password </label>
												<div class="col-sm-4">
													<input type="password" class="form-control" name="re_password">
												</div>
											</div>
											<div class="form-group">
												<label for="" class="col-sm-2 control-label"></label>
												<div class="col-sm-6">
													<button type="submit" class="btn btn-success pull-left" name="form3">Update Password</button>
												</div>
											</div>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	<?php }  else { ?>
		<div class="forbiden">
			<i class="fa fa-minus-circle" aria-hidden="true"></i>
			<span>Akses Tidak tersedia</span>
			<i class="fa fa-minus-circle" aria-hidden="true"></i>
		</div>
		
	<?php }?>
<?php }  else { ?>
	<div class="forbiden">
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
		<span>Akses Tidak tersedia</span>
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
	</div>

	<?php }?>