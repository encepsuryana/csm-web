<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo PRODUCT_HOME; ?></h1>
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
						<a href="<?php echo base_url(); ?>product"><span><?php echo PRODUCT; ?></span></a>
					</li>
				</div>
			</ul>
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