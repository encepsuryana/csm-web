<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')){ ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Add Designation</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/designation" class="btn btn-primary btn-sm">View All</a>
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

				<?php echo form_open(base_url().$this->session->userdata('role').'/designation/add',array('class' => 'form-horizontal')); ?>

				<div class="box box-info  b-box">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Designation Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="designation_name" autocomplete="off">
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
	Akses tidak tersedia
	<?php }?>