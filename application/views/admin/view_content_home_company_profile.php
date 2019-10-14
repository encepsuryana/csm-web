<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>File: Profil Perusahaan (pdf)</h1>
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

<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')){ ?>
	
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_1" data-toggle="tab">Profile Perusahaan Mekanik</a></li>
						<li><a href="#tab_2" data-toggle="tab">Profile Perusahaan Divisi Elektronik</a></li>
						<li><a href="#tab_3" data-toggle="tab">Profile Perusahaan Mekanik & Divisi Elektronik</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="tab_1">

							<h3 class="seo-info">File Pdf</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/company-profile',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<div class="pdf-style">
									<label for="" class="col-sm-2"></label>
									<div class="col-md-5">
										<i title="<?php echo $content_home['file_pdf1']; ?>" data-toggle="tooltip" data-placement="top" class="fa fa-file-pdf-o" aria-hidden="true"></i>
										<label style="margin-left: 5px;" for="">File Pdf: Profil Perusahaan Mekanik</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih File: </label>
								<div class="col-sm-4">
									<input type="file" name="file1" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Spanduk</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/company-profile',array('class' => 'form-horizontal')); ?>
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Spanduk</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<img src="<?php echo base_url(); ?>public/uploads/file/<?php echo $content_home['spanduk1']; ?>" class="existing-photo" style="width:500px;">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Spanduk Baru</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<input type="file" name="spanduk1">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_spanduk1">Update Foto</button>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_2">
							<h3 class="seo-info">File Pdf</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/company-profile',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<div class="pdf-style">
									<label for="" class="col-sm-2"></label>
									<div class="col-md-5">
										<i title="<?php echo $content_home['file_pdf2']; ?>" data-toggle="tooltip" data-placement="top" class="fa fa-file-pdf-o" aria-hidden="true"></i>
										<label style="margin-left: 5px;" for="">File Pdf: Profil Perusahaan Divisi Elektronik</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih File: </label>
								<div class="col-sm-4">
									<input type="file" name="file2" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form2">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Spanduk</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/company-profile',array('class' => 'form-horizontal')); ?>
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Spanduk</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<img src="<?php echo base_url(); ?>public/uploads/file/<?php echo $content_home['spanduk2']; ?>" class="existing-photo" style="width:500px;">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Spanduk Baru</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<input type="file" name="spanduk2">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_spanduk2">Update Foto</button>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_3">
							<h3 class="seo-info">File Pdf</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/company-profile',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<div class="pdf-style">
									<label for="" class="col-sm-2"></label>
									<div class="col-md-5">
										<i title="<?php echo $content_home['file_pdf3']; ?>" data-toggle="tooltip" data-placement="top" class="fa fa-file-pdf-o" aria-hidden="true"></i>
										<label style="margin-left: 5px;" for="">File Pdf: Profil Perusahaan Engineering & Divisi Elektronik</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih File: </label>
								<div class="col-sm-4">
									<input type="file" name="file3" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form3">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Spanduk</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/company-profile',array('class' => 'form-horizontal')); ?>
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Spanduk</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<img src="<?php echo base_url(); ?>public/uploads/file/<?php echo $content_home['spanduk3']; ?>" class="existing-photo" style="width:500px;">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Spanduk Baru</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<input type="file" name="spanduk3">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_spanduk3">Update Foto</button>
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
<?php } else {?>
	<div class="forbiden">
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
		<span>Akses Tidak tersedia</span>
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
	</div>
<?php } ?>
