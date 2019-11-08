<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo ABOUT_US; ?></h1>
			</div>
		</div>
	</div>
	<div class="container link-post">
		<div class="blog-author">
			<ul>
				<div class="col-sm-12 menu-link-content">
					<li class="gro" style="padding-right: 0; padding-top: 5px;">
						<a href="<?php echo base_url(); ?>"><span><?php echo HOME; ?></span></a>
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<a href="<?php echo base_url(); ?>portfolio"><span><?php echo PROFILE; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>

	<div class="container pt_15 bg-about">
		<div class="row">
			<?php if($page['about_photo']!=""): ?>
				<div class="col-md-12">
					<img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['about_photo']; ?>" alt=""><br>
				</div>
			<?php endif; ?>

			<div class="col-md-12 pt_10 pb_20">
				<h3><?php echo ABOUT_COMPANY; ?></h3>
				<div class="space-text pt_5">
					<?php 
					if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
						if ($page['about_content_idn'] == '') {
							echo $page['about_content'];
						} else {
							echo $page['about_content_idn'];
						}
					} else {
						if ($page['about_content'] == '') {
							echo $page['about_content_idn'];
						} else {
							echo $page['about_content'];
						}
					}
					?>
				</div>
			</div>
			<div class="container">
				<div class="col-sm-2 about-fade" style="padding-left: 0;">
					<nav class="nav-sidebar">
						<ul class="nav tabs">
							<li class="active"><a href="#profile" data-toggle="tab"><?php echo PROFILE; ?></a></li>
							<li class=""><a href="#structure" data-toggle="tab"><?php echo STRUCTURE; ?></a></li>
							<li class=""><a href="#vision-mission" data-toggle="tab"><?php echo VISION_MISION; ?></a></li>    
							<li class=""><a href="#culture" data-toggle="tab"><?php echo CULTURE; ?></a></li>    
							<li class=""><a href="#commitment" data-toggle="tab"><?php echo COMMITMENT; ?></a></li>    
						</ul>
					</nav>
					<div class="add"></div>
				</div>
				<!-- tab content -->
				<div class="tab-content">
					<div class="tab-pane active text-style" id="profile">
						<h2><?php echo PROFILE_IDENTITY; ?></h2>
						<div class="col-md-10">
							<p>
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
									if ($page['profile_content_idn'] == '') {
										echo $page['profile_content'];
									} else {
										echo $page['profile_content_idn'];
									}
								} else {
									if ($page['profile_content'] == '') {
										echo $page['profile_content_idn'];
									} else {
										echo $page['profile_content'];
									}
								}
								?>
							</p>
						</div>
					</div>
					<div class="tab-pane " id="structure">
						<h2><?php echo STRUCTURE_ORGANIZATION; ?></h2>
						<div class="col-md-10">
							<img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['structure_photo']; ?>">
						</div>
					</div>
					<div class="tab-pane" id="vision-mission">
						<!-- Vision & Mision Area-->
						<h2><?php echo VISION_AND_MISSION ?></h2>

						<div class="col-md-5 col-sm-5">
							<div class="about-mission">
								<h3><?php echo VISION_HEADING; ?></h3>
								<p>
									<?php 
									if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
										if ($page['vision_content_idn'] == '') {
											echo $page['vision_content'];
										} else {
											echo $page['vision_content_idn'];
										}
									} else {
										if ($page['vision_content'] == '') {
											echo $page['vision_content_idn'];
										} else {
											echo $page['vision_content'];
										}
									}
									?>
								</p>
							</div>
						</div>
						<div class="col-md-5 col-sm-5">
							<div class="about-mission">
								<h3><?php echo MISSION_HEADING; ?></h3>
								<p>
									<?php 
									if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
										if ($page['mission_content_idn'] == '') {
											echo $page['mission_content'];
										} else {
											echo $page['mission_content_idn'];
										}
									} else {
										if ($page['mission_content'] == '') {
											echo $page['mission_content_idn'];
										} else {
											echo $page['mission_content'];
										}
									}
									?>
								</p>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="culture">
						<h2><?php echo CULTURE; ?></h2>
						<div class="col-md-10">
							<p>
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
									if ($page['culture_content_idn'] == '') {
										echo $page['culture_content'];
									} else {
										echo $page['culture_content_idn'];
									}
								} else {
									if ($page['culture_content'] == '') {
										echo $page['culture_content_idn'];
									} else {
										echo $page['culture_content'];
									}
								}
								?>
							</p>
						</div>
					</div>
					<div class="tab-pane" id="commitment">
						<h2><?php echo COMMITMENT; ?></h2>
						<div class="col-md-10">
							<p>
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
									if ($page['quality_content_idn'] == '') {
										echo $page['quality_content'];
									} else {
										echo $page['quality_content_idn'];
									}
								} else {
									if ($page['quality_content'] == '') {
										echo $page['quality_content_idn'];
									} else {
										echo $page['quality_content'];
									}
								}
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>