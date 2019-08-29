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
									<section class="content">
										<div class="row">
											<div class="col-md-12">
												<section class="content-header" >
													<div class="content-header-right">
														<a href="<?php echo base_url().$this->session->userdata('role'); ?>/profile/add" class="btn btn-primary btn-sm">Add New</a>
													</div>
												</section>
												<div class="box-body table-responsive">
													<table id="example1" class="table table-bordered table-striped">
														<thead>
															<tr>
																<th width="30">SL</th>
																<th>Photo</th>
																<th width="100">Full Name</th>
																<th width="100">Email</th>
																<th width="100">Phone</th>
																<th width="100">Role</th>
																<th width="100">Status</th>
																<th width="250">Action</th>
															</tr>
														</thead>
														<tbody>
															<?php
															$i=0;							
															foreach ($users as $row) {
																$i++;
																?>
																<tr>
																	<td><?php echo $i; ?></td>
																	<td style="width:80px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['full_name']; ?>" style="width:80px;"></td>
																	<td><?php echo $row['full_name']; ?></td>
																	<td><?php echo $row['email']; ?></td>
																	<td><?php echo $row['phone']; ?></td>
																	<td><?php echo $row['role']; ?></td>
																	<td><?php echo $row['status']; ?></td>

																	<td>
																		<?php if ($this->session->userdata('role') == 'admin') {?>
																			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/profile/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
																			<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url().$this->session->userdata('role'); ?>/profile/delete/<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a> 
																		<?php } else {?>
																			<div class="forbiden">
																				<i class="fa fa-minus-circle" aria-hidden="true"></i>
																				<span>Akses Tidak tersedia</span>
																				<i class="fa fa-minus-circle" aria-hidden="true"></i>
																			</div>
																		<?php }?>  
																	</td>
																</tr>
																<?php
															}
															?>							
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</section>

									<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
												</div>
												<div class="modal-body">
													<p>Are you sure want to delete this item?</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													<a class="btn btn-danger btn-ok">Delete</a>
												</div>
											</div>
										</div>
									</div>
								</div>
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