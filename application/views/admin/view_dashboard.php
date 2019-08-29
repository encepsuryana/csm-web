<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')){ ?>
  <section class="content-header">
    <h1>Dashboard</h1>
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total News Categories</span>
            <span class="info-box-number"><?php echo $total_news_category; ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total News</span>
            <span class="info-box-number"><?php echo $total_news; ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Team Members</span>
            <span class="info-box-number"><?php echo $total_team_member; ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Portfolios</span>
            <span class="info-box-number"><?php echo $total_portfolio; ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Testimonials</span>
            <span class="info-box-number"><?php echo $total_testimonial; ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Sliders</span>
            <span class="info-box-number"><?php echo $total_slider; ?></span>
          </div>
        </div>
      </div>

    </div>


  </section>
<?php } else { ?>
  <div class="forbiden">
    <i class="fa fa-minus-circle" aria-hidden="true"></i>
    <span>Akses Tidak tersedia</span>
    <i class="fa fa-minus-circle" aria-hidden="true"></i>
  </div>
  <?php } ?>