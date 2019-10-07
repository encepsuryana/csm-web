<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">

	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo SERVICE; ?></h1>
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
						<a href="<?php echo base_url(); ?>service"><span><?php echo SERVICE; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>
	<div class="container services-area pt_20 pb_60">
		<div class="row">

			<section class="csmpublic-home">
				<div class="container">
					<div class="row-page row">
						<?php
						$i=0;
						foreach ($service as $row) {
							$i++;
							?>
							<div class="col-page col-sm-6 col-md-4 no-merg">
								<a href="<?php echo base_url(); ?>service/post/<?php echo $row['slug_service']; ?>" class="public-csm-home">
									<div class="img-publicacion-home">
										<img class="" src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>">
									</div>
									<div class="public-partcsm-home">
										<h3><?php echo $row['heading']; ?></h3>
										<p><?php echo $row['short_content']; ?></p>
									</div>
									<div class="csm-blog-home" style="top:0;">
										<h4><?php echo $row['heading']; ?></h4>
										<span><?php echo READ_MORE; ?></span>
									</div>
								</a>
							</div>
							<?php
						}
						?>	
					</div>
				</div>
			</section>
		</div>
	</div>
</div>