<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd') or ($this->session->userdata('role') == 'staff')) { ?>

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

				<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/news/edit/'.$news['news_id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info  b-box">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">News Title <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="news_title" value="<?php echo $news['news_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Style News <span>*</span></label>
							<div class="col-sm-6">
								<input id="style" readonly="readonly" type="text" class="form-control" name="slug" value="<?php echo $news['slug']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"><span></span></label>
							<div class="col-sm-4" style="text-align: center;">
								<div class="style-select" > 
									<i class="fa fa-info-circle" aria-hidden="true"></i>
									<span>Select Style: </span>
								</div>
								<input id="add" type="button" onclick='ik(this.value);' value='col-page col-sm-8 col-md-6' style="padding: 40px 30px;">
								<input id="add" type="button" onclick='ik(this.value);' value='col-page col-sm-4 col-md-3' style="padding: 40px 5px;">
							</div>
							<script type="text/javascript">
								function ik(val){
									document.getElementById('style').value = val;  
								}
							</script>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">News Short Content <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="news_short_content" style="height:100px;"><?php echo $news['news_short_content']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">News Content <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="news_content" id="editor1"><?php echo $news['news_content']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">News Publish Date <span>*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="news_date" id="datepicker" value="<?php echo $news['news_date']; ?>">(Format: yy-mm-dd)
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Categories <span>*</span></label>
							<div class="col-sm-3">
								<select class="form-control select2" name="category_id">
									<?php
									$i=0;
									foreach ($all_category as $row) {
										?>
										<option value="<?php echo $row['category_id']; ?>" <?php if($row['category_id']==$news['category_id']){echo 'selected';} ?>><?php echo $row['category_name']; ?></option>
										<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Comment <span>*</span></label>
							<div class="col-sm-3">
								<select class="form-control select2" name="comment">
									<option value="On" <?php if($news['comment'] == 'On') {echo 'selected';} ?>>On</option>
									<option value="Off" <?php if($news['comment'] == 'Off') {echo 'selected';} ?>>Off</option>
								</select>
							</div>
						</div>
						<h3 class="seo-info">Photo and Banner</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Featured Photo</label>
							<div class="col-sm-6" style="padding-top:6px;">
								<?php
								if($news['photo'] == '') {
									echo 'No photo found';
								} else {
									?><img src="<?php echo base_url(); ?>public/uploads/<?php echo $news['photo']; ?>" alt="<?php echo $news['news_title']; ?>" class="existing-photo" style="width:140px;"><?php
								}
								?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Change Featured Photo</label>
							<div class="col-sm-6" style="padding-top:6px;">
								<input type="file" name="photo">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Banner</label>
							<div class="col-sm-6" style="padding-top:6px;">
								<?php
								if($news['banner'] == '') {
									echo 'No photo found';
								} else {
									?><img src="<?php echo base_url(); ?>public/uploads/<?php echo $news['banner']; ?>" alt="<?php echo $news['news_title']; ?>" class="existing-photo" style="width:300px;"><?php
								}
								?>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Change Banner</label>
							<div class="col-sm-6" style="padding-top:6px;">
								<input type="file" name="banner">
							</div>
						</div>
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Title </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title" value="<?php echo $news['meta_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keywords </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_keyword" value="<?php echo $news['meta_keyword']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:200px;"><?php echo $news['meta_description']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">User </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="user_update" value="<?php echo $news['user_update']; ?>" disabled>
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
	Akses tidak tersedia
	<?php } ?>