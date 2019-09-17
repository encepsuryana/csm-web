<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="col-md-4">
			</div>
			<div class="col-md-8" style="padding: 0;">
				<div class="banner-text">
					<h1><?php echo ELECTRONICS_DIVISION; ?></h1>
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
						<a href="<?php echo base_url(); ?>electronics-division"><span><?php echo ELECTRONICS_DIVISION; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>
	<div class="container bg-about">
		<div class="row">
			<?php if($electronics_division_desc['electronics_division_desc_photo']!=""): ?>
				<div class="col-md-12">
					<div class="image-electronic">
						<img src="<?php echo base_url(); ?>public/uploads/<?php echo $electronics_division_desc['electronics_division_desc_photo']; ?>" alt="">
					</div>	
					<div class="electronic-desc">
						<h4>
							<i class="fa fa-microchip" aria-hidden="true"></i>
							<?php echo $electronics_division_desc['electronics_division_desc_heading']; ?>
						</h4>
						<p>
							<?php echo $electronics_division_desc['electronics_division_desc_content']; ?>
						</p>
					</div>
				</div>
			<?php endif; ?>
			<div class="col-md-12">
				<div class="recent-menu" style="text-align: right;">
					<ul>
						<li data-filter="all"><?php echo ALL; ?></li>
						<?php
						foreach ($electronics_division_category as $row) {
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
				foreach ($electronics_division as $row) {
					?>
					<div class="col-md-4 col-sm-6 col-xs-12 filtr-item clear-three" data-category="<?php echo $row['category_id']; ?>" data-sort="value">
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
									<h4><?php echo $row['name']; ?></h4>
									<?php echo $row['short_content']; ?>
									<div class="services-link">
										<a href="<?php echo base_url(); ?>electronics-division/post/<?php echo $row['slug_electronics']; ?>"><?php echo READ_MORE; ?></a>
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