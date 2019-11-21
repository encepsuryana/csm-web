<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wilujeng Sumping, <?php echo $this->session->userdata('full_name');?></title>
	<link rel="icon" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" type="image/png">
	
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/summernote.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/style.css">
	
	<style>
		.skin-blue .wrapper,
		.skin-blue .main-header .logo,
		.skin-blue .main-sidebar {
			background-color: #ebeff4 !important;
		}
		.content-header>h1,
		.content-header .content-header-left h1,
		h3 {
			color: #3498db!important;
		}

		.box.box-info {
			border-top-color: #3498db!important;
		}

		.nav-tabs-custom>.nav-tabs>li.active {
			border-top-color: transparent !important;
		}

		.skin-blue .sidebar a {
			color: #455a64!important;
		}

		.skin-blue .sidebar-menu>li>.treeview-menu {
			margin: 0!important;
		}

		.nav-tabs-custom>.nav-tabs>li {
			border-top-width: 1px!important;
		}

	</style>
	
</head>

<body class="hold-transition fixed skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/dashboard" class="logo">
				<span class="logo-lg">
					<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo_admin']; ?>" alt="" style="max-width:100%;max-height:50px;padding:5px 0;">
				</span>
			</a>

			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav link-visit">

						<li>
							<a href="<?php echo base_url(); ?>" target="_blank"> <i class="fa fa-sign-in" aria-hidden="true"></i> <span>Lihat Website</span></a>
						</li>
						<?php
						$base_url = base_url();
						$full_url = base_url(uri_string());
						$final_url = str_replace($base_url, "", $full_url);

						$final_url_other_arr = explode('/',$final_url);
						if(isset($final_url_other_arr[2])) {
							$final_url_other = $final_url_other_arr[0].'/'.$final_url_other_arr[1].'/'.$final_url_other_arr[2];

						} else {
							$final_url_other = $final_url_other_arr[0].'/'.$final_url_other_arr[1];
						}
						?>

						<?php if( $this->session->userdata('role') == 'admin' ): ?>
							<li class="treeview <?php if( ($final_url_other == 'admin/setting') ) {echo 'active';} ?>">
								<a href="<?php echo base_url().$this->session->userdata('role'); ?>/setting">
									<i class="fa fa-cog"></i> <span>Settings</span>
								</a>
							</li>
						<?php endif; ?>   

						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php if($this->session->userdata('photo') == ''): ?>
									<img src="<?php echo base_url(); ?>public/img/no-photo.png" class="user-image" alt="user photo">
									<?php else: ?>
										<img src="<?php echo base_url(); ?>public/uploads/<?php echo $this->session->userdata('photo'); ?>" class="user-image" alt="user photo">
									<?php endif; ?>
									
									<span class="hidden-xs"></span>
								</a>
								<ul class="dropdown-menu">
									<li class="user-footer">
										<div style="text-align: left;
										margin: 10px;
										margin-bottom: 20px;">

										<img style="width: 50px; height: 50px; margin: 0; margin-right: 20px;" src="<?php echo base_url(); ?>public/uploads/<?php echo $this->session->userdata('photo'); ?>" class="user-image" alt="user photo">


										<a href="<?php echo base_url().$this->session->userdata('role'); ?>/profile"><?php echo $this->session->userdata('full_name'); ?> (<?php echo $this->session->userdata('role');?>)</a>


										<span style="margin: 0; font-size: 10px; color: #868686;"><?php echo $this->session->userdata('email'); ?></span>


									</div>
									<div style="margin-left: 69%;">
										<a href="<?php echo base_url().$this->session->userdata('role'); ?>/login/logout">
											<i class="fa fa-sign-out" aria-hidden="true"></i> Log out
										</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</div>

			</nav>
		</header>

		<?php
		$base_url = base_url();
		$full_url = base_url(uri_string());
		$final_url = str_replace($base_url, "", $full_url);
		?>

		<aside class="main-sidebar">
			<section class="sidebar">

				<?php
				$final_url_other_arr = explode('/',$final_url);
				if(isset($final_url_other_arr[2])) {
					$final_url_other = $final_url_other_arr[0].'/'.$final_url_other_arr[1].'/'.$final_url_other_arr[2];

				} else {
					$final_url_other = $final_url_other_arr[0].'/'.$final_url_other_arr[1];
				}
				?>

				<ul class="sidebar-menu">
					<li class="treeview <?php if($final_url_other == $this->session->userdata('role').'/dashboard') {echo 'active';} ?>">
						<a href="<?php echo base_url().$this->session->userdata('role'); ?>/dashboard">
							<i class="fa fa-tachometer"></i> <span>Dashboard</span>
						</a>
					</li>

					<!-- Admin Role -->
					<?php if( $this->session->userdata('role') == 'admin' ): ?>
						<li class="treeview <?php if(($final_url_other == 'admin/content-home')||($final_url_other == 'admin/content-home/edit')||($final_url_other == 'admin/content-home/company-profile') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-home"></i>
								<span>Konten Beranda</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/content-home"><i class="fa fa-industry"></i> Konten Utama</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/content-home/company-profile"><i class="fa fa-file-pdf-o"></i> Profile Perusahaan</a></li>
							</ul>
						</li>
						<li class="treeview <?php if( ($final_url_other == 'admin/news/add')||($final_url_other == 'admin/news')||($final_url_other == 'admin/news/edit')||($final_url_other == 'admin/news-category/add')||($final_url_other == 'admin/news-category')||($final_url_other == 'admin/news-category/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-newspaper-o"></i>
								<span>Kelola Berita</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/news-category"><i class="fa fa-plus-square-o"></i> Kategori Berita</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/news"><i class="fa fa-file-text-o"></i> Berita</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/slider/add')||($final_url_other == 'admin/slider')||($final_url_other == 'admin/slider/edit') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/slider">
								<i class="fa fa fa-sliders"></i> <span>Slider</span>
							</a>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/service/add')||($final_url_other == 'admin/service')||($final_url_other == 'admin/service/edit') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/service">
								<i class="fa fa-briefcase"></i> <span>Layanan</span>
							</a>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/facility/add')||($final_url_other == 'admin/facility')||($final_url_other == 'admin/facility/edit')||($final_url_other == 'admin/facility-category/add')||($final_url_other == 'admin/facility-category')||($final_url_other == 'admin/facility-category/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-industry"></i>
								<span>Fasilitas</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/facility-category"><i class="fa fa-th-list"></i> Kategori Fasilitas</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/facility"><i class="fa fa-tag"></i> Fasilitas</a></li>
							</ul>
						</li>

						<li class="treeview <?php if(($final_url_other == 'admin/aeronautical-electronics-engineering/add')||($final_url_other == 'admin/aeronautical-electronics-engineering')||($final_url_other == 'admin/aeronautical-electronics-engineering/edit')||($final_url_other == 'admin/aeronautical-electronics-engineering-category/add')||($final_url_other == 'admin/aeronautical-electronics-engineering-category')||($final_url_other == 'admin/aeronautical-electronics-engineering-category/edit')||($final_url_other == 'admin/aeronautical-electronics-engineering-desc')||($final_url_other == 'admin/aeronautical-electronics-engineering-desc/update')||($final_url_other == 'admin/aeronautical-electronics-engineering-category/update')) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-microchip"></i>
								<span>Aviasi Elektronik</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/aeronautical-electronics-engineering-category"><i class="fa fa-braille"></i> Kategori Aviasi Elektronik</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/aeronautical-electronics-engineering-desc"><i class="fa fa-pencil-square-o"></i> Des. Aviasi Elektronik</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/aeronautical-electronics-engineering"><i class="fa fa-trello"></i> Aviasi Elektronik</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/partner/add')||($final_url_other == 'admin/partner')||($final_url_other == 'admin/partner/edit') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/partner">
								<i class="fa fa-clipboard"></i> <span>Partner</span>
							</a>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/owner') || ($final_url_other == 'admin/owner/update') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/owner">
								<i class="fa fa-user-o"></i> <span>Owner</span>
							</a>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/product/add')||($final_url_other == 'admin/product')||($final_url_other == 'admin/product/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-cubes"></i>
								<span>Produk Galeri</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/product"><i class="fa fa fa-cube"></i>Produk</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/photo/add')||($final_url_other == 'admin/photo')||($final_url_other == 'admin/photo/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-camera"></i>
								<span>Galeri Foto</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/photo"><i class="fa fa-camera-retro"></i>Foto</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/portfolio/add')||($final_url_other == 'admin/portfolio')||($final_url_other == 'admin/portfolio/edit')||($final_url_other == 'admin/portfolio-category/add')||($final_url_other == 'admin/portfolio-category')||($final_url_other == 'admin/portfolio-category/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-list-alt"></i>
								<span>Portofolio</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio-category"><i class="fa fa-list-ul"></i> Kategori Portofolio</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio"><i class="fa fa-list-ol"></i> Portofolio</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/testimonial/add')||($final_url_other == 'admin/testimonial')||($final_url_other == 'admin/testimonial/edit')||($final_url_other == 'admin/testimonial/main-photo') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-user-plus"></i>
								<span>Testimonial</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/testimonial"><i class="fa fa-comments-o"></i>Testimonial</a></li>
							</ul>
						</li>	

						<li class="treeview <?php if( ($final_url_other == 'admin/page') || ($final_url_other == 'admin/page/update')) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/page">
								<i class="fa fa-file-text"></i> <span>Halaman</span>
							</a>
						</li>


						<li class="treeview <?php if( ($final_url_other == 'admin/comment') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/comment">
								<i class="fa fa-comment"></i> <span>Komentar</span>
							</a>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/language') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/language">
								<i class="fa fa-language"></i> <span>Bahasa</span>
							</a>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'admin/social-media') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/social-media">
								<i class="fa fa-address-book"></i> <span>Media Sosial</span>
							</a>
						</li>
					<?php endif; ?>   
					<!-- End admin Role -->


					<!-- HRD Role -->
					<?php if( $this->session->userdata('role') == 'hrd' ): ?>
						<li class="treeview <?php if(($final_url_other == 'hrd/content-home/company-profile')) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-home"></i>
								<span>Konten Beranda</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/content-home/company-profile"><i class="fa fa-file-pdf-o"></i> Profile Perusahaan</a></li>
							</ul>
						</li>


						<li class="treeview <?php if( ($final_url_other == 'hrd/news/add')||($final_url_other == 'hrd/news')||($final_url_other == 'hrd/news/edit')||($final_url_other == 'hrd/news-category/add')||($final_url_other == 'hrd/news-category')||($final_url_other == 'hrd/news-category/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-newspaper-o"></i>
								<span>Kelola Berita</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/news-category"><i class="fa fa-plus-square-o"></i> Kategori Berita</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/news"><i class="fa fa-file-text-o"></i> Berita</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'hrd/slider/add')||($final_url_other == 'hrd/slider')||($final_url_other == 'hrd/slider/edit') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/slider">
								<i class="fa fa fa-sliders"></i> <span>Slider</span>
							</a>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'hrd/service/add')||($final_url_other == 'hrd/service')||($final_url_other == 'hrd/service/edit') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/service">
								<i class="fa fa-briefcase"></i> <span>Layanan</span>
							</a>
						</li>

						<li class="treeview <?php if(($final_url_other == 'hrd/facility')||($final_url_other == 'hrd/facility-category')) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-industry"></i>
								<span>Fasilitas</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/facility-category"><i class="fa fa-th-list"></i> Kategori Fasilitas</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/facility"><i class="fa fa-tag"></i> Fasilitas</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'hrd/aeronautical-electronics-engineering/add')||($final_url_other == 'hrd/aeronautical-electronics-engineering')||($final_url_other == 'hrd/aeronautical-electronics-engineering/edit')||($final_url_other == 'hrd/aeronautical-electronics-engineering-category/add')||($final_url_other == 'hrd/aeronautical-electronics-engineering-category')||($final_url_other == 'hrd/aeronautical-electronics-engineering-category/edit')||($final_url_other == 'hrd/aeronautical-electronics-engineering-desc/update')||($final_url_other == 'hrd/aeronautical-electronics-engineering-desc') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-microchip"></i>
								<span>Aviasi Elektronik</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/aeronautical-electronics-engineering-category"><i class="fa fa-braille"></i>Kategori Aviasi Elektronik</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/aeronautical-electronics-engineering-desc"><i class="fa fa-pencil-square-o"></i> Des. Aviasi Elektronik</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/aeronautical-electronics-engineering"><i class="fa fa-trello"></i> Aviasi Elektronik</a></li>
							</ul>
						</li>

						<li class="treeview <?php if(($final_url_other == 'hrd/product')) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-cubes"></i>
								<span>Produk Galeri</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/product"><i class="fa fa fa-cube"></i>Produk</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'hrd/photo/add')||($final_url_other == 'hrd/photo')||($final_url_other == 'hrd/photo/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-camera"></i>
								<span>Galeri Foto</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/photo"><i class="fa fa-camera-retro"></i>Foto</a></li>
							</ul>
						</li>

						<li class="treeview <?php if(($final_url_other == 'hrd/portfolio')||($final_url_other == 'hrd/portfolio-category')) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-list-alt"></i>
								<span>Portfolio</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio-category"><i class="fa fa-list-ul"></i> Kategori Portofolio</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio"><i class="fa fa-list-ol"></i> Portfolio</a></li>
							</ul>
						</li>

						<li class="treeview <?php if(($final_url_other == 'hrd/testimonial')) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-user-plus"></i>
								<span>Testimonial</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/testimonial"><i class="fa fa-comments-o"></i>Testimonial</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'hrd/partner/add')||($final_url_other == 'hrd/partner')||($final_url_other == 'hrd/partner/edit') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/partner">
								<i class="fa fa-clipboard"></i> <span>Partner</span>
							</a>
						</li>


						<li class="treeview <?php if( ($final_url_other == 'hrd/page') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/page">
								<i class="fa fa-file-text"></i> <span>Halaman</span>
							</a>
						</li>
					<?php endif; ?> 
					<!--End HRD Role --> 


					<!-- Staff Role -->
					<?php if( $this->session->userdata('role') == 'staff' ): ?>
						<li class="treeview <?php if($final_url_other == 'staff/content-home/company-profile') {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-home"></i>
								<span>Konten Beranda</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/content-home/company-profile"><i class="fa fa-file-pdf-o"></i> Profile Perusahaan</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'staff/news/add')||($final_url_other == 'staff/news')||($final_url_other == 'staff/news/edit')||($final_url_other == 'staff/news-category/add')||($final_url_other == 'staff/news-category')||($final_url_other == 'staff/news-category/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-newspaper-o"></i>
								<span>Kelola Berita</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/news-category"><i class="fa fa-plus-square-o"></i> Kategori Berita</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/news"><i class="fa fa-file-text-o"></i> Berita</a></li>
							</ul>
						</li>
						<li class="treeview <?php if( ($final_url_other == 'staff/slider/add')||($final_url_other == 'staff/slider')||($final_url_other == 'staff/slider/edit') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/slider">
								<i class="fa fa fa-sliders"></i> <span>Slider</span>
							</a>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'staff/service/add')||($final_url_other == 'staff/service')||($final_url_other == 'staff/service/edit') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/service">
								<i class="fa fa-briefcase"></i> <span>Layanan</span>
							</a>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'staff/facility/add')||($final_url_other == 'staff/facility')||($final_url_other == 'staff/facility/edit')||($final_url_other == 'staff/facility-category/add')||($final_url_other == 'staff/facility-category')||($final_url_other == 'staff/facility-category/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-list-alt"></i>
								<span>Facility</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/facility-category"><i class="fa fa-th-list"></i> Facility Category</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/facility"><i class="fa fa-tag"></i> Facility</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'staff/aeronautical-electronics-engineering/add')||($final_url_other == 'staff/aeronautical-electronics-engineering')||($final_url_other == 'staff/aeronautical-electronics-engineering/edit')||($final_url_other == 'staff/aeronautical-electronics-engineering-category/add')||($final_url_other == 'staff/aeronautical-electronics-engineering-category')||($final_url_other == 'staff/aeronautical-electronics-engineering-category/edit')||($final_url_other == 'staff/aeronautical-electronics-engineering-desc/update')||($final_url_other == 'staff/aeronautical-electronics-engineering-desc') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-microchip"></i>
								<span>Aviasi Elektronik</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/aeronautical-electronics-engineering-category"><i class="fa fa-braille"></i> Kategori Aviasi Elektronik</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/aeronautical-electronics-engineering-desc"><i class="fa fa-pencil-square-o"></i> Des. Aviasi Elektronik</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/aeronautical-electronics-engineering"><i class="fa fa-trello"></i> Aviasi Elektronik</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'staff/product/add')||($final_url_other == 'staff/product')||($final_url_other == 'staff/product/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-cubes"></i>
								<span>Produk Galeri</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/product"><i class="fa fa fa-cube"></i>Produk</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'staff/photo/add')||($final_url_other == 'staff/photo')||($final_url_other == 'staff/photo/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-camera"></i>
								<span>Galeri Foto</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/photo"><i class="fa fa-camera-retro"></i>Photo</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'staff/portfolio/add')||($final_url_other == 'staff/portfolio')||($final_url_other == 'staff/portfolio/edit')||($final_url_other == 'staff/portfolio-category/add')||($final_url_other == 'staff/portfolio-category')||($final_url_other == 'staff/portfolio-category/edit') ) {echo 'active';} ?>">
							<a href="#">
								<i class="fa fa-list-alt"></i>
								<span>Portfolio</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio-category"><i class="fa fa-list-ul"></i> Kategori Portofolio</a></li>
								<li><a href="<?php echo base_url().$this->session->userdata('role'); ?>/portfolio"><i class="fa fa-list-ol"></i> Portfolio</a></li>
							</ul>
						</li>

						<li class="treeview <?php if( ($final_url_other == 'staff/partner/add')||($final_url_other == 'staff/partner')||($final_url_other == 'staff/partner/edit') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/partner">
								<i class="fa fa-clipboard"></i> <span>Partner</span>
							</a>
						</li>


						<li class="treeview <?php if( ($final_url_other == 'staff/page') ) {echo 'active';} ?>">
							<a href="<?php echo base_url().$this->session->userdata('role'); ?>/page">
								<i class="fa fa-file-text"></i> <span>Halaman</span>
							</a>
						</li>
					<?php endif; ?>   
					<!-- End STAFF Role -->    
				</ul>
			</section>
		</aside>

		<div class="content-wrapper">