<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Informasi Elektronik Divisi</h1>
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
				<div class="box box-info b-box">
					<div class="box-body table-responsive">
						<h3 class="seo-info">Deskripsi Gambar</h3>
						<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/aviation-electronics-department-desc/update',array('class' => 'form-horizontal')); ?>

						<input type="hidden" name="current_aviation_electronics_desc_photo" value="<?php echo $aviation_electronics_desc['aviation_electronics_desc_photo']; ?>">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Gambar </label>
							<div class="col-sm-9">
								
								<?php if($aviation_electronics_desc['aviation_electronics_desc_photo'] == ''): ?>
									<div style="padding-top:6px;color:red;">Gambar tidak tersedia</div>
									<?php else: ?>
										<img src="<?php echo base_url(); ?>public/uploads/<?php echo $aviation_electronics_desc['aviation_electronics_desc_photo']; ?>" style="width:300px;">
										<br>
										<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'staff')) { ?>
											<a href="<?php echo base_url().$this->session->userdata('role'); ?>/aviation_electronics_desc/delete_aviation_electronics_desc_photo" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Hapus Gambar</a>
										<?php } else { ?>

										<?php } ?>
									<?php endif; ?>
								</div>
							</div>
							<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'staff')) { ?>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Pilih </label>
									<div class="col-sm-6">
										<input type="file" name="aviation_electronics_desc_photo">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_aviation_electronics_desc_photo">Update Photo</button>
									</div>
								</div>
							<?php } else { ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Pilih </label>
									<div class="col-sm-6">
										<input type="file" name="aviation_electronics_desc_photo" class="form-control" disabled="disabled">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_aviation_electronics_desc_photo" disabled="disabled">Update Photo</button>
									</div>
								</div>
							<?php } ?>
							<?php echo form_close(); ?>


							<?php echo form_open(base_url().$this->session->userdata('role').'/aviation-electronics-department-desc/update',array('class' => 'form-horizontal')); ?>
							<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) { ?>

								<h3 class="seo-info">Informasi Elektronik Divisi Basaha Inggris</h3>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Judul </label>
									<div class="col-sm-9">
										<input type="text" name="aviation_electronics_desc_heading" class="form-control" value="<?php echo $aviation_electronics_desc['aviation_electronics_desc_heading']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Konten </label>
									<div class="col-sm-9">
										<textarea name="aviation_electronics_desc_content" class="form-control" cols="30" rows="10" id="editor2"><?php echo $aviation_electronics_desc['aviation_electronics_desc_content']; ?></textarea>
									</div>
								</div>

								<h3 class="seo-info">Informasi Elektronik Divisi Basaha Indonesia</h3>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Judul </label>
									<div class="col-sm-9">
										<input type="text" name="ed_desc_heading_idn" class="form-control" value="<?php echo $aviation_electronics_desc['ed_desc_heading_idn']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Konten </label>
									<div class="col-sm-9">
										<textarea name="ed_desc_content_idn" class="form-control" cols="30" rows="10" id="editor1"><?php echo $aviation_electronics_desc['ed_desc_content_idn']; ?></textarea>
									</div>
								</div>

								<h3 class="seo-info">SEO Information</h3>     
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Meta Keyword </label>
									<div class="col-sm-9">
										<textarea class="form-control" name="mk_aviation_electronics_desc" style="height:100px;"><?php echo $aviation_electronics_desc['mk_aviation_electronics_desc']; ?></textarea>
									</div>
								</div>  
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Meta Description </label>
									<div class="col-sm-9">
										<textarea class="form-control" name="md_aviation_electronics_desc" style="height:100px;"><?php echo $aviation_electronics_desc['md_aviation_electronics_desc']; ?></textarea>
									</div>
								</div>  
							<?php } else { ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Judul </label>
									<div class="col-sm-6">
										<input type="text" name="aviation_electronics_desc_heading" class="form-control" value="<?php echo $aviation_electronics_desc['aviation_electronics_desc_heading']; ?>" readonly="readonly">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"> Content </label>
									<div class="col-sm-9">
										<textarea name="aviation_electronics_desc_content" class="form-control" cols="30" rows="10" id="editor1" disabled="disabled"><?php echo $aviation_electronics_desc['aviation_electronics_desc_content']; ?></textarea>
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Meta Title </label>
									<div class="col-sm-9">
										<input type="text" name="mt_aviation_electronics_desc" class="form-control" value="<?php echo $aviation_electronics_desc['mt_aviation_electronics_desc']; ?>" readonly="readonly">
									</div>
								</div>      
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Meta Keyword </label>
									<div class="col-sm-9">
										<textarea class="form-control" name="mk_aviation_electronics_desc" style="height:100px;" readonly="readonly"><?php echo $aviation_electronics_desc['mk_aviation_electronics_desc']; ?></textarea>
									</div>
								</div>  
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Meta Description </label>
									<div class="col-sm-9">
										<textarea class="form-control" name="md_aviation_electronics_desc" style="height:100px;" readonly="readonly"><?php echo $aviation_electronics_desc['md_aviation_electronics_desc']; ?></textarea>
									</div>
								</div>  
							<?php } ?>

							<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) { ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_aviation_electronics_desc">Update Informasi</button>
									</div>
								</div>
							<?php } else { ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_aviation_electronics_desc" disabled="disabled">Update Informasi</button>
									</div>
								</div>
							<?php } ?>                         
							<?php echo form_close(); ?>
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
