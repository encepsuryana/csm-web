<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table">
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="banner-text">
				</div>
			</div>
			<div class="col-md-6" style="padding-right: 0;">
				<div class="banner-text">
					<h1><?php echo PRODUCT_HOME; ?></h1>
				</div>
			</div>
		</div>
	</div>

	<section id="gridGallery">
		<div class="container">
			<div class="row">
				<?php
				foreach ($product as $row) {
					?>
					<div class="<?php echo $row['product_style']; ?>" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['product_name']; ?>)">
						<div class="toggleIcon">
							<h4><?php echo $row['product_caption']; ?></h4>							
						</div>
						<div class="col-sm-6 captionBox hiddenText">
							<p><?php echo $row['product_desc']; ?></p>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript">
	$(document).ready(function() {

		$(".box").on("click", function() {
			$(this).siblings().toggleClass("hidden");
			$(this).toggleClass("full");
			$(".captionBox").toggleClass("hiddenText");
			$(this).children().animate({
				opacity: "1"
			}, 500, function() {});
		});

		if ($(window).width() < 768) {
			$(".box").on("click", function() {
				$("#gridGallery").toggleClass("mobileFunction");
			});
		}

		if ($(window).width() >= 768) {

			$(".box").hover(function() {
				$(this).siblings().toggleClass("opacity");
			});
		}

		$(".horizontal").click(function() {
			$(this).toggleClass("full");
			$(".captionBox").toggleClass("hiddenText");
			$(this).children().animate({
				opacity: "1"
			}, 500, function() {});
		});

		$(".horizontal").hover(function() {
			$(this).siblings().toggleClass("opacity");
		});
	});
</script>