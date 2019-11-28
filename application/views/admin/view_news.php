<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}

if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd') or ($this->session->userdata('role') == 'staff')) { ?>

	<section class="content-header">
		<div class="content-header-left">
			<h1>Lihat Berita</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/news/add" class="btn btn-primary btn-sm">Tambah Baru</a>
		</div>
	</section>


	<section class="content">

		<div class="row">
			<div class="col-md-12">
				<div class="box box-info b-box">
					<div class="box-body table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal & User</th>
									<th>Judul</th>
									<th>Konten</th>
									<th>Kategori</th>
									<th>Jumlah View</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=0;
								foreach ($news as $row) {
									$i++;
									?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $row['news_date']; ?> (<?php echo $row['user_update'];?>)</td>
										<td>
											<?php echo $row['news_title_idn']; ?>
											<hr>
											<i><?php echo $row['news_title']; ?></i>
										</td>
										<td>
											<?php echo $row['news_short_content_idn']; ?>
											<hr>
											<i><?php echo $row['news_short_content']; ?></i>
										</td>
										<td>
											<?php echo $row['category_name']; ?>
										</td>
										<td>
											<?php echo $row['total_view']; ?>
										</td>
										<td>										
											<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) { ?>
												<a class="btn btn-success btn-xs" data-toggle="modal" href="<?php echo base_url(); ?>news/post/<?php echo $row['post_slug']; ?>" target="_blank">View</a>
												<a href="<?php echo base_url().$this->session->userdata('role'); ?>/news/edit/<?php echo $row['news_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
												<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url().$this->session->userdata('role'); ?>/news/delete/<?php echo $row['news_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
											<?php } elseif ($this->session->userdata('role') == 'hrd') { ?>
												<a class="btn btn-success btn-xs" data-toggle="modal" href="<?php echo base_url(); ?>news/post/<?php echo $row['post_slug']; ?>" target="_blank">View</a>
												<a href="<?php echo base_url().$this->session->userdata('role'); ?>/news/edit/<?php echo $row['news_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
											<?php } else { ?>
												<div class="forbiden">
													<i class="fa fa-minus-circle" aria-hidden="true"></i>
													<span>Akses Tidak tersedia</span>
													<i class="fa fa-minus-circle" aria-hidden="true"></i>
												</div>
											<?php } ?>
										</td>
									</tr>
									<?php
								}
								?>							
							</tbody>
						</table>
					</div>
				</div>
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
	<?php } ?>