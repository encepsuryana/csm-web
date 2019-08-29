<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Add FAQ</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/faq" class="btn btn-primary btn-sm">View All</a>
		</div>
	</section>

	<section class="content">
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

				<?php echo form_open(base_url().$this->session->userdata('role').'/faq/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info  b-box">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">FAQ Title <span>*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="faq_title" value="<?php if(isset($_POST['faq_title'])) {echo $_POST['faq_title'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">FAQ Content <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="faq_content" id="editor1"><?php if(isset($_POST['faq_content'])) {echo $_POST['faq_content'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Show on where? <span>*</span></label>
							<div class="col-sm-3">
								<select class="form-control select2" name="faq_show">
									<option value="On Home Page">On Home Page</option>
									<option value="On FAQ Page">On FAQ Page</option>
									<option value="On Home and FAQ Page">On Home and FAQ Page</option>
								</select>
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