<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo TESTIMONIAL; ?></h1>
			</div>
		</div>
	</div>

	<div class="testimonial-area main-testimonial ptb-60">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="testimonial-carousel owl-carousel owl-loaded owl-drag">

						<?php
						foreach ($testimonial as $row) {
							?>
							<div class="testimonial-item">
								<div class="testimonial-text">
									<div class="client-name">
										<h4><?php echo $row['name']; ?></h4>
										<span><?php echo $row['designation'] ?>, <?php echo $row['company']; ?></span>
									</div>
									<div class="testimonial-post">
										<i class="fa fa-quote-left"></i>
										<p><?php echo nl2br($row['comment']); ?></p>
									</div>
								</div>
								<div class="testimonial-photo">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>">
								</div>
							</div>
							<?php
						}
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>