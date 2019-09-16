<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="col-md-4">
			</div>
			<div class="col-md-8" style="padding: 0;">
				<div class="banner-text">
					<h1><?php echo $res['heading']; ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container link-post">
		<div class="blog-author">
			<ul>
				<div class="col-sm-8 blog-link-content">
					<li class="gro" style="padding-left: 0; padding-top: 5px;">
						<a href="<?php echo base_url(); ?>service"><span><?php echo SERVICES; ?></span></a>
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<a href="<?php echo base_url(); ?>service/post/<?php echo $res['slug_service']; ?>"><span><?php echo $res['heading']; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>
	<div class="container single-service-area pt_20 pb_60 bg-news">
		<div class="row">
			<div class="col-lg-9 col-md-8">

				<div class="service-main-photo">
					<img src="<?php echo base_url(); ?>public/uploads/<?php echo $res['photo']; ?>" alt="service photo">
				</div>

				<div class="single-service-text recent-single-text pt_30">
					<p>
						<?php echo $res['content']; ?>
					</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-4">
				<div class="sidebar">
					<div class="sidebar-item category">
						<h3><?php echo SERVICES; ?></h3>
						<ul>
							<?php
							foreach ($service_by_heading as $row) {
								?>
								<li><a href="<?php echo base_url(); ?>service/post/<?php echo $row['slug_service']; ?>"><?php echo $row['heading']; ?></a></li>
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
