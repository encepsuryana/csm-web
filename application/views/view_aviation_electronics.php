<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo AVIATION_ELECTRONICS_TITLE; ?></h1>
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
						<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering"><span><?php echo AVIATION_ELECTRONICS_TITLE; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>
	<div class="container bg-about">
		<div class="row">
			<?php if($aviation_electronics_desc['aviation_electronics_desc_photo']!=""): ?>
				<div class="col-md-12">
					<div class="image-electronic">
						<img src="<?php echo base_url(); ?>public/uploads/<?php echo $aviation_electronics_desc['aviation_electronics_desc_photo']; ?>" alt="">
					</div>	
					<div class="electronic-desc">
						<h4>
							<i class="fa fa-microchip" aria-hidden="true"></i>
							<?php 
							if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {

								if ($aviation_electronics_desc['ed_desc_heading_idn'] == '') {
									echo $aviation_electronics_desc['aviation_electronics_desc_heading'];
								} else {
									echo $aviation_electronics_desc['ed_desc_heading_idn']; 
								}

							} else {

								if ($aviation_electronics_desc['aviation_electronics_desc_heading'] == '') {
									echo $aviation_electronics_desc['ed_desc_heading_idn'];
								} else {
									echo $aviation_electronics_desc['aviation_electronics_desc_heading']; 
								}

							}
							?>
						</h4>
						<p>
							<?php 
							if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {

								if ($aviation_electronics_desc['ed_desc_content_idn'] == '') {
									echo $aviation_electronics_desc['aviation_electronics_desc_content'];
								} else {
									echo $aviation_electronics_desc['ed_desc_content_idn']; 
								}

							} else {

								if ($aviation_electronics_desc['aviation_electronics_desc_content'] == '') {
									echo $aviation_electronics_desc['ed_desc_content_idn'];
								} else {
									echo $aviation_electronics_desc['aviation_electronics_desc_content']; 
								}

							}
							?>
						</p>
					</div>
				</div>
			<?php endif; ?>
			<div id="content-list" class="col-md-12">
				<div class="recent-menu" style="text-align: right;">
					<ul>
						<li data-filter="all"><?php echo ALL; ?></li>
						<?php
						foreach ($aviation_electronics_category as $row) {
							?>
							<li data-filter="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></li>
							<?php
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container recent-works">
		<div class="row">

			<div class="filtr-container">			
				<?php
				foreach ($aviation_electronics as $row) {
					?>
					<div class="col-md-4 col-sm-6 col-xs-12 filtr-item clear-three bg-about" data-category="<?php echo $row['category_id']; ?>" data-sort="value">
						<div class="recent-item">
							<div class="lightbox-item">
								<div class="recent-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)">
									<div class="lightbox-text">
										<div class="lightbox-table">
											<div class="lightbox-icon">
												<a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="recent-text">
									<h5><?php echo $row['name']; ?></h5>
									<p>
										<?php 
										if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
											
											if ($row['short_content_idn'] == '') {
												echo $row['short_content'];
											} else {
												echo $row['short_content_idn'];
											}

										} else {
											
											if ($row['short_content'] == '') {
												echo $row['short_content_idn'];
											} else {
												echo $row['short_content'];
											}
											
										}
										?>
									</p>
									<div class="services-link">
										<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering/post/<?php echo $row['slug_electronics']; ?>"><?php echo READ_MORE; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>