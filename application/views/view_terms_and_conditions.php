<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo TERMS_AND_CONDITIONS; ?></h1>
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
						<a href="<?php echo base_url(); ?>terms-and-conditions"><span><?php echo TERMS_AND_CONDITIONS; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>
	<div class="faq-home" style="padding-top:40px;padding-bottom:30px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">

					<?php echo $page['term_content']; ?>

				</div>
			</div>
		</div>
	</div>
</div>