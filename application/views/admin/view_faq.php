<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>
	<section class="content-header">
		<div class="content-header-left">
			<h1>View FAQs</h1>
		</div>
		<div class="content-header-right">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/faq/add" class="btn btn-primary btn-sm">Add New</a>
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
									<th width="50">SL</th>
									<th>FAQ Title</th>
									<th>Show on home?</th>
									<th width="80">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=0;
								foreach ($faq as $row) {
									$i++;
									?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $row['faq_title']; ?></td>
										<td><?php echo $row['faq_show']; ?></td>
										<td>
											<a href="<?php echo base_url().$this->session->userdata('role'); ?>/faq/edit/<?php echo $row['faq_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
											<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd')){ ?>
												<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url().$this->session->userdata('role'); ?>/faq/delete/<?php echo $row['faq_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
											<?php } else { ?>
												Akses tidak tersedia
											<?php }?>
										</td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
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
							Are you sure want to delete this item?
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
			<?php }?>