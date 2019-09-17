<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="col-md-4">
			</div>
			<div class="col-md-8" style="padding: 0;">
				<div class="banner-text">
					<h1><?php echo CONTACT ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container link-post">
		<div class="blog-author">
			<ul>
				<div class="col-sm-8 blog-link-content">
					<li class="gro" style="padding-left: 0; padding-top: 5px;">
						<a href="<?php echo base_url(); ?>"><span><?php echo HOME; ?></span></a>
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<a href="<?php echo base_url(); ?>contact"><span><?php echo CONTACT; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>
	<div class="contact-area pt-20 pb-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4><?php echo CONTACT_US_PAGE_FORM_HEADING_TEXT; ?></h4>
					<div class="contact-form">
						<?php
						if(!empty($error))
						{
							echo '<div class="error">';
							echo $error;
							echo '</div>';
						} 
						if(!empty($success))
						{
							echo '<div class="success">';
							echo $success;
							echo '</div>';
						}
						?>
						<?php echo form_open(base_url().'contact'); ?>
						<div class="form-group">
							<label for=""><?php echo NAME; ?></label>
							<?php
							$data = array(
								'type'         => 'text',
								'name'         => 'visitor_name',
								'class'        => 'form-control',
								'autocomplete' => 'off'
							);
							echo form_input($data);
							?>
						</div>
						<div class="form-group">
							<label for=""><?php echo EMAIL_ADDRESS; ?></label>
							<?php
							$data = array(
								'type'         => 'email',
								'name'         => 'visitor_email',
								'class'        => 'form-control',
								'autocomplete' => 'off'
							);
							echo form_input($data);
							?>
						</div>
						<div class="form-group">
							<label for=""><?php echo PHONE; ?></label>
							<?php
							$data = array(
								'type'         => 'text',
								'name'         => 'visitor_phone',
								'class'        => 'form-control',
								'autocomplete' => 'off'
							);
							echo form_input($data);
							?>
						</div>
						<div class="form-group">
							<label for=""><?php echo INSTITUTE; ?></label>
							<?php
							$data = array(
								'type'         => 'text',
								'name'         => 'visitor_company',
								'class'        => 'form-control',
								'autocomplete' => 'off'
							);
							echo form_input($data);
							?>
						</div>
						<div class="form-group">
							<label for=""><?php echo MESSAGE; ?></label>
							<?php
							$data = array(
								'name'  => 'visitor_comment',
								'class' => 'form-control'
							);
							echo form_textarea($data);
							?>
						</div>
						<div class="form-group">
							<div class="col-md-8 captcha_box">
								<?php echo $widget;?>
								<?php echo $script;?>
							</div>
							<div class="col-md-4">
								<?php 
								$data = array(
									'name'    => 'form_contact',
									'class'   => 'btn btn-success',
									'type'    => 'submit',
									'content' => SEND_MESSAGE
								);
								echo form_button($data);
								?>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>						
				</div>
				<div class="col-md-6">
					<h4><?php echo FIND_US_ON_MAP; ?></h4>
					<div class="map-area">
						<?php echo $setting['contact_map_iframe']; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>