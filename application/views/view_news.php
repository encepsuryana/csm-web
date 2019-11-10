<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner']; ?>)">
	<div class="container bannder-table" style="padding: 0;">
		<div class="col-md-12" style="padding: 0;">
			<div class="banner-text">
				<h1><?php echo NEWS; ?></h1>
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
						<a href="<?php echo base_url(); ?>news"><span><?php echo NEWS; ?></span></a>
					</li>
				</div>
			</ul>
		</div>
	</div>

	<div class="container pt_10 pb_20" style="padding: 0;">
		<div class="searchbar-item" style="float: left;">
			<?php echo form_open(base_url().'search'); ?>
			<div class="input-group" style="width: 290px;">
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

	<div class="container pt_15 pb_20">
		<div class="row">
			<section class="csmpublic-home">
				<div class="container">
					<div class="row-page row">
						<?php
						$i=0;
						foreach ($results as $row) {
							$i++;
							?>
							<div class="<?php echo $row->slug; ?> no-merg">
								<a href="<?php echo base_url(); ?>news/post/<?php echo $row->post_slug; ?>" class="public-csm-home">
									<div class="blog-author ">
										<ul>
											<div class="col-sm-5" style="text-align: left; padding-left: 5px;">
												<li class="gro">
													<i class="fa fa-user-circle-o" aria-hidden="true"></i> 
													<span><?php echo $row->user_update; ?></span>
												</li>
											</div>
											<li class="gro">
												<span><?php echo $row->news_date; ?></span> <i class="fa fa-calendar" aria-hidden="true"></i>
											</li>
										</ul>
									</div>
									<div class="img-publicacion-home">
										<img class="" src="<?php echo base_url(); ?>public/uploads/<?php echo $row->photo; ?>">
									</div>
									<div class="public-partcsm-home">
										<h3>
											<?php 
											if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {

												if ($row->news_title_idn == "") {
													echo $row->news_title;
												} else { 
													echo $row->news_title_idn;
												}

											} else {

												if ($row->news_title == "") {
													echo $row->news_title_idn;
												} else { 
													echo $row->news_title;
												}

											}
											?>
										</h3>
										<p>
											<?php 
											if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {

												if ($row->news_short_content_idn == "") {
													echo $row->news_short_content;
												} else { 
													echo $row->news_short_content_idn;
												}

											} else {

												if ($row->news_short_content == "") {
													echo $row->news_short_content_idn;
												} else { 
													echo $row->news_short_content;
												}

											}
											?>
										</p>
									</div>
									<div class="csm-blog-home">
										<h4>
											<?php 
											if (empty($this->session->userdata('language')) or ($this->session->userdata('language')=='idn')) {

												if ($row->news_title_idn == "") {
													echo $row->news_title;
												} else { 
													echo $row->news_title_idn;
												}

											} else {

												if ($row->news_title == "") {
													echo $row->news_title_idn;
												} else { 
													echo $row->news_title;
												}

											}
											?>
										</h4>
										<span><?php echo READ_MORE; ?></span>
									</div>
								</a>
							</div>
							<?php
						}
						?>	
					</div>
				</div>
			</section>
		</div>
		<div class="row">
			<div class="col-md-12" style="margin-top:30px;text-align: center;">
				<div class="pagination">
					<?php echo $links; ?>
				</div>
			</div>
		</div>
	</div>
</div>