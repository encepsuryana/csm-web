<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
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
          <span class="info-box-icon bg-green"><i class="fa fa-newspaper-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Kategori Berita</span>
            <span class="info-box-number"><?php echo $total_news_category; ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-file-text-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Berita</span>
            <span class="info-box-number"><?php echo $total_news; ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-list-alt"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Portofolio</span>
            <span class="info-box-number"><?php echo $total_portfolio; ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-user-plus"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Testimonial</span>
            <span class="info-box-number"><?php echo $total_testimonial; ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa fa-sliders"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Slider</span>
            <span class="info-box-number"><?php echo $total_slider; ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content" style="margin-top: -100px;">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info b-box" style="padding-top: 10px;">
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="5">No</th>
                  <th width="30">Waktu</th>
                  <th width="30">IP Address</th>
                  <!-- <th width="30">Identitas</th> -->
                  <th width="50">User</th>
                  <th width="250">Aktivitas</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i=0;             
                foreach ($log_aktivitas as $row) {
                  $i++;
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['log_time']; ?></td>
                    <td><?php echo $row['log_ipaddress']; ?></td>
                    <!-- <td><?php echo $row['log_useragen']; ?></td> -->
                    <td><?php echo $row['log_user']; ?></td>
                    <td><?php echo $row['log_desc']; ?></td>
                  </tr>
                  <?php
                }
                ?>              
              </tbody>
            </table>
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