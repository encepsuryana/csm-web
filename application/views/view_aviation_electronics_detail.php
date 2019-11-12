<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo $aviation_electronics['name']; ?></h1>
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
						<a href="<?php echo base_url(); ?>aviation-electronics-department"><span><?php echo AVIATION_ELECTRONICS_TITLE; ?></span></a>
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<a href="<?php echo base_url(); ?>aviation-electronics-department/post/<?php echo $aviation_electronics['slug_electronics']; ?>"><span><?php echo $aviation_electronics['name']; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>
	<div class="container single-service-area pt_30 pb_60 bg-news">
		<div class="row">
			<div class="col-lg-9 col-md-8" style="padding-left: 30px;">
				<div class="carousel slide" data-ride="carousel" id="quote-carousel">
					<?php
					$j=0;
					?>

					<div class="carousel-inner">

						<div class="item active" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $aviation_electronics['photo']; ?>)">
							<div class="lightbox-inner">
								<a href="<?php echo base_url(); ?>public/uploads/<?php echo $aviation_electronics['photo']; ?>" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>

						<?php						
						foreach ($aviation_electronics_photo as $row) {
							?>
							<div class="item" style="background-image: url(<?php echo base_url(); ?>public/uploads/aviation_electronics_photos/<?php echo $row['photo']; ?>)">
								<div class="lightbox-inner">
									<a href="<?php echo base_url(); ?>public/uploads/aviation_electronics_photos/<?php echo $row['photo']; ?>" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
							<?php
						}
						?>

					</div>

					<?php if($aviation_electronics_photo_total>=1): ?>
						<ul class="carousel-indicators single-carousel owl-carousel">

							<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive" src="<?php echo base_url(); ?>public/uploads/<?php echo $aviation_electronics['photo']; ?>" alt=""></li>

							<?php
							foreach ($aviation_electronics_photo as $row) {
								$j++;
								?>
								<li data-target="#quote-carousel" data-slide-to="<?php echo $j; ?>"><img class="img-responsive" src="<?php echo base_url(); ?>public/uploads/aviation_electronics_photos/<?php echo $row['photo']; ?>" alt=""></li>
								<?php
							}
							?>

						</ul>
					<?php endif; ?>
				</div>

				<div class="single-service-text recent-single-text pt_30 pb_20">
					<h4><?php echo DESCRIPTION; ?></h4>
					<p>
						<?php 
						if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
							
							if ($aviation_electronics['content_idn'] == '') {
								echo $aviation_electronics['content'];
							} else {
								echo $aviation_electronics['content_idn'];
							}

						} else {

							if ($aviation_electronics['content'] == '') {
								echo $aviation_electronics['content_idn'];
							} else {
								echo $aviation_electronics['content'];
							}
							
						}
						?>
					</p>
				</div>			
			</div>

			<div class="col-lg-3 col-md-4">
				<div class="sidebar">
					<div class="sidebar-item category">
						<h3><?php echo AVIATION_ELECTRONICS_TITLE; ?></h3>
						<ul>
							<?php
							foreach ($aviation_electronics_order_by_name as $row) {
								?>
								<li><a href="<?php echo base_url(); ?>aviation-electronics-department/post/<?php echo $row['slug_electronics']; ?>"><?php echo $row['name']; ?></a></li>
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