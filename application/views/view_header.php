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
		echo '<title>'.HOME.$page['mt_home'].'</title>';
	}
	if($slug_arr[0] == 'about')
	{
		echo '<meta name="description" content="'.$page['md_about'].'">';
		echo '<meta name="keywords" content="'.$page['mk_about'].'">';
		echo '<title>'.ABOUT_US.$page['mt_about'].'</title>';
	}
	if($slug_arr[0] == 'gallery')
	{
		echo '<meta name="description" content="'.$page['md_gallery'].'">';
		echo '<meta name="keywords" content="'.$page['mk_gallery'].'">';
		echo '<title>'.GALLERY.$page['mt_gallery'].'</title>';
	}
	if($slug_arr[0] == 'product')
	{
		echo '<meta name="description" content="'.$page['md_gallery'].'">';
		echo '<meta name="keywords" content="'.$page['mk_gallery'].'">';
		echo '<title>'.PRODUCT.$page['mt_product'].'</title>';
	}
	if($slug_arr[0] == 'service')
	{
		if(!isset($slug_arr[1])) {
			echo '<meta name="description" content="'.$page['md_service'].'">';
			echo '<meta name="keywords" content="'.$page['mk_service'].'">';
			echo '<title>'.SERVICE.$page['mt_service'].'</title>';	
		} else {
			$single_service_data = $this->Model_common->get_single_service_data($slug_arr[2]);
			foreach($single_service_data as $row) {
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].' | CV. Cipta Sinergi Manufacturing'.'</title>';	
			}
		}		
	}
	if($slug_arr[0] == 'facility')
	{
		if(!isset($slug_arr[1])) {
			echo '<meta name="description" content="'.$page['md_facility'].'">';
			echo '<meta name="keywords" content="'.$page['mk_facility'].'">';
			echo '<title>'.FACILITY.$page['mt_facility'].'</title>';	
		} else {
			$single_facility_data = $this->Model_common->get_single_facility_data($slug_arr[2]);
			foreach($single_facility_data as $row) {
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].' | CV. Cipta Sinergi Manufacturing'.'</title>';	
			}
		}		
	}

	if($slug_arr[0] == 'electronics-division')
	{
		if(!isset($slug_arr[1])) {
			echo '<meta name="description" content="'.$page['md_electronics_division'].'">';
			echo '<meta name="keywords" content="'.$page['mk_electronics_division'].'">';
			echo '<title>'.ELECTRONICS_DIVISION.$page['mt_electronics_division'].'</title>';	
		} else {
			$single_electronics_division_data = $this->Model_common->get_single_electronics_division_data($slug_arr[2]);
			foreach($single_electronics_division_data as $row) {
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].' | CV. Cipta Sinergi Manufacturing'.'</title>';	
			}
		}		
	}

	if($slug_arr[0] == 'portfolio')
	{
		if(!isset($slug_arr[1])) {
			echo '<meta name="description" content="'.$page['md_portfolio'].'">';
			echo '<meta name="keywords" content="'.$page['mk_portfolio'].'">';
			echo '<title>'.PORTFOLIO.$page['mt_portfolio'].'</title>';	
		} else {
			$single_portfolio_data = $this->Model_common->get_single_portfolio_data($slug_arr[2]);
			foreach($single_portfolio_data as $row) {
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].'</title>';	
			}
		}		
	}
	if($slug_arr[0] == 'testimonial')
	{
		echo '<meta name="description" content="'.$page['md_testimonial'].'">';
		echo '<meta name="keywords" content="'.$page['mk_testimonial'].'">';
		echo '<title>'.TESTIMONIAL.$page['mt_testimonial'].'</title>';
	}
	if(isset($slug_two)) {
		if($slug_two == 'news/page')
		{
			echo '<meta name="description" content="'.$page['md_news'].'">';
			echo '<meta name="keywords" content="'.$page['mk_news'].'">';
			echo '<title>'.NEWS.$page['mt_news'].'</title>';	
		}
		if($slug_two == 'news/post')
		{
			$single_news_data = $this->Model_common->get_single_news_data($slug_arr[2]);
			foreach($single_news_data as $row) {
				$og_id = $row['post_slug'];
				$og_photo = $row['photo'];
				$og_title = $row['news_title'];
				$og_description = $row['news_short_content'];
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].' | CV. Cipta Sinergi Manufacturing'.'</title>';	
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
				echo '<title>'.$row['meta_title'].' | CV. Cipta Sinergi Manufacturing'.'</title>';	
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
		echo '<title>'.CAREER.$page['mt_carrier'].'</title>';
	}
	if($slug_arr[0] == 'contact')
	{
		echo '<meta name="description" content="'.$page['md_contact'].'">';
		echo '<meta name="keywords" content="'.$page['mk_contact'].'">';
		echo '<title>'.CONTACT.$page['mt_contact'].'</title>';
	}
	if($slug_arr[0] == 'search')
	{
		echo '<meta name="description" content="'.$page['md_search'].'">';
		echo '<meta name="keywords" content="'.$page['mk_search'].'">';
		echo '<title>'.SEARCH_NEWS.$page['mt_search'].'</title>';
	}
	if($slug_arr[0] == 'terms-and-conditions')
	{
		echo '<meta name="description" content="'.$page['md_term'].'">';
		echo '<meta name="keywords" content="'.$page['mk_term'].'">';
		echo '<title>'.TERMS_AND_CONDITIONS.$page['mt_term'].'</title>';
	}
	if($slug_arr[0] == 'privacy-policy')
	{
		echo '<meta name="description" content="'.$page['md_privacy'].'">';
		echo '<meta name="keywords" content="'.$page['mk_privacy'].'">';
		echo '<title>'.PRIVACY_POLICY.$page['mt_privacy'].'</title>';
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
		.dropdown a,
		.blog-text h3 a,
		.box h3,
		.blog-author li a:hover,
		.sidebar-item li a:hover,
		.all-news a,
		.all-product a,
		ul.timeline li a,
		.nav li a,
		.process-step p,
		.contact-main-home h4,
		.caption-product-area h3,
		.brand-area h3,
		.banner-text h1,
		.counter-item a,
		.content-home h3,
		.slider-animated li:last-child a,
		.slide-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.slide-carousel.owl-carousel .owl-nav .owl-next:hover,
		.main-menu .dropdown:before,
		ul.nav-ciptasin li a,
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

		.nav li a:focus,
		.mean-container .mean-nav ul li a:hover,
		.counter-item a:hover,
		ul.nav-ciptasin li a:hover{
			background: #<?php echo $setting['theme_color_1']; ?>!important;
			color: #fff !important
		}

		ul.timeline li::before {
			border-color: #<?php echo $setting['theme_color_1']; ?>!important;
		}

		/* Theme Color 2 */
		.content-home,
		.bg-choose {
			background-color: #<?php echo $setting['theme_color_2']; ?>!important;	
		}
		.recent-text,
		.map-main-home,
		.blog-text,
		.mean-container .mean-nav ul li a,
		ul.nav-menu li ul li a:before,
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

		.contact-button-home a,
		.contact-area button {
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
		.contact-area button:hover,
		.contact-button-home a:hover {
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
				<div class="col-md-4 col-sm-4">

				</div>
				<div class="col-md-8 col-sm-8">
					<div class="header-contact">
						<ul>
							<li>
								<i class="fa fa-building-o" aria-hidden="true"></i>
								<span title="<?php echo WORKING_HOURS; ?>" data-toggle="tooltip" data-placement="bottom"><?php echo nl2br($setting['footer_working_hour']); ?></span>
							</li>
							<li>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span title="<?php echo COMPANY_PHONE; ?>" data-toggle="tooltip" data-placement="bottom"><?php echo $setting['top_bar_phone']; ?></span>
							</li>
							<li>
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<span title="<?php echo COMPANY_EMAIL; ?>" data-toggle="tooltip" data-placement="bottom"><?php echo $setting['top_bar_email']; ?></span>
							</li>
							<li class="dropdown">
								<i class="fa fa-globe" aria-hidden="true"></i>									
								<a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown">
									<span style="cursor: pointer;">
										<?php if ($this->session->userdata('language')=='eng') {
											echo "English";
										} else {
											echo "Indonesia";
										}?>
									</span>
								</a>
								<ul class="dropdown-menu1">
									<li>
										<?php echo anchor ('language/change/eng','English');?>
									</li>
									<li>
										<?php echo anchor ('language/change/idn','Indonesia');?>
									</li>
								</ul>
							</li>
						</ul>
						<script>
							$(document).ready(function(){
								$('[data-toggle="tooltip"]').tooltip();
							});  
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="strickymenu" class="menu-area">
		<menu>
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12">
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
					<div class="col-md-9 col-sm-12 main-menu" style="display: block;">
						<div class="main-menu-item">				 	
							<ul class="nav nav-ciptasin">
								<li><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>
								<li><a href="<?php echo base_url(); ?>about"><?php echo ABOUT; ?></a></li>
								<li class="dropdown"><a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown"><?php echo PRODUCT; ?></a>
									<ul class="dropdown-menu ciptasin-menu">
										<div class="col-md-7">
											<li class="csm-menu">
												<a href="<?php echo base_url(); ?>portfolio"><?php echo PORTFOLIO; ?></a>
												<ul class="csm-content-menu">
													<?php
													foreach ($portfolio_category as $row) {
														?>
														<li class="csm-category-menu">
															<a href="<?php echo base_url(); ?>portfolio"><?php echo $row['category_name']; ?></a>
														</li>
														<?php
													}
													?>
												</ul>
											</li>
										</div>
										<div class="col-md-5">
											<div class="col-md-4" style="padding: 0;">
												<?php
												$i=0;
												foreach ($product as $row) {
													$i++;
													if($i>1) {break;}
													?>
													<div class="product-menu" style="background-image: url(<?php echo base_url(); ?>public/uploads/products/<?php echo $row['product_name']; ?>);">
													</div>
												</div>
												<div class="col-md-8" style="padding: 0;">
													<div class="desc-product-menu">
														<h4><?php echo NEW_PRODUCT; ?></h4>	
														<a href="<?php echo base_url(); ?>product">
															<h4><?php echo $row['product_caption']; ?></h4>	
															<p><?php echo $row['product_desc']; ?></p>
														</a>
													</div>		
												</div>
												<?php
											}
											?>
										</div>
									</ul>
								</li>
								<li class="dropdown"><a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown"><?php echo FACILITY; ?></a>
									<ul class="dropdown-menu ciptasin-menu">
										<div class="col-md-6">
											<li class="csm-menu">
												<a href="<?php echo base_url(); ?>facility"><?php echo FACILITY; ?></a>
												<ul class="csm-content-menu">
													<?php
													foreach ($facility as $row) {
														?>
														<li class="csm-category-menu">
															<a href="<?php echo base_url(); ?>facility/post/<?php echo $row['slug_facility']; ?>"><?php echo $row['name']; ?></a>
														</li>
														<?php
													}
													?>
												</ul>
											</li>
										</div>
										<div class="col-md-6">
											<li class="csm-menu">
												<a href="<?php echo base_url(); ?>service"><?php echo SERVICE; ?></a>
												<ul class="csm-content-menu">
													<?php
													$i=0;
													foreach ($service as $row) {
														$i++;
														?>
														<li class="csm-category-menu">
															<a href="<?php echo base_url(); ?>service/post/<?php echo $row['slug_service']; ?>"><?php echo $row['heading']; ?></a>
														</li>
														<?php
													}
													?>
												</ul>
											</li>
										</div>
									</ul>
								</li>
								<li class="dropdown"><a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown"><?php echo ELECTRONICS_DIVISION; ?></a>
									<ul class="dropdown-menu ciptasin-menu">
										<div class="col-md-4">
											<li class="csm-menu">
												<a href="<?php echo base_url(); ?>electronics-division">AVIATION ELECTRONICS</a>
												<ul class="csm-content-menu">
													<li class="csm-category-menu">
														<a href="<?php echo base_url(); ?>electronics-division/post/display-systems-multi-function-display-mfd-moving-map-display-etc.html">Display systems Multi-Function Display-MFD Moving Map Display etc</a>
													</li>
													<li class="csm-category-menu">
														<a href="<?php echo base_url(); ?>electronics-division/post/mission-computers.html">Mission computers</a>
													</li>
													<li class="csm-category-menu">
														<a href="<?php echo base_url(); ?>electronics-division/post/sensor-interface-units.html">Sensor interface units</a>
													</li>
												</ul>
											</li>
										</div>
										<div class="col-md-4">
											<li class="csm-menu">
												<a href="<?php echo base_url(); ?>electronics-division">DEFENSE ELECTRONICS</a>
												<ul class="csm-content-menu">
													<li class="csm-category-menu">
														<a href="<?php echo base_url(); ?>electronics-division/post/ruggedized-electronic-controllers.html">Ruggedized electronic controllers</a>
													</li>
													<li class="csm-category-menu">
														<a href="<?php echo base_url(); ?>electronics-division/post/harsh-environmental-power-drivers.html">Harsh environmental power drivers</a>
													</li>
												</ul>
											</li>
										</div>
										<div class="col-md-4">
											<li class="csm-menu">
												<a href="<?php echo base_url(); ?>electronics-division">INDUSTRIAL ELECTRONICS</a>
												<ul class="csm-content-menu">
													<li class="csm-category-menu">
														<a href="<?php echo base_url(); ?>electronics-division/post/plc-controller-design-and-implementations.html">PLC Controller design and implementations</a>
													</li>
													<li class="csm-category-menu">
														<a href="<?php echo base_url(); ?>electronics-division/post/power-electronics-design-and-manufacturing.html">Power electronics design and manufacturing</a>
													</li>
													<li class="csm-category-menu">
														<a href="<?php echo base_url(); ?>electronics-division/post/man-machine-interface.html">Man-Machine Interface</a>
													</li>
												</ul>
											</li>
										</div>

									</ul>
								</li>
								<li class="dropdown"><a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown"><?php echo PAGE; ?></a>
									<ul class="dropdown-menu ciptasin-menu">
										<div class="col-md-3">
											<li class="csm-menu">
											</li>
										</div>
										<div class="col-md-2">
											<li class="csm-menu">
												<a href="<?php echo base_url(); ?>gallery"><?php echo GALLERY; ?></a>
											</li>
										</div>
										<div class="col-md-2">
											<li class="csm-menu">
												<a href="<?php echo base_url(); ?>news/page"><?php echo NEWS; ?></a>
											</li>
										</div>
										<div class="col-md-5">
											<div class="col-md-4" style="padding: 0;">
												<?php
												$i=0;
												foreach ($latest_news as $row) {
													$i++;
													if($i>1) {break;}
													?>
													<div class="product-menu" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>);">
													</div>
												</div>
												<div class="col-md-8" style="padding: 0;">
													<div class="desc-product-menu">
														<h4><?php echo LATEST_NEWS; ?></h4>	
														<a href="<?php echo base_url(); ?>news/post/<?php echo $row['post_slug']; ?>">
															<h4><?php echo $row['news_title']; ?></h4>	
															<p><?php echo $row['news_short_content']; ?></p>
														</a>
													</div>		
												</div>
												<?php
											}
											?>
										</div>
									</ul>
								</li>
								<li><a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>