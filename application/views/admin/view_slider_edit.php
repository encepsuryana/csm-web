<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}

if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>

	<section class="content-header">
		<div class="content-header-left">
			<h1>Edit Slider</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/slider" class="btn btn-primary btn-sm">Lihat Semua</a>
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

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/slider/edit/'.$slider['id'],array('class' => 'form-horizontal'));?>
				<div class="box box-info  b-box">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Foto Tersedia</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $slider['photo']; ?>" alt="Slider Photo" style="width:400px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Foto </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="photo">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
							</div>
						</div>

						<h3 class="seo-info">Kontent Bahasa Inggris</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Judul </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="heading" value="<?php echo $slider['heading']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Konten </label>
							<div class="col-sm-6">
								<textarea class="form-control" name="content" style="height:140px;"><?php echo $slider['content']; ?></textarea>
							</div>
						</div>

						<h3 class="seo-info">Kontent Bahasa Indonesia</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Judul </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="heading_idn" value="<?php echo $slider['heading_idn']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Konten </label>
							<div class="col-sm-6">
								<textarea class="form-control" name="content_idn" style="height:140px;"><?php echo $slider['content_idn']; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tombol1 Text </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="button1_text" value="<?php echo $slider['button1_text']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tombol1 URL </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="button1_url" value="<?php echo $slider['button1_url']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tombol2 Text </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="button2_text" value="<?php echo $slider['button2_text']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tombol2 URL </label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="button2_url" value="<?php echo $slider['button2_url']; ?>">
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