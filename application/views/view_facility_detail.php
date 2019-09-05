<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table">
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="banner-text">
				</div>
			</div>
			<div class="col-md-6" style="padding-right: 0;">
				<div class="banner-text">
					<h1><?php echo $facility['name']; ?></h1>
				</div>
			</div>
		</div>
	</div>

	<div class="container single-service-area pt_30 pb_60 bg-news">
		<div class="row">
			<div class="col-lg-9 col-md-8">
				<div class="carousel slide" data-ride="carousel" id="quote-carousel">
					<?php
					$j=0;
					?>

					<div class="carousel-inner">

						<div class="item active" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $facility['photo']; ?>)">
							<div class="lightbox-inner">
								<a href="<?php echo base_url(); ?>public/uploads/<?php echo $facility['photo']; ?>" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>

						<?php						
						foreach ($facility_photo as $row) {
							?>
							<div class="item" style="background-image: url(<?php echo base_url(); ?>public/uploads/facility_photos/<?php echo $row['photo']; ?>)">
								<div class="lightbox-inner">
									<a href="<?php echo base_url(); ?>public/uploads/facility_photos/<?php echo $row['photo']; ?>" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
							<?php
						}
						?>

					</div>

					<?php if($facility_photo_total>=1): ?>
						<ul class="carousel-indicators single-carousel owl-carousel">

							<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive" src="<?php echo base_url(); ?>public/uploads/<?php echo $facility['photo']; ?>" alt=""></li>

							<?php
							foreach ($facility_photo as $row) {
								$j++;
								?>
								<li data-target="#quote-carousel" data-slide-to="<?php echo $j; ?>"><img class="img-responsive" src="<?php echo base_url(); ?>public/uploads/facility_photos/<?php echo $row['photo']; ?>" alt=""></li>
								<?php
							}
							?>

						</ul>
					<?php endif; ?>
				</div>

				<div class="single-service-text recent-single-text pt_30">
					<h4><?php echo DESCRIPTION; ?></h4>
					<p>
						<?php echo $facility['content']; ?>
					</p>
				</div>			
			</div>

			<div class="col-lg-3 col-md-4">
				<div class="sidebar">
					<div class="sidebar-item category">
						<h3><?php echo PROJECTS; ?></h3>
						<ul>
							<?php
							foreach ($facility_order_by_name as $row) {
								?>
								<li><a href="<?php echo base_url(); ?>facility/view/<?php echo $row['slug_facility']; ?>"><?php echo $row['name']; ?></a></li>
								<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>