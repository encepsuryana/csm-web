<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo OUR_FUTURE_PRODUCT; ?></h1>
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
						<?php if ($row['product_star'] == 'Yes') { ?>
							<div class="product-star">
								<i class="fa fa-bookmark" aria-hidden="true"></i>
							</div>
						<?php } ?>
						<div class="toggleIcon">
							<h4>								
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {

									if ($row['product_caption_idn'] == "") {
										echo $row['product_caption'];
									} else {
										echo $row['product_caption_idn'];
									}

								} else {

									if ($row['product_caption'] == "") {
										echo $row['product_caption_idn'];
									} else {
										echo $row['product_caption'];
									}
								}
								?></h4>							
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
						<?php if ($row['product_star'] == 'Yes') { ?>
							<div class="product-star">
								<i class="fa fa-bookmark" aria-hidden="true"></i> <span><?php echo FUTURED_PRODUCT; ?></span>
							</div>
						<?php } ?>
						<div class="product-caption">
							<h4>
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {

									if ($row['product_caption_idn'] == "") {
										echo $row['product_caption'];
									} else {
										echo $row['product_caption_idn'];
									}

								} else {

									if ($row['product_caption'] == "") {
										echo $row['product_caption_idn'];
									} else {
										echo $row['product_caption'];
									}
								}
								?>
							</h4>
						</div>
						<div class="product-desc">
							<p>
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {

									if ($row['product_desc_idn'] == "") {
										echo $row['product_desc'];
									} else { 
										echo $row['product_desc_idn'];
									}

								} else {

									if ($row['product_desc'] == "") {
										echo $row['product_desc_idn'];
									} else { 
										echo $row['product_desc'];
									}
								}
								?>
							</p>
						</div>
						<img src="<?php echo base_url(); ?>public/uploads/products/<?php echo $row['product_name']; ?>" style="width:100%">
					</div>
				<?php }	?>
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
		</div>
	</div>