<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd') or ($this->session->userdata('role') == 'staff')) { ?>

	<section class="content-header">
		<div class="content-header-left">
			<h1>View News</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/news/add" class="btn btn-primary btn-sm">Add New</a>
		</div>
	</section>


	<section class="content">

		<div class="row">
			<div class="col-md-12">
				<div class="box box-info  b-box">

					<div class="box-body table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Photo</th>
									<th>Banner</th>
									<th>Title</th>
									<th>Category</th>
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
										<td>
											<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['news_title']; ?>" style="width:100px;">
										</td>
										<td>
											<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['banner']; ?>" alt="<?php echo $row['news_title']; ?>" style="width:180px;">
										</td>
										<td><?php echo $row['news_title']; ?></td>
										<td>
											<?php echo $row['category_name']; ?>
										</td>
										<td>										
											<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) { ?>
												<a href="<?php echo base_url().$this->session->userdata('role'); ?>/news/edit/<?php echo $row['news_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
												<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url().$this->session->userdata('role'); ?>/news/delete/<?php echo $row['news_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
											<?php } elseif ($this->session->userdata('role') == 'hrd') { ?>
												<a href="<?php echo base_url().$this->session->userdata('role'); ?>/news/edit/<?php echo $row['news_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
											<?php } else { ?>
												Akses tidak tersedia
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
					<h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
				</div>
				<div class="modal-body">
					<p>Are you sure want to delete this item?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<a class="btn btn-danger btn-ok">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } else { ?>
	Akses tidak tersedia
	<?php } ?>