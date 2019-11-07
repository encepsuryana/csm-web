<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Edit Foto</h1>
		</div>
		<div class="content-header-right">
			<a href="photo.php" class="btn btn-primary btn-sm">Lihat Semua</a>
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

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/photo/edit/'.$photo['photo_id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info  b-box">
					<div class="box-body">

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ukuran Foto <span>*</span></label>
							<div class="col-sm-4">
								<input id="style" type="text" class="form-control" name="photo_style" value="<?php echo $photo['photo_style']; ?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"><span></span></label>
							<div class="col-sm-4" style="text-align: center;">
								<div class="style-select" > 
									<i class="fa fa-info-circle" aria-hidden="true"></i>
									<span>Select Style: </span>
								</div>
								<input id="add" type="button" onclick='ik(this.value);' value='col-sm-6 col-xs-6 box' style="padding: 40px 50px;">
								<input id="add" type="button" onclick='ik(this.value);' value='col-sm-3 col-xs-6 box' style="padding: 40px 5px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Foto Tersedia</label>
							<div class="col-sm-6" style="padding-top:6px;">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $photo['photo_name']; ?>" class="existing-photo" style="width:300px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Pilih <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<input type="file" name="photo"> (Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
							</div>
						</div>

						<h3 class="seo-info">Konten Bahasa Inggris</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Judul <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="photo_caption" value="<?php echo $photo['photo_caption']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Deskripsi <span>*</span></label>
							<div class="col-sm-4">
								<textarea type="text" class="form-control" name="photo_desc" style="height:100px;"><?php echo $photo['photo_desc']; ?></textarea>
							</div>
						</div>

						<h3 class="seo-info">Konten Bahasa Indonesia</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Judul <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="photo_caption_idn" value="<?php echo $photo['photo_caption_idn']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Deskripsi <span>*</span></label>
							<div class="col-sm-4">
								<textarea type="text" class="form-control" name="photo_desc_idn" style="height:100px;"><?php echo $photo['photo_desc_idn']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tampilkan? <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<select name="photo_show_home" class="form-control select2">
									<option value="Yes" <?php if($photo['photo_show_home']=='Yes') {echo 'selected';} ?>>Yes</option>
									<option value="No" <?php if($photo['photo_show_home']=='No') {echo 'selected';} ?>>No</option>
								</select>
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
	<div class="forbiden">
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
		<span>Akses Tidak tersedia</span>
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
	</div>
	<?php }?>