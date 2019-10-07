<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo SEARCH_NEWS; ?>: <?php echo $search_string; ?></h1>
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
						<a href="<?php echo base_url(); ?>news/page"><span><?php echo SEARCH_NEWS; ?></span></a>
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<a href="#"><span><?php echo $search_string; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>
	<div class="container pt_20 pb_20">
		<div class="row">
			<section class="csmpublic-home">
				<div class="container">
					<div class="row-page row">
						<?php if($total>0): ?>
							<?php
							$i=0;
							foreach ($result as $row) {
								$i++;
								?>
								<div class="col-md-4 col-sm-4 clear-item no-merg">
									<a href="<?php echo base_url(); ?>news/post/<?php echo $row['post_slug']; ?>" class="public-csm-home">
										<div class="blog-author ">
											<ul>
												<li class="gro">
													<span><?php echo $row['news_date']; ?></span> <i class="fa fa-calendar" aria-hidden="true"></i>
												</li>
											</ul>
										</div>
										<div class="img-publicacion-home">
											<img class="" src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>">
										</div>
										<div class="public-partcsm-home">
											<h3><?php echo $row['news_title']; ?></h3>
											<p><?php echo $row['news_short_content']; ?></p>
										</div>
										<div class="csm-blog-home">
											<h4><?php echo $row['news_title']; ?></h4>
											<span><?php echo READ_MORE; ?></span>
										</div>
									</a>
								</div>
								<?php
							}
							?>
							<?php else: ?>
								<div class="not-found">
									<div class="col-md-12">
										<div class="col-md-5" style="text-align: right;">
											<img src="<?php echo base_url(); ?>public/img/icon_png/oops.png"></img>
										</div>
										<div class="col-md-7">
											<h2>No Result Found!</h2>
											<p>Mohon maaf pencarian tidak ditemukan.</p>
										</div>
									</div>
								</div>
							<?php endif; ?>	
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>