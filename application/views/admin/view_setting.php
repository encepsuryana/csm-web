<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<?php if ($this->session->userdata('role') == 'admin') { ?>

	<section class="content-header">
		<div class="content-header-left">
			<h1>Settings</h1>
		</div>
	</section>

	<section class="content" style="min-height:auto;margin-bottom: -30px;">
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
			</div>
		</div>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-md-12">

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_logo" data-toggle="tab">Logo</a></li>
						<li><a href="#tab_favicon" data-toggle="tab">Favicon</a></li>
						<li><a href="#tab_general" data-toggle="tab">General Content</a></li>
						<li><a href="#tab_email" data-toggle="tab">Email Settings</a></li>
						<li><a href="#tab_sidebar_footer" data-toggle="tab">Sidebar & Footer</a></li>
						<li><a href="#tab_login_bg" data-toggle="tab">Login Background</a></li>
						<li><a href="#tab_banner" data-toggle="tab">Background & Tema</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_logo">							

							<h3 class="seo-info">Website Logo</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>								
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Foto Tersedia</label>
								<div class="col-sm-6" style="padding-top:6px;background: #f2f2f2;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" class="existing-photo" style="height:80px;">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Foto Baru</label>
								<div class="col-sm-6" style="padding-top:6px;">
									<input type="file" name="photo_logo">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_logo">Update Logo</button>
								</div>									
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Website Logo Art</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>								
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Foto Tersedia</label>
								<div class="col-sm-6" style="padding-top:6px;background: #f2f2f2;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo2']; ?>" class="existing-photo" style="height:80px;">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Foto Baru</label>
								<div class="col-sm-6" style="padding-top:6px;">
									<input type="file" name="photo_logo2">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_logo2">Update Logo Art</button>
								</div>									
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Admin Logo</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>								
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Foto Tersedia</label>
								<div class="col-sm-6" style="padding-top:6px;background: #f2f2f2;">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo_admin']; ?>" class="existing-photo" style="height:80px;">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Foto Baru</label>
								<div class="col-sm-6" style="padding-top:6px;">
									<input type="file" name="photo_logo_admin">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_admin_logo">Update Logo</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_favicon">
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Foto Tersedia</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" class="existing-photo" style="height:40px;">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Foto Baru</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<input type="file" name="photo_favicon">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_favicon">Update Favicon</button>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_login_bg">
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>		
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Foto Tersedia</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['login_bg']; ?>" class="existing-photo" style="width:500px;">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Foto Baru</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<input type="file" name="login_bg">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_login_bg">Update Foto</button>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_general">
							<?php echo form_open(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Nama Perusahaan </label>
									<div class="col-sm-6">
										<input class="form-control" type="text" name="general_companyname" value="<?php echo $setting['general_companyname']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Footer - Copyright </label>
									<div class="col-sm-6">
										<input class="form-control" type="text" name="footer_copyright" value="<?php echo $setting['footer_copyright']; ?>">
									</div>
								</div>								
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Footer - Alamat </label>
									<div class="col-sm-6">
										<textarea class="form-control" name="footer_address" style="height:70px;"><?php echo $setting['footer_address']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Footer - No. Telp </label>
									<div class="col-sm-6">
										<textarea class="form-control" name="footer_phone" style="height:70px;"><?php echo $setting['footer_phone']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Top Bar - Jam Kerja </label>
									<div class="col-sm-6">
										<textarea class="form-control" name="footer_working_hour" style="height:70px;"><?php echo $setting['footer_working_hour']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Top Bar - Email </label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="top_bar_email" value="<?php echo $setting['top_bar_email']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Top Bar - No. Telp </label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="top_bar_phone" value="<?php echo $setting['top_bar_phone']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Kontak Map iFrame </label>
									<div class="col-sm-6">
										<textarea class="form-control" name="contact_map_iframe" style="height:200px;"><?php echo $setting['contact_map_iframe']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_general">Update</button>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Counter Background Photo</h3>
							<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>							
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">Foto Sebelumnya </label>
								<div class="col-sm-9">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['counter_bg']; ?>" alt="" style="width:300px;">
								</div>
							</div>		
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">Ubah Foto </label>
								<div class="col-sm-9" style="padding-top:5px;">
									<input type="file" name="counter_bg">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form_counter_bg">Update</button>
								</div>
							</div>								
							<?php echo form_close(); ?>

							<h3 class="seo-info">Data Setting</h3>
							<?php echo form_open(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="col-sm-6 control-label">Counter1 Text <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="counter1_text" value="<?php echo $setting['counter1_text']; ?>">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Counter1 Value <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="counter1_value" value="<?php echo $setting['counter1_value']; ?>">
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="col-sm-6 control-label">Counter2 Text <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="counter2_text" value="<?php echo $setting['counter2_text']; ?>">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Counter2 Value <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="counter2_value" value="<?php echo $setting['counter2_value']; ?>">
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="col-sm-6 control-label">Counter3 Text <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="counter3_text" value="<?php echo $setting['counter3_text']; ?>">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Counter3 Value <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="counter3_value" value="<?php echo $setting['counter3_value']; ?>">
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="col-sm-6 control-label">Counter4 Text <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="counter4_text" value="<?php echo $setting['counter4_text']; ?>">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Counter4 Value <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="counter4_value" value="<?php echo $setting['counter4_value']; ?>">
										</div>
									</div>
								</div>
							</div>                                  

							<div class="form-group">
								<label for="" class="col-sm-3 control-label"></label>
								<div class="col-sm-5">
									<button type="submit" class="btn btn-success pull-left" name="form_counter">Update</button>
								</div>
							</div>                                
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_email">
							<?php echo form_open(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Email Address <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="receive_email" value="<?php echo $setting['receive_email']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Password <span>*</span></label>
									<div class="col-sm-4">
										<input type="password" class="form-control" name="receive_password" value="<?php echo $setting['receive_password']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Protocol <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="protocol" value="<?php echo $setting['protocol']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">SMTP HOST <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="smtp_host" value="<?php echo $setting['smtp_host']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">SMTP PORT <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="smtp_port" value="<?php echo $setting['smtp_port']; ?>">
									</div>
								</div>
								<h3 class="seo-info">Template Email</h3>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Logo Perusahaan <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="logo_image" value="<?php echo $setting['logo_image']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Logo Alt <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="logo_alt" value="<?php echo $setting['logo_alt']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Background Header <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control jscolor" name="background" value="<?php echo $setting['background']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Warna Text <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control jscolor" name="text_color" value="<?php echo $setting['text_color']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Nama Perusahaan <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="company_name" value="<?php echo $setting['company_name']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Alamat Perusahaan <span>*</span></label>
									<div class="col-sm-4">
										<textarea type="text" class="form-control" name="company_address"><?php echo $setting['company_address']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">No. Telp <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="company_telp" value="<?php echo $setting['company_telp']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Website Perusahaan <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="company_website" value="<?php echo $setting['company_website']; ?>">
									</div>
								</div>
								<h3 class="seo-info">Template Reset Password</h3>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">Reset Password Email Subject <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="reset_password_email_subject" value="<?php echo $setting['reset_password_email_subject']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_email">Update</button>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_sidebar_footer">
							<?php echo form_open(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">How many recent posts? <span>*</span></label>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="total_recent_post" value="<?php echo $setting['total_recent_post']; ?>">
									</div>
								</div>		
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">How many popular posts? <span>*</span></label>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="total_popular_post" value="<?php echo $setting['total_popular_post']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label">How many Product posts? <span>*</span></label>
									<div class="col-sm-2">
										<input type="text" class="form-control" name="total_product_post" value="<?php echo $setting['total_product_post']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-4 control-label"></label>
									<div class="col-sm-5">
										<button type="submit" class="btn btn-success pull-left" name="form_sidebar_footer">Update</button>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="tab-pane" id="tab_banner">
							<table class="table table-bordered">
								<tr>
									<?php echo form_open_multipart(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>
									<h3 class="seo-info">Bakground tersedia</h3>	

									<td style="width:10%">
										<p>
											<img src="<?php echo base_url().'public/uploads/'.$setting['banner']; ?>" alt="" style="width: 50%;height:auto;">  
										</p>                                        
									</td>
									<td style="width:10%">
										<h4>Ubah Background</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-success" value="Update Foto" style="margin-top:10px;" name="form_banner">
									</td>
									<?php echo form_close(); ?>
								</tr>
							</table>
							<h3 class="seo-info">Tema</h3>	
							<?php echo form_open(base_url().$this->session->userdata('role').'/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Theme Color 1 </label>
									<div class="col-sm-2">
										<input type="text" name="theme_color_1" class="form-control jscolor" value="<?php echo $setting['theme_color_1']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Theme Color 2 </label>
									<div class="col-sm-2">
										<input type="text" name="theme_color_2" class="form-control jscolor" value="<?php echo $setting['theme_color_2']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_color">Update</button>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
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