<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="col-md-6">
			</div>
			<div class="col-md-6" style="padding: 0;">
				<div class="banner-text">
					<h1><?php echo $page['search_heading']; ?> <?php echo $search_string; ?></h1>
				</div>
			</div>
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
									<a href="<?php echo base_url(); ?>news/detail/<?php echo $row['news_id'].'.html'; ?>" class="public-csm-home">
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