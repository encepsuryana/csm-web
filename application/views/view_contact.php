<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_contact']; ?>)">
	<div class="bannder-table">
		<div class="banner-text">
			<h1><?php echo $page['contact_heading']; ?></h1>
		</div>
	</div>

	<div class="contact-area pt-30 pb-60">
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
							<label for=""><?php echo MESSAGE; ?></label>
							<?php
							$data = array(
								'name'  => 'visitor_comment',
								'class' => 'form-control'
							);
							echo form_textarea($data);
							?>
						</div>
						<?php
						$data = array(
							'name'    => 'form_contact',
							'class'   => 'btn btn-success',
							'type'    => 'submit',
							'content' => SEND_MESSAGE
						);
						echo form_button($data);
						?>
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