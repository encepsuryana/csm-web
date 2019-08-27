<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_faq']; ?>)">
	<div class="bg"></div>
	<div class="bannder-table">
		<div class="banner-text">
			<h1><?php echo $page['faq_heading']; ?></h1>
		</div>
	</div>
</div>

<div class="faq-home" style="padding-top:10px;padding-bottom:30px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="faq-gallery">
					<div class="panel-group" id="accordion">
						<?php
						$i=0;
						foreach ($faq as $row) {
							$i++;
							?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row['faq_id']; ?>"><?php echo $row['faq_title']; ?></a>
									</h4>
								</div>
								<div id="<?php echo $row['faq_id']; ?>" class="panel-collapse collapse <?php if($i==1) {echo 'in';} ?>">
									<div class="panel-body">
										<?php echo $row['faq_content']; ?>
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>