<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="slider">
	<div class="slide-carousel owl-carousel">		
		<?php
		foreach ($slider as $row) {
			?>
			<div class="slider-item" style="background-image:url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>);">
				<div class="bg"></div>
				<div class="slider-table">
					<div class="slider-text">
						<div class="slider-animated">
							<h2>
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
									if ($row['heading_idn'] == '') {
										echo $row['heading'];
									} else {
										echo $row['heading_idn']; 
									}
								} else {
									echo $row['heading'];
								}
								?>
							</h2>
						</div>
						<div class="slider-animated">
							<p>
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
									if (nl2br($row['content_idn']) == '') {
										echo nl2br($row['content']);
									} else {
										echo nl2br($row['content_idn']);
									}
								} else {
									echo nl2br($row['content']);
								}
								?>
							</p>
						</div>
						<div class="slider-animated">
							<ul>
								<li><a href="<?php echo $row['button1_url']; ?>"><?php echo $row['button1_text']; ?></a></li>
								<li><a href="<?php echo $row['button2_url']; ?>"><?php echo $row['button2_text']; ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>

<div class="container">
	<div class="content-home">
		<div class="col-md-6 col-sm-6">
			<div class="home-last">
				<h3><?php echo LATEST_NEWS; ?></h3>
				<ul class="timeline">
					<?php
					$i=0;				
					foreach ($latest_news as $row) {
						$i++;
						if($i>$setting['total_recent_post']) {break;}
						?>
						<li>
							<a target="_blank" href="<?php echo base_url(); ?>news/post/<?php echo $row['post_slug']; ?>">
								
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
									if ($row['news_title_idn'] == '') {
										echo $row['news_title'];
									} else {
										echo $row['news_title_idn'];
									}
								} else {
									echo $row['news_title'];
								}
								?>

							</a>
							<a href="<?php echo base_url(); ?>news/post/<?php echo $row['post_slug']; ?>" target="_blank" style="float: right; font-size: 12px;"><?php echo $row['news_date']; ?></a>
							
							<p>
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
									if ($row['news_short_content_idn'] == '') {
										echo $row['news_short_content'];
									} else {
										echo $row['news_short_content_idn'];
									}
								} else {
									echo $row['news_short_content'];
								}
								?>
							</p>

						</li>
						<?php
					}
					?>
				</ul>
				<div class="all-news">
					<a target="_blank" href="<?php echo base_url(); ?>news/page"><?php echo SEE_MORE; ?></a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 btn-home">
			<ul>												
				<li>
					<?php
					foreach ($content_home as $row) {
						?>
						<a target="_blank" href="<?php echo base_url().$row['link']; ?>" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>);" alt="<?php echo $row['photo']; ?>" href="#">

							<i class="fa <?php echo $row['heading']; ?>" aria-hidden="true"></i> 
							<span><?php echo $row['content']; ?></span>

						</a>
						<?php
					}
					?>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="caption-product-area gridGallery">
		<section>
			<h3><?php echo PRODUCT_HOME; ?></h3>
			<div class="row-product">		
				<?php
				$i=0;
				foreach ($product as $row) {
					$i++;
					if($i>$setting['total_product_post']) {break;}
					?>
					<div onclick="openModal();currentSlide(<?php echo $i ?>)" class="<?php echo $row['product_style']; ?>" style="background-image: url(<?php echo base_url(); ?>public/uploads/products/<?php echo $row['product_name']; ?>)">
						<div class="toggleIcon">
							<h4>
								<?php 
								if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
									if ($row['product_caption_idn'] == '') {
										echo $row['product_caption'];
									} else {
										echo $row['product_caption_idn'];
									}
								} else {
									echo $row['product_caption'];
								}
								?>
							</h4>						
						</div>
					</div>
					<?php
				}
				?>
				<div class="all-product">
					<a target="_blank" href="<?php echo base_url(); ?>product"><?php echo SEE_MORE; ?> <?php echo OUR_PRODUCT; ?></a>
				</div>
				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
					<div class="modal-content">
						<?php
						foreach ($product as $row) {
							?>
							<div class="mySlides">
								<div class="product-caption">
									<h4>
										<?php 
										if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
											if ($row['product_caption_idn'] == '') {
												echo $row['product_caption'];
											} else {
												echo $row['product_caption_idn'];
											}
										} else {
											echo $row['product_caption'];
										}
										?>
									</h4>
								</div>
								<div class="product-desc">
									<p>
										<?php 
										if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
											if ($row['product_desc_idn'] == '') {
												echo $row['product_desc'];
											} else {
												echo $row['product_desc_idn'];
											}
										} else {
											echo $row['product_desc'];
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
		</section>
	</div>
</div>

<div class="container">
	<div class="caption-product-area gridGallery">
		<h3><?php echo SERVICES; ?></h3>
		<div class="row-product">

			<section class="csmpublic-home">
				<div class="row-page">
					<?php
					$i=0;
					foreach ($service as $row) {
						$i++;
						?>
						<div class="col-page col-sm-6 col-md-4 no-merg no-merg">
							<a href="<?php echo base_url(); ?>service/post/<?php echo $row['slug_service']; ?>" class="public-csm-home">
								<div class="img-publicacion-home">
									<img class="" src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>">
								</div>
								<div class="public-partcsm-home">
									<h3 style="border-bottom: 0;"><?php echo $row['heading']; ?></h3>

									<p>
										<?php 
										if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
											if ($row['short_content_idn'] == '') {
												echo $row['short_content'];
											} else {
												echo $row['short_content_idn'];
											}
										} else {
											echo $row['short_content'];
										}
										?>
									</p>
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
			</section>
		</div>
	</div>
</div>

<div class="container recent-works">
	<div class="caption-product-area gridGallery">
		<h3>
			<?php echo FACILITY; ?>
			<div class="recent-menu">
				<ul>
					<li data-filter="all"><?php echo ALL; ?></li>
					<?php
					foreach ($facility_category as $row) {
						?>
						<li data-filter="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></li>
						<?php
					}
					?>
				</ul>
			</div>
		</h3>
		<div class="row-product">
			<div class="filtr-container">			
				<?php
				foreach ($facility as $row) {
					?>
					<div class="col-md-4 col-sm-6 col-xs-12 filtr-item clear-three bg-about" data-category="<?php echo $row['category_id']; ?>" data-sort="value">
						<div class="recent-item">
							<div class="lightbox-item">
								<div class="recent-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)">
									<div class="lightbox-text">
										<div class="lightbox-table">
											<div class="lightbox-icon">
												<a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="recent-text">
									<h5><?php echo $row['name']; ?></h5>
									<p>
										<?php 
										if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
											if ($row['short_content_idn'] == '') {
												echo $row['short_content'];
											} else {
												echo $row['short_content_idn'];
											}
										} else {
											echo $row['short_content'];
										}
										?>
									</p>
									
									<div class="services-link">
										<a href="<?php echo base_url(); ?>facility/post/<?php echo $row['slug_facility']; ?>"><?php echo READ_MORE; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="caption-product-area gridGallery">
		<h3><?php echo TESTIMONIAL_SAY; ?></h3>
		<div class="row-product">
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

<div class="container">
	<div class="brand-area">
		<h3><?php echo OUR_PARTNER; ?></h3>
		<div class="row">
			<div class="col-md-12">
				<div class="brand-carousel owl-carousel">					
					<?php
					foreach ($partner as $row) {
						?>
						<div class="brand-item" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)">
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="counterup-area pt-30 pb-60" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['counter_bg']; ?>)">
	<div class="bg-counterup"></div>
	<div class="container">
		<div class="row">			
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter"><?php echo $setting['counter1_value']; ?></h2>
					<h4><?php echo $setting['counter1_text']; ?></h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter"><?php echo $setting['counter2_value']; ?></h2>
					<h4><?php echo $setting['counter2_text']; ?></h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter"><?php echo $setting['counter3_value']; ?></h2>
					<h4><?php echo $setting['counter3_text']; ?></h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter"><?php echo $setting['counter4_value']; ?></h2>
					<h4><?php echo $setting['counter4_text']; ?></h4>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container map-main-home">
	<div class="map-home">
		<div class="col-md-7 col-sm-7">
			<div class="home-maps-main">
				<?php echo $setting['contact_map_iframe']; ?>
			</div>
		</div>
		<div class="col-md-5 col-sm-5">
			<div class="contact-main-home">
				<h4><?php echo HAVE_A_MORE_QUETIONS; ?></h4>
				<div class="contact-button-home">
					<a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a>
				</div>
			</div>
		</div>
	</div>
</div>