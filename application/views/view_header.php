<!DOCTYPE html>
<html>
<head>

	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta charset="UTF-8">

	<?php
	$base_url = base_url();
	$full_url = base_url(uri_string());
	$final_url = str_replace($base_url, "", $full_url);
	$slug_arr = explode("/",$final_url);

	if(isset($slug_arr[1])) { 
		$slug_two = $slug_arr[0].'/'.$slug_arr[1];
	}
	?>

	<?php
	if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn'))
	{
		foreach ($language as $lang) {
			define($lang['name'], $lang['idn']);
		}
	} else {
		foreach ($language as $lang) {
			define($lang['name'], $lang['eng']);
		}
	}
	
	if($slug_arr[0] == '')
	{
		echo '<meta name="description" content="'.$page['md_home'].'">';
		echo '<meta name="keywords" content="'.$page['mk_home'].'">';
		echo '<title>'.HOME.' | '.$setting['general_companyname'].'</title>';
	}
	if($slug_arr[0] == 'about')
	{
		echo '<meta name="description" content="'.$page['md_about'].'">';
		echo '<meta name="keywords" content="'.$page['mk_about'].'">';
		echo '<title>'.ABOUT_US.' | '.$setting['general_companyname'].'</title>';
	}
	if($slug_arr[0] == 'download')
	{
		echo '<meta name="description" content="'.$page['md_about'].'">';
		echo '<meta name="keywords" content="'.$page['mk_about'].'">';
		echo '<title>'.DOWNLOAD.' | '.$setting['general_companyname'].'</title>';
	}
	if($slug_arr[0] == 'gallery')
	{
		echo '<meta name="description" content="'.$page['md_gallery'].'">';
		echo '<meta name="keywords" content="'.$page['mk_gallery'].'">';
		echo '<title>'.GALLERY.' | '.$setting['general_companyname'].'</title>';
	}
	if($slug_arr[0] == 'product')
	{
		echo '<meta name="description" content="'.$page['md_gallery'].'">';
		echo '<meta name="keywords" content="'.$page['mk_gallery'].'">';
		echo '<title>'.PRODUCT.' | '.$setting['general_companyname'].'</title>';
	}
	if($slug_arr[0] == 'service')
	{
		if(!isset($slug_arr[1])) {
			echo '<meta name="description" content="'.$page['md_service'].'">';
			echo '<meta name="keywords" content="'.$page['mk_service'].'">';
			echo '<title>'.SERVICE.' | '.$setting['general_companyname'].'</title>';	
		} else {
			$single_service_data = $this->Model_common->get_single_service_data($slug_arr[2]);
			foreach($single_service_data as $row) {
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].' | '.$setting['general_companyname'].'</title>';	
			}
		}		
	}
	if($slug_arr[0] == 'facility')
	{
		if(!isset($slug_arr[1])) {
			echo '<meta name="description" content="'.$page['md_facility'].'">';
			echo '<meta name="keywords" content="'.$page['mk_facility'].'">';
			echo '<title>'.FACILITY.' | '.$setting['general_companyname'].'</title>';	
		} else {
			$single_facility_data = $this->Model_common->get_single_facility_data($slug_arr[2]);
			foreach($single_facility_data as $row) {
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].' | '.$setting['general_companyname'].'</title>';	
			}
		}		
	}

	if($slug_arr[0] == 'aviation_electronics')
	{
		if(!isset($slug_arr[1])) {
			echo '<meta name="description" content="'.$page['md_aviation_electronics'].'">';
			echo '<meta name="keywords" content="'.$page['mk_aviation_electronics'].'">';
			echo '<title>'.AVIATION_ELECTRONICS_TITLE.' | '.$setting['general_companyname'].'</title>';	
		} else {
			$single_aviation_electronics_data = $this->Model_common->get_single_aviation_electronics_data($slug_arr[2]);
			foreach($single_aviation_electronics_data as $row) {
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].' | '.$setting['general_companyname'].'</title>';	
			}
		}		
	}

	if($slug_arr[0] == 'portfolio')
	{
		if(!isset($slug_arr[1])) {
			echo '<meta name="description" content="'.$page['md_portfolio'].'">';
			echo '<meta name="keywords" content="'.$page['mk_portfolio'].'">';
			echo '<title>'.PORTFOLIO.' | '.$setting['general_companyname'].'</title>';	
		} else {
			$single_portfolio_data = $this->Model_common->get_single_portfolio_data($slug_arr[2]);
			foreach($single_portfolio_data as $row) {
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].' | '.$setting['general_companyname'].'</title>';	
			}
		}		
	}
	if($slug_arr[0] == 'testimonial')
	{
		echo '<meta name="description" content="'.$page['md_testimonial'].'">';
		echo '<meta name="keywords" content="'.$page['mk_testimonial'].'">';
		echo '<title>'.TESTIMONIAL.' | '.$setting['general_companyname'].'</title>';
	}
	if(isset($slug_two)) {
		if($slug_two == 'news/page')
		{
			echo '<meta name="description" content="'.$page['md_news'].'">';
			echo '<meta name="keywords" content="'.$page['mk_news'].'">';
			echo '<title>'.NEWS.' | '.$setting['general_companyname'].'</title>';	
		}
		if($slug_two == 'news/post')
		{
			$single_news_data = $this->Model_common->get_single_news_data($slug_arr[2]);
			foreach($single_news_data as $row) {
				$og_id = $row['post_slug'];
				$og_photo = $row['photo'];

				if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {
					
					if ($og_title = $row['news_title_idn'] == '') {
						$og_title = $row['news_title'];
					} else {
						$og_title = $row['news_title_idn'];
					}

				} else {
					
					if ($og_title = $row['news_title'] == '') {
						$og_title = $row['news_title_idn'];
					} else {
						$og_title = $row['news_title'];
					}

				}

				$og_description = $row['news_short_content'];
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$og_title.' | '.$setting['general_companyname'].'</title>';	
			}
			?>
			<meta property="og:title" content="<?php echo $og_title; ?>">
			<meta property="og:type" content="website">
			<meta property="og:url" content="<?php echo base_url().'news/post/'.$og_id; ?>">
			<meta property="og:description" content="<?php echo $og_description; ?>">
			<meta property="og:image" content="<?php echo base_url(); ?>public/uploads/<?php echo $og_photo; ?>">
			<?php
		}	
	}

	if(isset($slug_two)) {
		if($slug_two == 'category/post')
		{
			$category_name = $this->Model_common->get_single_category_data($slug_arr[2]);
			foreach($category_name as $row) {
				$og_id = $row['category_id'];
				$og_title = $row['meta_title'];
				$og_description = $row['meta_description'];
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$og_title.' | '.$setting['general_companyname'].'</title>';	
			}
			?>
			<meta property="og:title" content="<?php echo $og_title; ?>">
			<meta property="og:type" content="website">
			<meta property="og:url" content="<?php echo base_url().'category/post/'.$og_id.'.html'; ?>">
			<meta property="og:description" content="<?php echo $og_description; ?>">
			<?php
		}	
	}

	if($slug_arr[0] == 'ciptasinergi-career.html')
	{
		echo '<meta name="description" content="'.$page['md_carrier'].'">';
		echo '<meta name="keywords" content="'.$page['mk_carrier'].'">';
		echo '<title>'.CAREER.' | '.$setting['general_companyname'].'</title>';
	}
	if($slug_arr[0] == 'contact')
	{
		echo '<meta name="description" content="'.$page['md_contact'].'">';
		echo '<meta name="keywords" content="'.$page['mk_contact'].'">';
		echo '<title>'.CONTACT.' | '.$setting['general_companyname'].'</title>';
	}
	if($slug_arr[0] == 'search')
	{
		echo '<meta name="description" content="'.$page['md_search'].'">';
		echo '<meta name="keywords" content="'.$page['mk_search'].'">';
		echo '<title>'.SEARCH_NEWS.' | '.$setting['general_companyname'].'</title>';
	}
	if($slug_arr[0] == 'terms-and-conditions')
	{
		echo '<meta name="description" content="'.$page['md_term'].'">';
		echo '<meta name="keywords" content="'.$page['mk_term'].'">';
		echo '<title>'.TERMS_AND_CONDITIONS.' | '.$setting['general_companyname'].'</title>';
	}
	if($slug_arr[0] == 'privacy-policy')
	{
		echo '<meta name="description" content="'.$page['md_privacy'].'">';
		echo '<meta name="keywords" content="'.$page['mk_privacy'].'">';
		echo '<title>'.PRIVACY_POLICY.' | '.$setting['general_companyname'].'</title>';
	}
	if($slug_arr[0] == 'site-maps')
	{
		echo '<meta name="description" content="'.$page['md_site_maps'].'">';
		echo '<meta name="keywords" content="'.$page['mk_site_maps'].'">';
		echo '<title>'.SITE_MAPS.' | '.$setting['general_companyname'].'</title>';
	}	
	?>

	<link href="https://fonts.googleapis.com/css?family=Francois+One|Lato:400,700" rel="stylesheet">
	
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="icon" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" type="image/png">

	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/animate.min.css'>
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/bootstrap.min.css'>
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/datepicker3.css'>
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/font-awesome.min.css'>
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/lightbox.min.css'>
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/owl.carousel.min.css'>
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/hover-min.css'>
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/meanmenu.css'>
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/spacing.css'>
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/style.css'>
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/responsive.css'>

	<style>
		/* Theme Color 1 */
		ul.nav-menu li ul li a:before,
		.tooltip.bottom .tooltip-inner,
		.lightbox-item:hover .lightbox-icon,
		.process-row::before,
		.csm-blog-home,
		.footer-copyrignt,
		.mean-container .mean-bar,
		.faq-gallery .panel-group .panel-heading a:after,
		.services-text,
		.team-text,
		.faq-gallery .panel-default .panel-heading,
		.caption-text,
		.footer-main,
		.mission-icon,
		.testimonial-area.main-testimonial .testimonial-post,
		.main-testimonial .testimonial-carousel .owl-dots .owl-dot {
			background: #<?php echo $setting['theme_color_1']; ?>!important;
		}
		.header-contact li span a,
		.dropdown a,
		.blog-text h3 a,
		.box h3,
		.blog-author li a:hover,
		.sidebar-item li a:hover,
		.all-news a,
		.all-product a,
		ul.timeline li a,
		.process-step p,
		.contact-main-home h4,
		.caption-product-area h3,
		.recent-text h4,
		.slider-animated li:last-child a,
		.brand-area h3,
		.banner-text h1,
		.counter-item a,
		.content-home h3,
		.slide-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.slide-carousel.owl-carousel .owl-nav .owl-next:hover,
		.main-menu .dropdown:before,
		.header-contact,
		.team-carousel.owl-carousel .owl-nav .owl-prev, 
		.team-carousel.owl-carousel .owl-nav .owl-next,
		.blog-carousel.owl-carousel .owl-nav .owl-prev, 
		.blog-carousel.owl-carousel .owl-nav .owl-next,
		.brand-carousel.owl-carousel .owl-nav .owl-prev, 
		.brand-carousel.owl-carousel .owl-nav .owl-next,
		.brand-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.brand-carousel.owl-carousel .owl-nav .owl-next:hover {
			color: #<?php echo $setting['theme_color_1']; ?>!important;
		}
		.team-carousel.owl-carousel .owl-nav .owl-prev, 
		.team-carousel.owl-carousel .owl-nav .owl-next,
		.blog-carousel.owl-carousel .owl-nav .owl-prev, 
		.blog-carousel.owl-carousel .owl-nav .owl-next {
			border-color: #<?php echo $setting['theme_color_1']; ?>!important;	
		}

		.btn-circle.act::after {
			border-bottom-color: #<?php echo $setting['theme_color_1']; ?>!important;
		}

		.mean-container .mean-nav ul li a:hover,
		.counter-item a:hover,
		ul.nav-ciptasin li a:hover{
			background: #<?php echo $setting['theme_color_1']; ?>!important;
			color: #fff !important
		}

		ul.timeline li::before,
		ul.nav-menu li ul {
			border-color: #<?php echo $setting['theme_color_1']; ?>!important;
		}


		/* Theme Color 2 */
		.content-home,
		.bg-choose {
			background-color: #<?php echo $setting['theme_color_2']; ?>!important;	
		}
		
		.ceo-style,
		.recent-text,
		.map-main-home,
		.blog-text,
		.mean-container .mean-nav ul li a,
		.slider-animated li:last-child a,
		.header-area,
		.client-name,
		.testimonial-carousel .owl-dots .owl-dot.active,
		.team-social li a:hover,
		.caption-bg,
		.lightbox-bg,
		.hvr-bounce-to-right::before,
		.footer-contact-area,
		.sidebar-item h3:before,
		.single-blog-author li.gro,
		.scroll-top {
			background: #<?php echo $setting['theme_color_2']; ?>!important;
		}
		.services-link a {
			background-color: #<?php echo $setting['theme_color_2']; ?>!important;	
		}
		.dropdown-menu1 li a:hover,
		.counter-item h2.counter,
		.footer-contact-item li p,
		.footer-contact-item li h4,
		.home-maps-btn h3,
		.choose-text h3,
		.services-text h3 a,
		.lightbox-icon a:hover,
		.faq-gallery h4.panel-title a:hover,
		.caption-icon a:hover,
		.blog-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.blog-carousel.owl-carousel .owl-nav .owl-next:hover,
		.mission-icon,
		.carousel-inner .lightbox-inner a {
			color: #<?php echo $setting['theme_color_2']; ?>!important;
		}

		ul.nav-ciptasin li a,
		.slider-animated li:last-child a,
		.choose-icon img,
		.testimonial-carousel .owl-dots .owl-dot.active,
		.team-social li a:hover,
		.blog-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.blog-carousel.owl-carousel .owl-nav .owl-next:hover,
		.carousel-indicators li{
			border-color: #<?php echo $setting['theme_color_2']; ?>!important;
		}

		.title-news a:hover{
			color: #<?php echo $setting['theme_color_1']; ?>!important;
		}

		.services-text,
		.blog-text {
			border-top-color: #<?php echo $setting['theme_color_2']; ?>!important;
		}
		.single-service-photo img {
			border-bottom-color: #<?php echo $setting['theme_color_2']; ?>!important;
		}

		.contact-button-home a:hover,
		.contact-area button:hover {
			background: #<?php echo $setting['theme_color_2']; ?>!important;
			color: #<?php echo $setting['theme_color_1']; ?>!important;
			border-color: #<?php echo $setting['theme_color_1']; ?>!important;;
		}

		.btn-default:hover {
			background: #<?php echo $setting['theme_color_2']; ?>!important;
			color: #<?php echo $setting['theme_color_1']; ?>!important;
		}

		.btn-info,
		.btn-info:hover,
		.btn-info:active,
		.contact-area button,
		.contact-button-home a {
			background: #<?php echo $setting['theme_color_1']; ?>!important;
			color: #<?php echo $setting['theme_color_2']; ?>!important;
			border-color: #<?php echo $setting['theme_color_1']; ?>!important;;
		}


		.slider-animated li a {
			border-color: #<?php echo $setting['theme_color_2']; ?>!important;
			color: #<?php echo $setting['theme_color_2']; ?>!important;
		}

		.recent-menu ul li,
		.services-link a {
			background: #<?php echo $setting['theme_color_2']; ?>!important;
			border-color: #<?php echo $setting['theme_color_1']; ?>!important;
			color: #<?php echo $setting['theme_color_1']; ?>!important;
		}
		.dropdown-menu1 li:hover,
		.services-link a:hover,
		.nav-sidebar .active a:hover,
		.nav li a:hover,
		.nav-sidebar .active a,
		.slider-animated li a:hover,
		.slider-animated li:last-child a:hover,
		.recent-menu ul li:hover {
			background: #<?php echo $setting['theme_color_1']; ?>!important;
			border-color: #<?php echo $setting['theme_color_1']; ?>!important;
			color: #<?php echo $setting['theme_color_2']; ?>!important;
		}
	</style>
	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
