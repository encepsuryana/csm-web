<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>

	<section class="content-header">
		<div class="content-header-left">
			<h1>Edit Product</h1>
		</div>
		<div class="content-header-right">
			<a href="product.php" class="btn btn-primary btn-sm">View All</a>
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

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/product/edit/'.$product['product_id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info  b-box">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Product Caption <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="product_caption" value="<?php echo $product['product_caption']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Product Style <span>*</span></label>
							<div class="col-sm-4">
								<input id="style" type="text" class="form-control" name="product_style" value="<?php echo $product['product_style']; ?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"><span></span></label>
							<div class="col-sm-4" style="text-align: center;">
								<div class="style-select" > 
									<i class="fa fa-info-circle" aria-hidden="true"></i>
									<span>Select Style: </span>
								</div>
								<input id="add" type="button" onclick='ik(this.value);' value='col-sm-6 col-xs-6 box' style="padding: 40px 50px;">
								<input id="add" type="button" onclick='ik(this.value);' value='col-sm-3 col-xs-6 box' style="padding: 40px 5px;">
							</div>
							<script type="text/javascript">
								function ik(val){
									document.getElementById('style').value = val;  
								}
							</script>
						</div>



						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-6" style="padding-top:6px;">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $product['product_name']; ?>" class="existing-photo" style="width:300px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Upload New Photo <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<input type="file" name="product"> (Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Product Description <span>*</span></label>
							<div class="col-sm-4">
								<textarea type="text" class="form-control" name="product_desc" style="height: 100px;"><?php echo $product['product_desc']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Show on home? <span>*</span></label>
							<div class="col-sm-2" style="padding-top:6px;">
								<select name="product_show_home" class="form-control select2">
									<option value="Yes" <?php if($product['product_show_home']=='Yes') {echo 'selected';} ?>>Yes</option>
									<option value="No" <?php if($product['product_show_home']=='No') {echo 'selected';} ?>>No</option>
								</select>
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