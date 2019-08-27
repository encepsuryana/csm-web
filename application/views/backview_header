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
	foreach ($language as $lang) {
		define($lang['name'], $lang['value']);
	}

	if($slug_arr[0] == '')
	{
		echo '<meta name="description" content="'.$page['md_home'].'">';
		echo '<meta name="keywords" content="'.$page['mk_home'].'">';
		echo '<title>'.$page['mt_home'].'</title>';
	}
	if($slug_arr[0] == 'about')
	{
		echo '<meta name="description" content="'.$page['md_about'].'">';
		echo '<meta name="keywords" content="'.$page['mk_about'].'">';
		echo '<title>'.$page['mt_about'].'</title>';
	}
	if($slug_arr[0] == 'gallery')
	{
		echo '<meta name="description" content="'.$page['md_gallery'].'">';
		echo '<meta name="keywords" content="'.$page['mk_gallery'].'">';
		echo '<title>'.$page['mt_gallery'].'</title>';
	}
	if($slug_arr[0] == 'faq')
	{
		echo '<meta name="description" content="'.$page['md_faq'].'">';
		echo '<meta name="keywords" content="'.$page['mk_faq'].'">';
		echo '<title>'.$page['mt_faq'].'</title>';
	}
	if($slug_arr[0] == 'service')
	{
		if(!isset($slug_arr[1])) {
			echo '<meta name="description" content="'.$page['md_service'].'">';
			echo '<meta name="keywords" content="'.$page['mk_service'].'">';
			echo '<title>'.$page['mt_service'].'</title>';	
		} else {
			$single_service_data = $this->Model_common->get_single_service_data($slug_arr[2]);
			foreach($single_service_data as $row) {
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].'</title>';	
			}
		}		
	}
	if($slug_arr[0] == 'portfolio')
	{
		if(!isset($slug_arr[1])) {
			echo '<meta name="description" content="'.$page['md_portfolio'].'">';
			echo '<meta name="keywords" content="'.$page['mk_portfolio'].'">';
			echo '<title>'.$page['mt_portfolio'].'</title>';	
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
		echo '<title>'.$page['mt_testimonial'].'</title>';
	}
	if(isset($slug_two)) {
		if($slug_two == 'news/page')
		{
			echo '<meta name="description" content="'.$page['md_news'].'">';
			echo '<meta name="keywords" content="'.$page['mk_news'].'">';
			echo '<title>'.$page['mt_news'].'</title>';	
		}
		if($slug_two == 'news/view')
		{
			$single_news_data = $this->Model_common->get_single_news_data($slug_arr[2]);
			foreach($single_news_data as $row) {
				$og_id = $row['news_id'];
		    	$og_photo = $row['photo'];
		    	$og_title = $row['news_title'];
		    	$og_description = $row['news_short_content'];
				echo '<meta name="description" content="'.$row['meta_description'].'">';
				echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
				echo '<title>'.$row['meta_title'].'</title>';	
			}
			?>
			<meta property="og:title" content="<?php echo $og_title; ?>">
			<meta property="og:type" content="website">
			<meta property="og:url" content="<?php echo base_url().'news/view/'.$og_id; ?>">
			<meta property="og:description" content="<?php echo $og_description; ?>">
			<meta property="og:image" content="<?php echo base_url(); ?>public/uploads/<?php echo $og_photo; ?>">
			<?php
		}	
	}
	if($slug_arr[0] == 'contact')
	{
		echo '<meta name="description" content="'.$page['md_contact'].'">';
		echo '<meta name="keywords" content="'.$page['mk_contact'].'">';
		echo '<title>'.$page['mt_contact'].'</title>';
	}
	if($slug_arr[0] == 'search')
	{
		echo '<meta name="description" content="'.$page['md_search'].'">';
		echo '<meta name="keywords" content="'.$page['mk_search'].'">';
		echo '<title>'.$page['mt_search'].'</title>';
	}
	if($slug_arr[0] == 'terms-and-conditions')
	{
		echo '<meta name="description" content="'.$page['md_term'].'">';
		echo '<meta name="keywords" content="'.$page['mk_term'].'">';
		echo '<title>'.$page['mt_term'].'</title>';
	}
	if($slug_arr[0] == 'privacy-policy')
	{
		echo '<meta name="description" content="'.$page['md_privacy'].'">';
		echo '<meta name="keywords" content="'.$page['mk_privacy'].'">';
		echo '<title>'.$page['mt_privacy'].'</title>';
	}	
	?>

	<link href="https://fonts.googleapis.com/css?family=Francois+One|Lato:400,700" rel="stylesheet">

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
	<link rel='stylesheet' href='<?php echo base_url(); ?>public/style.css'>

	<?php //if($slug_arr[0] == 'news-single.php'): ?>
		<!-- <meta property="og:title" content="<?php echo $og_title; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo BASE_URL.'news-single.php?id='.$og_id; ?>">
		<meta property="og:description" content="<?php echo $og_description; ?>">
		<meta property="og:image" content="<?php echo BASE_URL; ?>uploads/<?php echo $og_photo; ?>"> -->
	<?php //endif; ?>

	


	<style>
		
		/* Theme Color 1 */
		.header-area,
		.slider-animated li a,
		.services-text,
		.team-text,
		.faq-gallery .panel-default > .panel-heading,
		.recent-text,
		.caption-text,
		.blog-text,
		.footer-main,
		.mission-icon,
		.testimonial-area.main-testimonial .testimonial-detail,
		.main-testimonial .testimonial-carousel .owl-dots .owl-dot,
		.contact-area button {
			background: #<?php echo $setting['theme_color_1']; ?>!important;
		}
		.bg-choose {
			background-color: #<?php echo $setting['theme_color_1']; ?>!important;	
		}
		ul.nav-menu li a,
		.team-carousel.owl-carousel .owl-nav .owl-prev, 
		.team-carousel.owl-carousel .owl-nav .owl-next,
		.blog-carousel.owl-carousel .owl-nav .owl-prev, 
		.blog-carousel.owl-carousel .owl-nav .owl-next,
		.brand-carousel.owl-carousel .owl-nav .owl-prev, 
		.brand-carousel.owl-carousel .owl-nav .owl-next {
			color: #<?php echo $setting['theme_color_1']; ?>!important;
		}
		.slider-animated li a,
		.team-carousel.owl-carousel .owl-nav .owl-prev, 
		.team-carousel.owl-carousel .owl-nav .owl-next,
		.blog-carousel.owl-carousel .owl-nav .owl-prev, 
		.blog-carousel.owl-carousel .owl-nav .owl-next,
		.brand-carousel.owl-carousel .owl-nav .owl-prev, 
		.brand-carousel.owl-carousel .owl-nav .owl-next {
			border-color: #<?php echo $setting['theme_color_1']; ?>!important;	
		}


		/* Theme Color 2 */
		ul.nav-menu li ul li a:before,
		.slider-animated li:last-child a,
		.client-name,
		.testimonial-carousel .owl-dots .owl-dot.active,
		.team-social li a:hover,
		.faq-gallery .panel-group .panel-heading a:after,
		.caption-bg,
		.lightbox-bg,
		.hvr-bounce-to-right::before,
		.blog-author li.gro,
		.footer-contact-area,
		.sidebar-item h3:before,
		.searchbar-item button.btn:hover,
		.single-blog-author li.gro,
		.scroll-top,
		.contact-area button:hover {
			background: #<?php echo $setting['theme_color_2']; ?>!important;
		}
		.services-link a {
			background-color: #<?php echo $setting['theme_color_2']; ?>!important;	
		}
		ul.nav-menu li a:hover,
		.header-social a:hover,
		.slide-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.slide-carousel.owl-carousel .owl-nav .owl-next:hover,
		.choose-text h3,
		.services-text h3 a,
		.lightbox-icon a:hover,
		.team-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.team-carousel.owl-carousel .owl-nav .owl-next:hover,
		.faq-gallery h4.panel-title a:hover,
		.caption-icon a:hover,
		.blog-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.blog-carousel.owl-carousel .owl-nav .owl-next:hover,
		.blog-text h3 a,
		.brand-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.brand-carousel.owl-carousel .owl-nav .owl-next:hover,
		.mission-icon,
		.sidebar-item li a:hover,
		.carousel-inner .lightbox-inner a {
			color: #<?php echo $setting['theme_color_2']; ?>!important;
		}
		.slide-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.slide-carousel.owl-carousel .owl-nav .owl-next:hover,
		.slider-animated li:last-child a,
		.choose-icon img,
		.team-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.team-carousel.owl-carousel .owl-nav .owl-next:hover,
		.team-text,
		.testimonial-carousel .owl-dots .owl-dot.active,
		.team-social li a:hover,
		.blog-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.blog-carousel.owl-carousel .owl-nav .owl-next:hover,
		.brand-carousel.owl-carousel .owl-nav .owl-prev:hover, 
		.brand-carousel.owl-carousel .owl-nav .owl-next:hover,
		.carousel-indicators li,
		.form-control:focus,
		.contact-area button:hover {
			border-color: #<?php echo $setting['theme_color_2']; ?>!important;
		}
		ul.nav-menu li ul,
		.services-text,
		.recent-text,
		.caption-text,
		.blog-text {
			border-top-color: #<?php echo $setting['theme_color_2']; ?>!important;
		}
		.single-service-photo img {
			border-bottom-color: #<?php echo $setting['theme_color_2']; ?>!important;
		}



		.slider-animated li a:hover {
			background: #333!important;
			border-color: #333!important;
		}

		.slider-animated li:last-child a:hover {
			background: #333!important;
			border-color: #333!important;
			color: #fff!important;
		}
		
	</style>

</head>

<body>

<?php echo $comment['code_body']; ?>

	<div id="preloader">
		<div id="status" style="background-image: url('<?php echo base_url(); ?>public/img/preloader.gif')"></div>
	</div>

	<div class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<div class="header-contact">
						<ul>
							<li>
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<span><?php echo $setting['top_bar_email']; ?></span>
							</li>
							<li>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span><?php echo $setting['top_bar_phone']; ?></span>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="header-social">
						<ul>
							<?php
							foreach ($social as $row) 
							{
								if($row['social_url']!='')
								{
									echo '<li><a href="'.$row['social_url'].'"><i class="'.$row['social_icon'].'"></i></a></li>';
								}
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="strickymenu" class="menu-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="logo">
						<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="Logo"></a>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 main-menu" style="display: block;">
					<div class="main-menu-item">				 	
				 		<ul class="nav-menu">
				 			<li><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>							
							<li class="menu-item-has-children"><a href="javascript:void();"><?php echo PAGE; ?></a>
								<ul class="sub-menu">
									<li><a href="<?php echo base_url(); ?>about"><?php echo ABOUT; ?></a></li>
									<li><a href="<?php echo base_url(); ?>gallery"><?php echo GALLERY; ?></a></li>
									<li><a href="<?php echo base_url(); ?>faq"><?php echo FAQ; ?></a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url(); ?>service"><?php echo SERVICE; ?></a></li>
							<li><a href="<?php echo base_url(); ?>portfolio"><?php echo PORTFOLIO; ?></a></li>
							<li><a href="<?php echo base_url(); ?>testimonial"><?php echo TESTIMONIAL; ?></a></li>
							<li><a href="<?php echo base_url(); ?>news/page"><?php echo NEWS; ?></a></li>
							<li><a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>