</head>

<body>
	<?php echo $comment['code_body']; ?>
	<!-- Loading GIF -->
	<div id="preloader">
		<div id="status" style="background-image: url('<?php echo base_url(); ?>public/img/preloader.gif')"></div>
	</div>

	<div class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-4">

				</div>
				<div class="col-md-8 col-sm-8">
					<div class="header-contact">
						<ul>
							<li>
								<i class="fa fa-building-o" aria-hidden="true"></i>
								<span title="<?php echo WORKING_HOURS; ?>" data-toggle="tooltip" data-placement="bottom"><?php echo MONDAY_FRIDAY; ?> <?php echo nl2br($setting['footer_working_hour']); ?></span>
							</li>
							<li>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span title="<?php echo COMPANY_PHONE; ?>" data-toggle="tooltip" data-placement="bottom"><a href="tel:<?php echo $setting['top_bar_phone']; ?>"><?php echo $setting['top_bar_phone']; ?></a></span>
							</li>
							<li>
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<span title="<?php echo COMPANY_EMAIL; ?>" data-toggle="tooltip" data-placement="bottom"><a href="mailto:<?php echo $setting['top_bar_email']; ?>"><?php echo $setting['top_bar_email']; ?></a></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="strickymenu" class="menu-area">
		<menu>
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12" style="padding: 0;">
						<div class="logo2">
							<a href="<?php echo base_url(); ?>">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo2']; ?>" alt="Cipta Sinergi The Art of Manufacturing">
							</a>
						</div>
						<div class="logo">
							<a href="<?php echo base_url(); ?>">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="Logo">
							</a>
						</div>
					</div>

					<div class="col-md-8 col-sm-12 main-menu" style="display: block;">
						<div class="main-menu-item">				 	
							<ul class="nav-menu">
								<li><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>
								<li><a href="<?php echo base_url(); ?>about"><?php echo ABOUT; ?></a></li>		
								<li class="menu-item-has-children"><a href="javascript:void();"><?php echo PRODUCT; ?></a>
									<ul class="sub-menu">
										<li class="submenu-item-has-children">
											<a href="<?php echo base_url(); ?>portfolio"><?php echo PORTFOLIO; ?></a>
											<ul class="sub-menu">
												<?php
												foreach ($portfolio_category as $row) {
													?>
													<li>
														<a href="<?php echo base_url(); ?>portfolio"><?php echo $row['category_name']; ?></a>
													</li>
													<?php
												}
												?>
											</ul>
										</li>

										<li class="submenu-item-has-children">
											<a href="<?php echo base_url(); ?>product">New Product</a>
											<ul class="sub-menu">
												<li>
													<a href="<?php echo base_url();?>product">
														<?php
														$i=0;
														foreach ($product as $row) {
															$i++;
															if($i>1) {break;}
															?>
															
															<div class="latest-news pin">
																<?php echo NEW_PRODUCT; ?>
															</div>
															<a href="<?php echo base_url(); ?>product">
																<img src="<?php echo base_url(); ?>public/uploads/products/<?php echo $row['product_name']; ?>" alt="placeholder+image">
																<h5><?php echo $row['product_caption']; ?></h5>	
																<p><?php echo $row['product_desc']; ?></p>
															</a>
															<?php
														}
														?>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>

								<li class="menu-item-has-children"><a href="javascript:void();"><?php echo FACILITY; ?></a>
									<ul class="sub-menu">
										<li class="submenu-item-has-children">
											<a href="<?php echo base_url(); ?>facility"><?php echo FACILITY; ?>	</a>
											<ul class="sub-menu">
												<?php
												foreach ($facility as $row) {
													?>
													<li>
														<a href="<?php echo base_url(); ?>facility/post/<?php echo $row['slug_facility']; ?>"><?php echo $row['name']; ?></a>
													</li>
													<?php
												}
												?>
											</ul>
										</li>

										<li class="submenu-item-has-children">
											<a href="<?php echo base_url(); ?>service"><?php echo SERVICE; ?></a>
											<ul class="sub-menu">
												<?php
												foreach ($service as $row) {
													?>
													<li>
														<a href="<?php echo base_url(); ?>service/post/<?php echo $row['slug_service']; ?>"><?php echo $row['heading']; ?></a>
													</li>
													<?php
												}
												?>
											</ul>
										</li>
									</ul>
								</li>

								<li class="menu-item-has-children"><a href="javascript:void();"><?php echo AVIATION_ELECTRONICS_TITLE; ?></a>
									<ul class="sub-menu">
										<li class="submenu-item-has-children">
											<a href="<?php echo base_url(); ?>aviation-electronics-department"><?php echo AVIATION_ELECTRONICS_TITLE; ?></a>
											<ul class="sub-menu">
												<?php
												foreach ($aviation_electronics_category as $row) {
													?>
													<li><a href="<?php echo base_url(); ?>aviation-electronics-department"><?php echo $row['category_name']; ?></a></li>
													<?php
												}
												?>
											</ul>
										</li>
									</ul>
								</li>

								<li class="menu-item-has-children"><a href="javascript:void();"><?php echo PAGE; ?></a>
									<ul class="sub-menu">
										<li><a href="<?php echo base_url(); ?>gallery"><?php echo GALLERY; ?></a></li>
										<li class="submenu-item-has-children">
											<a href="<?php echo base_url(); ?>news/page"><?php echo NEWS; ?></a>
											<ul class="sub-menu">
												<?php
												$i=0;
												foreach ($latest_news as $row) {
													$i++;
													if($i>1) {break;}
													?>
													<li>
														<a href="<?php echo base_url();?>news/post">
															<div class="latest-news pin">
																<?php echo LATEST_NEWS; ?>
															</div>

															<a href="<?php echo base_url(); ?>news/post/<?php echo $row['post_slug']; ?>">
																<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>">

																<h5>
																	<?php 
																	if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {

																		if ($row['news_title_idn'] == "") {
																			echo $row['news_title'];
																		} else { 
																			echo $row['news_title_idn'];
																		}

																	} else {

																		if ($row['news_title'] == "") {
																			echo $row['news_title_idn'];
																		} else { 
																			echo $row['news_title'];
																		}

																	}
																	?>
																</h5>	
																<p>
																	<?php 
																	if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {

																		if ($row['news_short_content_idn'] == "") {
																			echo $row['news_short_content'];
																		} else { 
																			echo $row['news_short_content_idn'];
																		}

																	} else {

																		if ($row['news_short_content'] == "") {
																			echo $row['news_short_content_idn'];
																		} else { 
																			echo $row['news_short_content'];
																		}

																	}
																	?>
																</p>
															</a>
														</a>
													</li>
													<?php
												}
												?>
											</ul>
										</li>
										<li class="submenu-item-has-children">
											<a href="<?php echo base_url(); ?>gallery"><?php echo DOWNLOAD; ?></a>

											<ul class="sub-menu">
												<li>
													<a href="<?php echo base_url();?>download/file-mechanic"><?php echo COMPANY_PROFILE_ENGINEERING; ?></a>
												</li>
												<li>
													<a href="<?php echo base_url();?>download/file-electronic"><?php echo COMPANY_PROFILE_AVIATION_ELECTRONICS; ?></a>
												</li>
												<li>
													<a href="<?php echo base_url();?>download/file-mechanic-electronic"><?php echo COMPANY_PROFILE_EN_DE; ?></a>
												</li>
											</ul>
										</li>
									</ul>
								</li>

								<li><a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>

								<li class="menu-item-has-children">
									<a href="javascript:void();">
										<i class="fa fa-globe" aria-hidden="true"></i> 
										<span>
											<?php if ($this->session->userdata('language') == 'eng') {
												echo "English";
											} else {
												echo "Indonesia";
											}?>
										</span>
									</a>

									<ul class="sub-menu">
										<li>
											<?php echo anchor ('language/change/eng','English');?>
										</li>
										<li>
											<?php echo anchor ('language/change/idn','Indonesia');?>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-sm-12" style="padding: 0;">
						<div class="ceo-style">
							<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['company_ceo']; ?>" alt="CEO & Depouty">
						</div>
					</div>
				</div>
			</div>
		</menu>
	</div>