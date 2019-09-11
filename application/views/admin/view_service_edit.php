<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Edit Service</h1>
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
						<p><?php echo $error; ?></p>
					</div>
				<?php endif; ?>

				<?php if($success): ?>
					<div class="callout callout-success">
						<p><?php echo $success; ?></p>
					</div>
				<?php endif; ?>

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/service/edit/'.$service['id'],array('class' => 'form-horizontal'));?>
				<div class="box box-info  b-box">
					<div class="box-body">						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Judul <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="heading" value="<?php echo $service['heading']; ?>">
							</div>
						</div>			
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Foto Tersedia</label>
							<div class="col-sm-9" style="padding-top:5px;">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $service['photo']; ?>" alt="Service Photo" style="width:200px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Foto </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="photo">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Konten Singkat <span>*</span></label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content" style="height:140px;"><?php echo $service['short_content']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Konten <span>*</span></label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content" id="editor1"><?php echo $service['content']; ?></textarea>
							</div>
						</div>
						
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Title</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="meta_title" value="<?php echo $service['meta_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keyword</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_keyword" style="height:100px;"><?php echo $service['meta_keyword']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_description" style="height:100px;"><?php echo $service['meta_description']; ?></textarea>
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