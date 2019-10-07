<?php
foreach($category as $row) {
	$category_name = $row['category_name'];
}
?>

<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1>Category: <?php echo $category_name; ?></h1>
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
						<a href="<?php echo base_url(); ?>news/page"><span><?php echo NEWS; ?></span></a>
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<a href="#"><span><?php echo CATEGORY; ?></span></a>
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<a href="<?php echo base_url(); ?>category/post/<?php echo $row['slug_news_category']; ?>"><span><?php echo $category_name; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>
	<div class="container pt_15 pb_60">
		<div class="row">
			<section class="csmpublic-home">
				<div class="container">
					<div class="row-page row">
						<?php
						$i=0;
						foreach ($news as $row) {
							$i++;
							?>
							<div class="<?php echo $row['slug']; ?> no-merg">
								<a href="<?php echo base_url(); ?>news/post/<?php echo $row['post_slug']; ?>" class="public-csm-home">
									<div class="blog-author ">
										<ul>
											<div class="col-sm-5" style="text-align: left; padding-left: 5px;">
												<li class="gro">
													<i class="fa fa-user-circle-o" aria-hidden="true"></i> 
													<span><?php echo $row['user_update'];?></span>
												</li>
											</div>
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
					</div>
				</div>
			</section>
			
		</div>
	</div>
</div>