<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if ($this->session->userdata('role') == 'admin') { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>Content Home</h1>
		</div>
		<!--
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/content-home/add" class="btn btn-primary btn-sm">Add New</a>
		</div>
		-->
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
								<th>Img Background</th>
								<th>Icon</th>
								<th>Title</th>
								<th>Link</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							foreach ($content_home as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td style="width:150px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['heading']; ?>" style="width:100px;background:#ddd;padding:5px;"></td>
									<td style="width:250px;"><?php echo $row['heading']; ?></td>
									<td><?php echo $row['content']; ?></td>
									<td><?php echo $row['link']; ?></td>
									<td>
										<?php if ( $this->session->userdata('role') == 'admin' ){ ?>
											<a href="<?php echo base_url().$this->session->userdata('role'); ?>/content-home/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
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

<?php } else {?>
	<div class="forbiden">
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
		<span>Akses Tidak tersedia</span>
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
	</div>
	<?php }?>