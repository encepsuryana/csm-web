<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_portfolio']; ?>)">
	<div class="bannder-table">
		<div class="banner-text">
			<h1><?php echo $page['portfolio_heading']; ?></h1>
		</div>
	</div>

	<div class="container recent-works">
		<div class="row">
			<div class="recent-menu">
				<ul>
					<li data-filter="all"><?php echo ALL; ?></li>
					<?php
					foreach ($portfolio_category as $row) {
						?>
						<li data-filter="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></li>
						<?php
					}
					?>
				</ul>
			</div>
			<div class="filtr-container">			
				<?php
				foreach ($portfolio as $row) {
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
									<h4><?php echo $row['name']; ?></h4>
									<?php echo $row['short_content']; ?>
									<div class="services-link">
										<a href="<?php echo base_url(); ?>portfolio/detail/<?php echo $row['id'].'.html'; ?>"><?php echo READ_MORE; ?></a>
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