<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) { ?>

	<section class="content-header">
		<div class="content-header-left">
			<h1>Edit Testimonial</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/testimonial" class="btn btn-primary btn-sm">Lihat Semua</a>
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

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/testimonial/edit/'.$testimonial['id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info  b-box">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nama <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php echo $testimonial['name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Jabatan <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="designation" value="<?php echo $testimonial['designation']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Perusahaan <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="company" value="<?php echo $testimonial['company']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Foto Tersedia</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $testimonial['photo']; ?>" alt="Slider Photo" style="width:180px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Foto </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="photo">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
							</div>
						</div>						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Komentar <span>*</span></label>
							<div class="col-sm-6">
								<textarea class="form-control" name="comment" style="height:140px;"><?php echo $testimonial['comment']; ?></textarea>
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
		<span><div class="forbiden">
			<i class="fa fa-minus-circle" aria-hidden="true"></i>
			<span>Akses Tidak tersedia</span>
			<i class="fa fa-minus-circle" aria-hidden="true"></i>
		</div></span>
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
	</div>
	<?php }?>