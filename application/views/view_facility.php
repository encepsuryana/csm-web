<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_facility']; ?>)">
	<div class="bannder-table">
		<div class="banner-text">
			<h1><?php echo $page['facility_heading']; ?></h1>
		</div>
	</div>

	<div class="container services-area pt_20 pb_60">
		<div class="row">

			<section class="csmpublic-home">
				<div class="container">
					<div class="row-page row">
						<?php
						$i=0;
						foreach ($facility as $row) {
							$i++;
							?>
							<div class="<?php echo $row['facility_style']; ?> no-merg">
								<a href="<?php echo base_url(); ?>facility/detail/<?php echo $row['id'].'.html'; ?>" class="public-csm-home">
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