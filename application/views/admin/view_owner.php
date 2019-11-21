<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<?php if ($this->session->userdata('role') == 'admin') { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Informasi Owner</h1>
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

	<section class="content">
		<div class="row">
			<div class="col-md-12">

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_own1" data-toggle="tab">Owner 1</a></li>
						<li><a href="#tab_own2" data-toggle="tab">Owner 2</a></li>
						<li><a href="#tab_own3" data-toggle="tab">Owner 3</a></li>
						<li><a href="#tab_own4" data-toggle="tab">Owner 4</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="tab_own1">
							<h3 class="seo-info">Foto Owner 1</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/owner/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Foto tersedia </label>
								<div class="col-sm-4" style="padding-top:5px;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $owner['img_owner1']; ?>" alt="Owner 1" style="width:100px;background: #ddd;padding:5px;">
								</div>
							</div>

							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih </label>
								<div class="col-sm-6" style="padding-top:5px">
									<input type="file" name="img_owner1">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_owner1">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Informasi Owner 1</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/owner/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Jabatan <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="des_owner1" value="<?php echo $owner['des_owner1']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="label_owner1">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_own2">
							<h3 class="seo-info">Foto Owner 2</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/owner/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Foto tersedia </label>
								<div class="col-sm-4" style="padding-top:5px;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $owner['img_owner2']; ?>" alt="Owner 2" style="width:100px;background: #ddd;padding:5px;">
								</div>
							</div>

							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih </label>
								<div class="col-sm-6" style="padding-top:5px">
									<input type="file" name="img_owner2">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_owner2">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Informasi Owner 2</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/owner/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Jabatan <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="des_owner2" value="<?php echo $owner['des_owner2']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="label_owner2">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_own3">
							<h3 class="seo-info">Foto Owner 3</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/owner/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Foto tersedia </label>
								<div class="col-sm-4" style="padding-top:5px;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $owner['img_owner3']; ?>" alt="Owner 3" style="width:100px;background: #ddd;padding:5px;">
								</div>
							</div>

							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih </label>
								<div class="col-sm-6" style="padding-top:5px">
									<input type="file" name="img_owner3">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_owner3">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Informasi Owner 3</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/owner/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Jabatan <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="des_owner3" value="<?php echo $owner['des_owner3']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="label_owner3">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_own4">
							<h3 class="seo-info">Foto Owner 4</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/owner/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Foto tersedia </label>
								<div class="col-sm-4" style="padding-top:5px;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $owner['img_owner4']; ?>" alt="Owner 4" style="width:100px;background: #ddd;padding:5px;">
								</div>
							</div>

							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih </label>
								<div class="col-sm-6" style="padding-top:5px">
									<input type="file" name="img_owner4">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_owner4">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Informasi Owner 4</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/owner/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Jabatan <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="des_owner4" value="<?php echo $owner['des_owner4']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="label_owner4">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>


					</div>
				</div>
			</div>
		</div>

	</section>
<?php } else { ?>
	<div class="forbiden">
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
		<span>Akses Tidak tersedia</span>
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
	</div>
	<?php } ?>