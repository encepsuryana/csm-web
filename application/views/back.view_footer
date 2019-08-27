<div class="footer-contact-area">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="footer-contact-item">
					<ul>
						<li><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['footer_address_icon']; ?>" alt="Icon"></li>
						<li>
							<h4><?php echo ADDRESS; ?></h4>
							<p>
								<?php echo nl2br($setting['footer_address']); ?>
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="footer-contact-item">
					<ul>
						<li><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['footer_phone_icon']; ?>" alt="Icon"></li>
						<li>
							<h4><?php echo CALL_US; ?></h4>
							<p>
								<?php echo nl2br($setting['footer_phone']); ?>
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="footer-contact-item">
					<ul>
						<li><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['footer_working_hour_icon']; ?>" alt="Icon"></li>
						<li>
							<h4><?php echo WORKING_HOURS; ?></h4>
							<p>
								<?php echo nl2br($setting['footer_working_hour']); ?>
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="footer-main">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3 col-lg-3 footer-col wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
				<h3><?php echo ABOUT_US; ?></h3>
					<p>
						<?php echo nl2br($setting['footer_about']); ?>
					</p>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 footer-col wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
				<h3><?php echo LATEST_NEWS; ?></h3>
				<?php
				$i=0;				
				foreach ($latest_news as $row) {
					$i++;
					if($i>$setting['total_recent_post']) {break;}
					?>
					<div class="news-item">
						<div class="news-title"><a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></div>
					</div>
					<?php
				}
				?>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 footer-col wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
				<h3><?php echo POPULAR_NEWS; ?></h3>
				<?php
				$i=0;				
				foreach ($popular_news as $row) {
					$i++;
					if($i>$setting['total_popular_post']) {break;}
					?>
					<div class="news-item">
						<div class="news-title"><a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></div>
					</div>
					<?php
				}
				?>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 footer-col wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
				<h3><?php echo QUICK_LINKS; ?></h3>
				<div class="news-item">
					<div class="news-title"><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></div>
				</div>
				<div class="news-item">
					<div class="news-title"><a href="<?php echo base_url(); ?>terms-and-conditions"><?php echo TERMS_AND_CONDITIONS; ?></a></div>
				</div>
				<div class="news-item">
					<div class="news-title"><a href="<?php echo base_url(); ?>privacy-policy"><?php echo PRIVACY_POLICY; ?></a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer-copyrignt">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="copyright-text">
					<p><?php echo $setting['footer_copyright']; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="scroll-top" style="display: block;">
	<i class="fa fa-angle-up"></i>
</div>

<script src='<?php echo base_url(); ?>public/js/jquery-2.2.4.min.js'></script>
<script src='<?php echo base_url(); ?>public/js/bootstrap.min.js'></script>
<script src='<?php echo base_url(); ?>public/js/bootstrap-datepicker.js'></script>
<script src='<?php echo base_url(); ?>public/js/lightbox.min.js'></script>
<script src='<?php echo base_url(); ?>public/js/owl.carousel.min.js'></script>
<script src='<?php echo base_url(); ?>public/js/jquery.meanmenu.js'></script>
<script src='<?php echo base_url(); ?>public/js/jquery.filterizr.min.js'></script>
<script src='<?php echo base_url(); ?>public/js/waypoints.min.js'></script>
<script src='<?php echo base_url(); ?>public/js/jquery.counterup.min.js'></script>
<script src='<?php echo base_url(); ?>public/js/custom.js'></script>


</body>
</html>