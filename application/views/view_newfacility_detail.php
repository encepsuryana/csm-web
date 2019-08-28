<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $newfacility['banner']; ?>)">
	<div class="bannder-table">
		<div class="banner-text">
			<h1><?php echo $newfacility['name']; ?></h1>
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

						<div class="item active" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $newfacility['photo']; ?>)">
							<div class="lightbox-inner">
								<a href="<?php echo base_url(); ?>public/uploads/<?php echo $newfacility['photo']; ?>" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>

						<?php						
						foreach ($newfacility_photo as $row) {
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

					<?php if($newfacility_photo_total>=1): ?>
						<ul class="carousel-indicators single-carousel owl-carousel">

							<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive" src="<?php echo base_url(); ?>public/uploads/<?php echo $newfacility['photo']; ?>" alt=""></li>

							<?php
							foreach ($newfacility_photo as $row) {
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
						<?php echo $newfacility['content']; ?>
					</p>
				</div>			
			</div>

			<div class="col-lg-3 col-md-4">
				<div class="sidebar">
					<div class="sidebar-item category">
						<h3><?php echo PROJECTS; ?></h3>
						<ul>
							<?php
							foreach ($newfacility_order_by_name as $row) {
								?>
								<li><a href="<?php echo base_url(); ?>newfacility/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
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