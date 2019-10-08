<div class="footer-copyrignt">
	<div class="container" style="width: 100%">
		<div class="row">
			<div class="col-md-6">
				<div class="footer-social">
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
				<div class="footer-contact-item">
					<ul>
						<li>
							<h4><?php echo nl2br($setting['general_companyname']); ?></h4>
							<p>
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<span><?php echo nl2br($setting['footer_address']); ?></span>
							</p>
						</li>
					</ul>
					<ul>
						<li>
							<p>
								<i class="fa fa-phone" aria-hidden="true"></i> <span><?php echo nl2br($setting['footer_phone']); ?></span>
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="copyright-text">
					<p><?php echo $setting['footer_copyright']; ?></p>
				</div>
				<div class="link-footer">
					<p>
						<a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a> | <a href="<?php echo base_url(); ?>terms-and-conditions"><?php echo TERMS_AND_CONDITIONS; ?></a> | <a href="<?php echo base_url(); ?>privacy-policy"><?php echo PRIVACY_POLICY; ?> | <a href="<?php echo base_url(); ?>site-maps"><?php echo SITE_MAPS; ?></a>
					</p>
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
<script type="text/javascript" id="cookieinfo" 
src="//cookieinfoscript.com/js/cookieinfo.min.js" 
data-moreinfo="<?php base_url();?>terms-and-conditions"
data-close-text="Got it!"
data-divlinkbg="#134595"
data-divlink="#fff">
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-3809700210298618",
		enable_page_level_ads: true
	});
</script>

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

<script type="text/javascript">
	function openModal() {
		document.getElementById("myModal").style.display = "block";
	}

	function closeModal() {
		document.getElementById("myModal").style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		var captionText = document.getElementById("caption");
		if (n > slides.length) {slideIndex = 1}
			if (n < 1) {slideIndex = slides.length}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";
				dots[slideIndex-1].className += "active";
				captionText.innerHTML = dots[slideIndex-1].alt;
			}
		</script>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});  
		</script>

	</body>
	</html>