<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo SITE_MAPS; ?></h1>
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
						<a href="<?php echo base_url(); ?>site-maps"><span><?php echo SITE_MAPS; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>
	<div class="container single-service-area pt_40 pb_60 common-text bg-news">
		<div class="row">
			<div class="col-md-12 col-sm-12 site-maps">
				<div class="col-md-3">
					<ul>
						<li><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>
						<li><a href="<?php echo base_url(); ?>about"><?php echo ABOUT; ?></li>
							<li><a href="<?php echo base_url(); ?>product"><?php echo PRODUCT; ?></a>
								<ul>
									<li><a href="<?php echo base_url(); ?>portfolio"><?php echo PORTFOLIO; ?></a></li>
									<ul>
										<?php
										foreach ($portfolio_category as $row) {
											?>
											<li>
												<a href="<?php echo base_url(); ?>portfolio"><?php echo $row['category_name']; ?></a>
											</li>
											<?php
										}
										?>
									</ul>
									<li><a href="<?php echo base_url(); ?>product"><?php echo PRODUCT; ?></a></li>
								</ul>
							</li>
						</ul>
						<ul>
							<li><a href="<?php echo base_url(); ?>facility"><?php echo FACILITY; ?></a></li>
							<ul>
								
								<?php
								foreach ($facility as $row) {
									?>
									<li>
										<a href="<?php echo base_url(); ?>facility/post/<?php echo $row['slug_facility']; ?>"><?php echo $row['name']; ?></a>
									</li>
									<?php
								}
								?>
							</ul>
						</ul>
					</div>
					<div class="col-md-4">
						<ul>
							<li><a href="<?php echo base_url(); ?>aeronautical-electronics-engineering"><?php echo CAPABILITIES; ?></a>
								<ul>
									<?php
									foreach ($service as $row) {
										?>
										<li>
											<a href="<?php echo base_url(); ?>capabilities/<?php echo $row['slug_service']; ?>"><?php echo $row['heading']; ?></a>
										</li>
										<?php
									}
									?>
									<li>
										<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering">AVIATION ELECTRONICS</a>
										<ul>
											<li>
												<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering/post/display-systems-multi-function-display-mfd-moving-map-display-etc.html">Display systems Multi-Function Display-MFD Moving Map Display etc</a>
											</li>
											<li>
												<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering/post/mission-computers.html">Mission computers</a>
											</li>
											<li>
												<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering/post/sensor-interface-units.html">Sensor interface units</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering">DEFENSE ELECTRONICS</a>
										<ul>
											<li>
												<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering/post/ruggedized-electronic-controllers.html">Ruggedized electronic controllers</a>
											</li>
											<li>
												<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering/post/harsh-environmental-power-drivers.html">Harsh environmental power drivers</a>
												
											</li>
										</ul>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering">INDUSTRIAL ELECTRONICS</a>
										<ul>
											<li>
												<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering/post/plc-controller-design-and-implementations.html">PLC Controller design and implementations</a>
											</li>
											<li>
												<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering/post/power-electronics-design-and-manufacturing.html">Power electronics design and manufacturing</a>
												
											</li>
											<li>
												<a href="<?php echo base_url(); ?>aeronautical-electronics-engineering/post/man-machine-interface.html">Man-Machine Interface</a>
												
											</li>
										</ul>
									</li>
								</ul>

							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul>
							
							<li>
								<a href="#page"><?php echo PAGE; ?></a>
								<ul>
									<li>
										<a href="<?php echo base_url(); ?>gallery"><?php echo GALLERY; ?></a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>news/page"><?php echo NEWS; ?></a>

									</li>
									<li>
										<a href="<?php echo base_url(); ?>download"><?php echo DOWNLOAD; ?></a>

										<ul>
											<li>
												<a href="<?php echo base_url();?>download/file-mechanic"><?php echo COMPANY_PROFILE_ENGINEERING; ?></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>download/file-electronic"><?php echo COMPANY_PROFILE_AVIATION_ELECTRONICS; ?></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>download/file-mechanic-electronic"><?php echo COMPANY_PROFILE_EN_DE; ?></a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>