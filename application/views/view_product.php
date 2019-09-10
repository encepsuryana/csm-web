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
				$i=0;
				foreach ($product as $row) {
					$i++;
					?>
					<div onclick="openModal();currentSlide(<?php echo $i; ?>)" class="<?php echo $row['product_style']; ?>" style="background-image: url(<?php echo base_url(); ?>public/uploads/products/<?php echo $row['product_name']; ?>)">
						<div class="toggleIcon">
							<h4><?php echo $row['product_caption']; ?></h4>							
						</div>
					</div>			
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<div id="myModal" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">
			<?php
			foreach ($product as $row) {
				?>
				<div class="mySlides">
					<div class="product-caption">
						<h4><?php echo $row['product_caption']; ?></h4>
					</div>
					<div class="product-desc">
						<p><?php echo $row['product_desc']; ?></p>
					</div>
					<img src="<?php echo base_url(); ?>public/uploads/products/<?php echo $row['product_name']; ?>" style="width:100%">
				</div>
			<?php }	?>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
	</div>
</div>

<script>
	function openModal() {
		document.getElementById("myModal").style.display = "block";
	}

	function closeModal() {
		document.getElementById("myModal").style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		var captionText = document.getElementById("caption");
		if (n > slides.length) {slideIndex = 1}
			if (n < 1) {slideIndex = slides.length}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";
				dots[slideIndex-1].className += "active";
				captionText.innerHTML = dots[slideIndex-1].alt;
			}
		</script>