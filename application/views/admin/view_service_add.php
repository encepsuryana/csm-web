<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Add Layanan</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/service" class="btn btn-primary btn-sm">Lihat Semua</a>
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

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/service/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info  b-box">
					<div class="box-body">

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Judul <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" autocomplete="off" class="form-control" name="heading" value="<?php if(isset($_POST['heading'])){echo $_POST['heading'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Foto Cover <span>*</span></label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
							</div>
						</div>

						<h3 class="seo-info">Konten Bahasa Inggris </h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Konten Singkat <span>*</span></label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content" style="height:140px;"><?php if(isset($_POST['short_content'])){echo $_POST['short_content'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Konten <span>*</span></label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content" id="editor1"><?php if(isset($_POST['content'])){echo $_POST['content'];} ?></textarea>
							</div>
						</div>

						<h3 class="seo-info">Konten Bahasa Indonesia </h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Konten Singkat <span>*</span></label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content_idn" style="height:140px;"><?php if(isset($_POST['short_content_idn'])){echo $_POST['short_content_idn'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Konten <span>*</span></label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content_idn" id="editor2"><?php if(isset($_POST['content_idn'])){echo $_POST['content_idn'];} ?></textarea>
							</div>
						</div>
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keyword</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_keyword" style="height:100px;"><?php if(isset($_POST['meta_keyword'])){echo $_POST['meta_keyword'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_description" style="height:100px;"><?php if(isset($_POST['meta_description'])){echo $_POST['meta_description'];} ?></textarea>
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