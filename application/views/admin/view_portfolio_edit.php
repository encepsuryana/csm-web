<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Edit Portofolio</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio" class="btn btn-primary btn-sm">Lihat Semua</a>
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

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/portfolio/edit/'.$portfolio['id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info  b-box">
					<div class="box-body">
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Judul <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php echo $portfolio['name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Konten Singkat <span>*</span></label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content" style="height:100px;"><?php echo $portfolio['short_content']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"> </label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $portfolio['photo']; ?>" alt="" style="width:120px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ubah Cover</label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Hanya file: jpg, jpeg, gif dan png yang diperbolehkan)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Konten <span>*</span></label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content" id="editor1"><?php echo $portfolio['content']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Pilih Kategori <span>*</span></label>
							<div class="col-sm-4">
								<select name="category_id" class="form-control select2">
									<?php
									foreach ($all_photo_category as $row) {
										?>
										<option value="<?php echo $row['category_id']; ?>" <?php if($row['category_id'] == $portfolio['category_id']) {echo 'selected';} ?>><?php echo $row['category_name']; ?></option>
										<?php
									}
									?>	
								</select>
							</div>
						</div>
						<h3 class="seo-info">Foto Galeri</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Foto Galeri</label>
							<div class="col-sm-6" style="padding-top:5px">
								<table class="table table-bordered">
									<?php
									foreach ($all_photos_by_id as $row) {
										?>
										<tr>
											<td>
												<img src="<?php echo base_url(); ?>public/uploads/portfolio_photos/<?php echo $row['photo']; ?>" alt="" style="width:120px;">
											</td>
											<td>
												<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio/single-photo-delete/<?php echo $row['id']; ?>/<?php echo $portfolio['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
											</td>
										</tr>
										<?php
									}
									?>
								</table>								
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tambah Foto</label>
							<div class="col-sm-6" style="padding-top:5px">
								<table id="PhotosTable" style="width:100%;">
									<tbody>
										<tr>
											<td>
												<div class="upload-btn">
													<input type="file" name="photos[]">
												</div>
											</td>
											<td style="width:28px;"><a href="javascript:void()" class="Delete btn btn-danger btn-xs">X</a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-sm-2" style="padding-top:5px">
								<input type="button" id="btnAddNew" value="Add Item" class="btn btn-warning btn-xs">
							</div>
						</div>
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keyword</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_keyword" style="height:100px;"><?php echo $portfolio['meta_keyword']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_description" style="height:100px;"><?php echo $portfolio['meta_description']; ?></textarea>
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

	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
				</div>
				<div class="modal-body">
					<p>Anda yakin ingin menghapus?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<a class="btn btn-danger btn-ok">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="forbiden">
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
		<span>Akses Tidak tersedia</span>
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
	</div>
	<?php }?>