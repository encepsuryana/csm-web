<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_news']; ?>)">
	<div class="bannder-table">
		<div class="banner-text">
			<h1><?php echo $page['news_heading']; ?></h1>
		</div>
	</div>


	<div class="container pt_20 pb_20">
		<div class="row">
			<section class="csmpublic-home">
				<div class="container">
					<div class="row-page row">
						<?php
						$i=0;
						foreach ($results as $row) {
							$i++;
							?>
							<div class="<?php echo $row->slug; ?> no-merg">
								<a href="<?php echo base_url(); ?>news/detail/<?php echo $row->news_id.'.html'; ?>" class="public-csm-home">
									<div class="blog-author ">
										<ul>
											<div class="col-sm-6" style="text-align: left; padding-left: 5px;">
											<li class="gro">
												<i class="fa fa-user-circle-o" aria-hidden="true"></i> 
												<span><?php echo $row->user_update; ?></span>
											</li>
											</div>
											<li class="gro">
												<span><?php echo $row->news_date; ?></span> <i class="fa fa-calendar" aria-hidden="true"></i>
											</li>
										</ul>
									</div>
									<div class="img-publicacion-home">
										<img class="" src="<?php echo base_url(); ?>public/uploads/<?php echo $row->photo; ?>">
									</div>
									<div class="public-partcsm-home">
										<h3><?php echo $row->news_title; ?></h3>
										<p><?php echo $row->news_short_content; ?></p>
									</div>
									<div class="csm-blog-home">
										<h4><?php echo $row->news_title; ?></h4>
										<span><?php echo READ_MORE; ?></span>
									</div>
								</a>
							</div>
							<?php
						}
						?>	
					</div>
				</div>
			</section>
		</div>
		<div class="row">
			<div class="col-md-12" style="margin-top:30px;text-align: center;">
				<div class="pagination">
					<?php echo $links; ?>
				</div>
			</div>
		</div>
	</div>
</div>