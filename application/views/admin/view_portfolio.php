<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>

	<section class="content-header">
		<div class="content-header-left">
			<h1>View Portfolio</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio/add" class="btn btn-primary btn-sm">Add New</a>
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
									<th>SL</th>
									<th>Photo</th>
									<th>Name</th>
									<th>Category</th>
									<th width="300">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=0;						
								foreach ($portfolio as $row) {
									$i++;
									?>
									<tr>
										<td style="width:50px;"><?php echo $i; ?></td>
										<td style="width:150px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>" style="width:150px;"></td>
										<td><?php echo $row['name']; ?></td>
										<td><?php echo $row['category_name']; ?></td>
										<td>
											<?php if ($this->session->userdata('role') == 'admin') { ?>
												<a class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Details</a>
												<a href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
												<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio/delete/<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
											<?php } elseif ($this->session->userdata('role') == 'staff') {?>
												<a class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Details</a>
												<a href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
											<?php } elseif ($this->session->userdata('role') == 'hrd') {?>
												<a class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Details</a>
											<?php } else { ?>
												<div class="forbiden">
													<i class="fa fa-minus-circle" aria-hidden="true"></i>
													<span>Akses Tidak tersedia</span>
													<i class="fa fa-minus-circle" aria-hidden="true"></i>
												</div>
											<?php } ?>
										</td>
									</tr>
									<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="myModalLabel">View Details</h4>
												</div>
												<div class="modal-body">
													<div class="rTable">
														<div class="rTableRow">
															<div class="rTableHead"><strong>Name</strong></div>
															<div class="rTableCell">
																<?php echo $row['name']; ?>
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Content</strong></div>
															<div class="rTableCell">
																<?php echo $row['content']; ?>
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Client Name</strong></div>
															<div class="rTableCell">
																<?php echo $row['client_name']; ?>
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Client Company</strong></div>
															<div class="rTableCell">
																<?php echo $row['client_company']; ?>
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Project Start Date</strong></div>
															<div class="rTableCell">
																<?php echo $row['start_date']; ?>
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Project End Date</strong></div>
															<div class="rTableCell">
																<?php echo $row['end_date']; ?>
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Website</strong></div>
															<div class="rTableCell">
																<?php echo $row['website']; ?>
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Cost</strong></div>
															<div class="rTableCell">
																<?php echo $row['cost']; ?>
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Client Comment</strong></div>
															<div class="rTableCell">
																<?php echo $row['client_comment']; ?>
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Category</strong></div>
															<div class="rTableCell">
																<?php echo $row['category_name']; ?>
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Featured Photo</strong></div>
															<div class="rTableCell">
																<img src="<?php echo base_url().'public/uploads/'.$row['photo']; ?>" alt="" style="width:120px;">
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Banner</strong></div>
															<div class="rTableCell">
																<img src="<?php echo base_url().'public/uploads/'.$row['banner']; ?>" alt="" style="width:120px;">
															</div>
														</div>
														<div class="rTableRow">
															<div class="rTableHead"><strong>Other Photos</strong></div>
															<div class="rTableCell">
																<?php
																$all_photos = $this->Model_portfolio->get_all_photos_by_category_id($row['id']);
																foreach ($all_photos as $row1) {
																	?>
																	<img src="<?php echo base_url().'public/uploads/portfolio_photos/'.$row1['photo']; ?>" alt="" style="width:120px;">
																	<?php
																}
																?>
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
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
	<div class="forbiden">
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
		<span>Akses Tidak tersedia</span>
		<i class="fa fa-minus-circle" aria-hidden="true"></i>
	</div>
	<?php }?>