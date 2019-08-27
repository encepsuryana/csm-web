<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if ($this->session->userdata('role') == 'admin'){ ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Content Home (Main Photo)</h1>
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

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/main-photo',array('class' => 'form-horizontal')); ?>

				<div class="box box-info b-box">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-4" style="padding-top:5px;">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $content_home['main_photo']; ?>" alt="Photo" style="width:300px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo </label>
							<div class="col-sm-4">
								<input type="file" name="photo" class="form-control">
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
<?php } else { ?>
	Akses tidak tersedia
	<?php } ?>