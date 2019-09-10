<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="col-md-6">
			</div>
			<div class="col-md-6" style="padding: 0;">
				<div class="banner-text">
					<h1><?php echo ABOUT_US; ?></h1>
				</div>
			</div>
		</div>
	</div>


	<div class="container pt_20 pb_20 bg-about">
		<div class="row">
			<?php if($page['about_photo']!=""): ?>
				<div class="col-md-12">
					<img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['about_photo']; ?>" alt=""><br>
				</div>
			<?php endif; ?>

			<div class="col-md-12">
				<h3><?php echo $page['about_heading']; ?></h3>
				<p>
					<?php echo $page['about_content']; ?>
				</p>
			</div>
			<div class="container">
				<div class="col-sm-2 about-fade" style="padding-left: 0;">
					<nav class="nav-sidebar">
						<ul class="nav tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Profile</a></li>
							<li class=""><a href="#tab3" data-toggle="tab">Structure</a></li>
							<li class=""><a href="#tab4" data-toggle="tab">Visi & Misi</a></li>    
						</ul>
					</nav>
					<div class="add"></div>
				</div>
				<!-- tab content -->
				<div class="tab-content">
					<div class="tab-pane active text-style" id="tab1">
						<h2><?php echo $page['profile_heading']; ?></h2>
						<div class="col-md-10">
							<p>
								<?php echo $page['profile_content']; ?>
							</p>
						</div>
					</div>
					<div class="tab-pane " id="tab3">
						<h2><?php echo $page['structure_heading']; ?></h2>
						<div class="col-md-10">
							<img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['structure_photo']; ?>">
						</div>
					</div>
					<div class="tab-pane" id="tab4">
						<!-- Vision & Mision Area-->
						<h2><?php echo $page['vision_heading']; ?> & <?php echo $page['mission_heading']; ?></h2>

						<div class="col-md-5 col-sm-5">
							<div class="about-mission">
								<h3><?php echo $page['vision_heading']; ?></h3>
								<p>
									<?php echo $page['vision_content']; ?>
								</p>
							</div>
						</div>
						<div class="col-md-5 col-sm-5">
							<div class="about-mission">
								<h3><?php echo $page['mission_heading']; ?></h3>
								<p>
									<?php echo $page['mission_content']; ?>
								</p>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$('.btn-circle').on('click',function(){
			$('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
			$(this).addClass('btn-info').removeClass('btn-default').blur();
		});

		$('.btn-circle').on('click',function(){
			$('.btn-circle.act').removeClass('act').addClass('');
			$(this).addClass('act').removeClass('').blur();
		});
	});
</script>