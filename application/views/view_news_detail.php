<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo $news['news_title']; ?></h1>
			</div>
		</div>
	</div>

	<div class="container single-service-area pt_15 pb_60 common-text bg-news">
		<div class="row">
			<div class="col-md-8 pl-30">
				<div class="single-service-item">
					<div class="single-blog-author">
						<div class="blog-author">
							<ul>
								<div class="col-sm-7" style="text-align: left; padding-left: 5px;">
									<li class="gro">
										<a href="<?php echo base_url(); ?>"><span><?php echo HOME; ?></span></a>
										<i class="fa fa-caret-right" aria-hidden="true"></i>
										<a href="<?php echo base_url(); ?>news/page"><span><?php echo NEWS; ?></span></a>
										<i class="fa fa-caret-right" aria-hidden="true"></i>
										<a href="<?php echo base_url(); ?>category/post/<?php echo $news['slug_news_category']; ?>"><span><?php echo $news['category_name']; ?></span></a>
									</li>
								</div>
								<div class="col-sm-5" style="padding-right: 0px;">
									<li class="gro">
										<i class="fa fa-eye" aria-hidden="true"></i>
										<span><?php echo $news['total_view']; ?></span>
									</li>
									<li class="gro" style="padding-right:0;">
										<i class="fa fa-user-circle-o" aria-hidden="true"></i> 
										<span><?php echo $news['user_update']; ?></span>
									</li>
									<li class="gro" style="padding-right:0;">
										<span><?php echo $news['news_date']; ?></span> <i class="fa fa-calendar" aria-hidden="true"></i>
									</li>
								</div>
							</ul>
						</div>
					</div>
					<div class="single-service-photo">
						<img src="<?php echo base_url(); ?>public/uploads/<?php echo $news['photo']; ?>" class="img-responsive" alt="">
					</div>
					<div class="single-service-text">
						<p>
							<?php echo $news['news_content']; ?>
						</p>
						<h3><?php echo SHARE_THIS; ?></h3>

						<!-- AddToAny BEGIN -->
						<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
							<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
							<a class="a2a_button_facebook"></a>
							<a class="a2a_button_twitter"></a>
							<a class="a2a_button_google_plus"></a>
							<a class="a2a_button_pinterest"></a>
							<a class="a2a_button_linkedin"></a>
							<a class="a2a_button_digg"></a>
							<a class="a2a_button_tumblr"></a>
							<a class="a2a_button_reddit"></a>
							<a class="a2a_button_stumbleupon"></a>
						</div>
						<script async src="https://static.addtoany.com/menu/page.js"></script>
						<!-- AddToAny END -->
						<div class="pb_20 pt_20">
							<h3><?php echo COMMENTS; ?></h3>
							<?php
							// Getting the full url of the current page
							$final_url = base_url().'news/post/'.$news['post_slug'];
							?>
							<!-- Facebook Comment Main Code (got from facebook website) -->
							<div class="fb-comments" data-href="<?php echo $final_url; ?>" data-numposts="5" data-width="650"></div>
						</div>

					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="sidebar"> 
					<div class="sidebar-item">
						<div class="sidebar-item searchbar-item" >
							<?php echo form_open(base_url().'search'); ?>
							<div class="input-group">
								<?php
								$data = array(
									'type'         => 'text',
									'name'         => 'search_string',
									'class'        => 'form-control',
									'autocomplete' => 'off',
									'placeholder'  => SEARCH_NEWS
								);
								echo form_input($data);
								?>
								<span class="input-group-btn">
									<?php
									$data = array(
										'name'    => 'form1',
										'class'   => 'btn btn-default',
										'type'    => 'submit',
										'content' => '<i class="fa fa-search"></i>'
									);
									echo form_button($data);
									?>
								</span>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>	

					<div class="sidebar-item">		
						<h3><?php echo CATEGORY; ?></h3>		
						<ul>
							<?php
							foreach ($news_category as $row) {
								?>
								<li><a href="<?php echo base_url(); ?>category/post/<?php echo $row['slug_news_category']; ?>"><?php echo $row['category_name']; ?></a></li>
								<?php
							}
							?>
						</ul>
					</div>	

					<div class="sidebar-item">		
						<h3><?php echo LATEST_NEWS; ?></h3>		
						<ul>
							<?php
							$i=0;
							foreach ($latest_news as $row) {
								$i++;
								if($i>$setting['total_recent_post']) {break;}
								?>
								<li><a href="<?php echo base_url(); ?>news/post/<?php echo $row['post_slug']; ?>"><?php echo $row['news_title']; ?></a></li>
								<?php
							}
							?>
						</ul>
					</div>


					<div class="sidebar-item">		
						<h3><?php echo POPULAR_NEWS; ?></h3>		
						<ul>
							<?php
							$i=0;
							foreach ($popular_news as $row) {
								$i++;
								if($i>$setting['total_popular_post']) {break;}
								?>
								<li><a href="<?php echo base_url(); ?>news/post/<?php echo $row['post_slug']; ?>"><?php echo $row['news_title']; ?></a></li>
								<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
