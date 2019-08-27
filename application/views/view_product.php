<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_product']; ?>)">
	<div class="bannder-table">
		<div class="banner-text">
			<h1><?php echo $page['product_heading']; ?></h1>
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