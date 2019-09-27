<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Konten Beranda (Company Profile)</h1>
	</div>
</section>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')){ ?>
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

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/company-profile',array('class' => 'form-horizontal')); ?>

				<div class="box box-info b-box">
					<div class="box-body">
						<div class="form-group">
							<div class="pdf-style">
								<label for="" class="col-sm-2"></label>
								<div class="col-md-5">
									<i title="<?php echo $content_home['file_pdf']; ?>" data-toggle="tooltip" data-placement="top" class="fa fa-file-pdf-o" aria-hidden="true"></i>
									<label style="margin-left: 5px;" for="">File Pdf: Company Profile</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Pilih File: </label>
							<div class="col-sm-4">
								<input type="file" name="file" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
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
