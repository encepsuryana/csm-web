<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}

if ($this->session->userdata('role') == 'admin') { ?>

	<section class="content-header">
		<div class="content-header-left">
			<h1>Edit Language Data</h1>
		</div>
	</section>

	<?php
	$i=0;
	$arr1 = array();
	$arr2 = array();
	$arr3 = array();				
	$arr4 = array();				
	foreach ($language as $row) {
		$arr1[$i] = $row['id'];
		$arr2[$i] = $row['name'];
		$arr3[$i] = $row['eng'];
		$arr4[$i] = $row['idn'];
		$i++;
	}
	?>
	<div class="col-md-12" style="padding-top: 10px;">
		<div class="col-md-12 warning">
			<i class="fa fa-info" aria-hidden="true"> <span>Untuk merubah bahasa, gunakan fitur dibawah ini untuk menyesuaikan bahasa yang digunakan, belum tersedia untuk menambah bahasa.</span></i>
		</div>
	</div>
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

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_1" data-toggle="tab">English</a></li>
						<li><a href="#tab_2" data-toggle="tab">Indonesia</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_1">
							<?php echo form_open(base_url().$this->session->userdata('role').'/language',array('class' => 'form-horizontal')); ?>
							<div class="box box-info" style="padding-top: 0;">
								<div class="box-body">
									<?php for($i=0;$i<count($arr1);$i++): ?>
										<div class="form-group">
											<label for="" class="col-sm-4 control-label"><?php echo $arr2[$i]; ?></label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="new_arr[]" value="<?php echo $arr3[$i]; ?>">
											</div>
										</div>
										<input type="hidden" name="new_arr1[]" value="<?php echo $arr1[$i]; ?>">
									<?php endfor; ?>

									<div class="form-group">
										<label for="" class="col-sm-4 control-label"></label>
										<div class="col-sm-7">
											<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_2">
							<?php echo form_open(base_url().$this->session->userdata('role').'/language',array('class' => 'form-horizontal')); ?>

							<div class="box box-info" style="padding-top: 0;">
								<div class="box-body">
									<?php for($i=0;$i<count($arr1);$i++): ?>
										<div class="form-group">
											<label for="" class="col-sm-4 control-label"><?php echo $arr2[$i]; ?></label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="new_arr[]" value="<?php echo $arr4[$i]; ?>">
											</div>
										</div>
										<input type="hidden" name="new_arr1[]" value="<?php echo $arr1[$i]; ?>">
									<?php endfor; ?>

									<div class="form-group">
										<label for="" class="col-sm-4 control-label"></label>
										<div class="col-sm-7">
											<button type="submit" class="btn btn-success pull-left" name="form2">Update</button>
										</div>
									</div>
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
	<?php }?>