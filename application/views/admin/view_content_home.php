<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<?php if ($this->session->userdata('role') == 'admin') { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Informasi Konten Beranda</h1>
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
						<li class="active"><a href="#tab_profile" data-toggle="tab">Profil Perusahaan</a></li>
						<li><a href="#tab_product" data-toggle="tab">Produk Kami</a></li>
						<li><a href="#tab_career" data-toggle="tab">Karir</a></li>
						<li><a href="#tab_facility" data-toggle="tab">Fasilitas</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="tab_profile">
							<h3 class="seo-info">Latar Profil Perusahaan</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Latar tersedia </label>
								<div class="col-sm-4" style="padding-top:5px;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $content_home['bg_download']; ?>" alt="Latar Download" style="width:100px;background: #ddd;padding:5px;">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih </label>
								<div class="col-sm-6" style="padding-top:5px">
									<input type="file" name="bg_download">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_download">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Informasi Profil Perusahaan</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Icon <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="icon_download" value="<?php echo $content_home['icon_download']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Link <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="link_download" value="<?php echo $content_home['link_download']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="label_download">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_product">
							<h3 class="seo-info">Latar Produk Kami</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Latar tersedia </label>
								<div class="col-sm-4" style="padding-top:5px;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $content_home['bg_product']; ?>" alt="Latar Produk" style="width:100px;background: #ddd;padding:5px;">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih </label>
								<div class="col-sm-6" style="padding-top:5px">
									<input type="file" name="bg_product">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_product">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Informasi Produk Kami</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Icon <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="icon_product" value="<?php echo $content_home['icon_product']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Link <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="link_product" value="<?php echo $content_home['link_product']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="label_product">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_career">
							<h3 class="seo-info">Latar Karir</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Latar tersedia </label>
								<div class="col-sm-4" style="padding-top:5px;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $content_home['bg_career']; ?>" alt="Latar Karir" style="width:100px;background: #ddd;padding:5px;">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih </label>
								<div class="col-sm-6" style="padding-top:5px">
									<input type="file" name="bg_career">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_career">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Informasi Karir</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Icon <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="icon_career" value="<?php echo $content_home['icon_career']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Link <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="link_career" value="<?php echo $content_home['link_career']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="label_career">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_facility">
							<h3 class="seo-info">Latar Fasilitas</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Latar tersedia </label>
								<div class="col-sm-4" style="padding-top:5px;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $content_home['bg_facility']; ?>" alt="Latar Fasilitas" style="width:100px;background: #ddd;padding:5px;">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Pilih </label>
								<div class="col-sm-6" style="padding-top:5px">
									<input type="file" name="bg_facility">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_facility">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Informasi Fasilitas</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/content-home/update',array('class' => 'form-horizontal')); ?>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Icon <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="icon_facility" value="<?php echo $content_home['icon_facility']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Link <span>*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="link_facility" value="<?php echo $content_home['link_facility']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="label_facility">Update</button>
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