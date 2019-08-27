<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $res['banner']; ?>)">
	<div class="bannder-table">
		<div class="banner-text">
			<h1><?php echo $res['heading']; ?></h1>
		</div>
	</div>

	<div class="container single-service-area pt_20 pb_60 bg-news">
		<div class="row">
			<div class="col-lg-9 col-md-8">

				<div class="service-main-photo">
					<img src="<?php echo base_url(); ?>public/uploads/<?php echo $res['photo']; ?>" alt="facility photo">
				</div>

				<div class="single-service-text recent-single-text pt_20">
					<p>
						<?php echo $res['content']; ?>
					</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-4">
				<div class="sidebar">
					<div class="sidebar-item category">
						<h3><?php echo FACILITY; ?></h3>
						<ul>
							<?php
							foreach ($facility_by_heading as $row) {
								?>
								<li><a href="<?php echo base_url(); ?>facility/detail/<?php echo $row['id'].'.html'; ?>"><?php echo $row['heading']; ?></a></li>
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
