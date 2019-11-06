<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin/login');
}
?>
<?php if ($this->session->userdata('role') == 'admin') { ?>
    <section class="content-header">
     <div class="content-header-left">
      <h1>Pengaturan Halaman</h1>
  </div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
    <div class="row">
        <div class="col-md-12">
            <?php if($error): ?>
                <div class="callout callout-danger">
                    <p><?php echo $error; ?></p>
                </div>
            <?php endif; ?>
            <?php if($success): ?>
                <div class="callout callout-success">
                    <p><?php echo $success; ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
            <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Tentang Perusahaan</a></li>
              <li><a href="#tab_2" data-toggle="tab">Halaman SEO Setting</a></li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <?php echo form_open_multipart(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>

                <h3 class="seo-info">Photo Header</h3>
                <input type="hidden" name="current_about_photo" value="<?php echo $page['about_photo']; ?>">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Existing Photo </label>
                    <div class="col-sm-9">
                        <?php if($page['about_photo'] == ''): ?>
                            <div style="padding-top:6px;color:red;">No Photo Found</div>
                            <?php else: ?>
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['about_photo']; ?>" style="width:300px;">
                                <br>
                                <a href="<?php echo base_url().$this->session->userdata('role'); ?>/page/delete_about_photo" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete Photo</a>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Change Photo </label>
                        <div class="col-sm-6">
                            <input type="file" name="about_photo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success pull-left" name="form_about_photo">Update Photo</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>

                    <h3 class="seo-info">Structure Image</h3>
                    <?php echo form_open_multipart(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                    <input type="hidden" name="current_structure_photo" value="<?php echo $page['structure_photo']; ?>">
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Existing Photo </label>
                        <div class="col-sm-9">
                            <?php if($page['structure_photo'] == ''): ?>
                                <div style="padding-top:6px;color:red;">
                                    No Photo Found
                                </div>
                                <?php else: ?>
                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['structure_photo']; ?>" style="width:300px;"><
                                    <br>
                                    <a href="<?php echo base_url().$this->session->userdata('role'); ?>/page/delete_structure_photo" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete Photo</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Change Photo </label>
                            <div class="col-sm-6">
                                <input type="file" name="structure_photo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_structure_photo">Update Photo</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Konten Bahasa Inggris</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Tentang Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="about_content" class="form-control" cols="30" rows="10" id="editor1"><?php echo $page['about_content']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Profile Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="profile_content" class="form-control" cols="30" rows="10" id="editor2"><?php echo $page['profile_content']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Nilai & Budaya </label>
                            <div class="col-sm-9">
                                <textarea name="culture_content" class="form-control" cols="30" rows="10" id="editor3"><?php echo $page['culture_content']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Komitmen Mutu </label>
                            <div class="col-sm-9">
                                <textarea name="quality_content" class="form-control" cols="30" rows="10" id="editor4"><?php echo $page['quality_content']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Misi Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="mission_content" class="form-control" cols="30" rows="10" id=""><?php echo $page['mission_content']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Visi Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="vision_content" class="form-control" cols="30" rows="10" id=""><?php echo $page['vision_content']; ?></textarea>
                            </div>
                        </div>

                        <h3 class="seo-info">Konten Bahasa Indonesia</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Tentang Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="about_content_idn" class="form-control" cols="30" rows="10" id="editor5"><?php echo $page['about_content_idn']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Profile Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="profile_content_idn" class="form-control" cols="30" rows="10" id="editor6"><?php echo $page['profile_content_idn']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Nilai & Budaya </label>
                            <div class="col-sm-9">
                                <textarea name="culture_content_idn" class="form-control" cols="30" rows="10" id="editor7"><?php echo $page['culture_content_idn']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Komitmen Mutu </label>
                            <div class="col-sm-9">
                                <textarea name="quality_content_idn" class="form-control" cols="30" rows="10" id="editor8"><?php echo $page['quality_content_idn']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Misi Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="mission_content_idn" class="form-control" cols="30" rows="10" id=""><?php echo $page['mission_content_idn']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Visi Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="vision_content_idn" class="form-control" cols="30" rows="10" id=""><?php echo $page['vision_content_idn']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_about" style="height:100px;"><?php echo $page['mk_about']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_about" style="height:100px;"><?php echo $page['md_about']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_about">Update Information</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>
                    </div>



                    <div class="tab-pane" id="tab_2">
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>

                        <h3 class="seo-info">Beranda</h3>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_home" style="height:100px;"><?php echo $page['mk_home']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_home" style="height:100px;"><?php echo $page['md_home']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                            </div>
                        </div>                            
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Galeri</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_gallery" style="height:100px;"><?php echo $page['mk_gallery']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_gallery" style="height:100px;"><?php echo $page['md_gallery']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_gallery">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Produk</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?> 
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_product" style="height:100px;"><?php echo $page['mk_product']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_product" style="height:100px;"><?php echo $page['md_product']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_product">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Layanan</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_service" style="height:100px;"><?php echo $page['mk_service']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_service" style="height:100px;"><?php echo $page['md_service']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_service">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Fasilitas</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_facility" style="height:100px;"><?php echo $page['mk_facility']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_facility" style="height:100px;"><?php echo $page['md_facility']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_facility">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Portofolio</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>    
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_portfolio" style="height:100px;"><?php echo $page['mk_portfolio']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_portfolio" style="height:100px;"><?php echo $page['md_portfolio']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_portfolio">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Testimonial</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_testimonial" style="height:100px;"><?php echo $page['mk_testimonial']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_testimonial" style="height:100px;"><?php echo $page['md_testimonial']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_testimonial">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Berita</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_news" style="height:100px;"><?php echo $page['mk_news']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_news" style="height:100px;"><?php echo $page['md_news']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_news">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Kontak</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_contact" style="height:100px;"><?php echo $page['mk_contact']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_contact" style="height:100px;"><?php echo $page['md_contact']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_contact">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>


                        <h3 class="seo-info">Pencarian</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>   
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_search" style="height:100px;"><?php echo $page['mk_search']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_search" style="height:100px;"><?php echo $page['md_search']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_search">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Term & Condition</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Term & Condition Content </label>
                            <div class="col-sm-9">
                                <textarea name="term_content" class="form-control" cols="30" rows="10" id="editor2"><?php echo $page['term_content']; ?></textarea>
                            </div>
                        </div>     
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_term" style="height:100px;"><?php echo $page['mk_term']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_term" style="height:100px;"><?php echo $page['md_term']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_term">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Privacy Policy</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Privacy Policy Content </label>
                            <div class="col-sm-9">
                                <textarea name="privacy_content" class="form-control" cols="30" rows="10" id="editor3"><?php echo $page['privacy_content']; ?></textarea>
                            </div>
                        </div>     
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_privacy" style="height:100px;"><?php echo $page['mk_privacy']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_privacy" style="height:100px;"><?php echo $page['md_privacy']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_privacy">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Karir</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>     
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_carrier" style="height:100px;"><?php echo $page['mk_carrier']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_carrier" style="height:100px;"><?php echo $page['md_carrier']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_carrier">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Divisi Elektronik</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>     
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_electronics_division" style="height:100px;"><?php echo $page['mk_electronics_division']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_electronics_division" style="height:100px;"><?php echo $page['md_electronics_division']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_electronic_division">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>


                        <h3 class="seo-info">Site Maps</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>      
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_site_maps" style="height:100px;"><?php echo $page['mk_site_maps']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_site_maps" style="height:100px;"><?php echo $page['md_site_maps']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_site">Update</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</section>

<?php } elseif (($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>
    <section class="content-header">
     <div class="content-header-left">
      <h1>Page Section</h1>
  </div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
    <div class="row">
        <div class="col-md-12">
            <?php if($error): ?>
                <div class="callout callout-danger">
                    <p><?php echo $error; ?></p>
                </div>
            <?php endif; ?>
            <?php if($success): ?>
                <div class="callout callout-success">
                    <p><?php echo $success; ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Tentang Perusahaan</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                 <h3 class="seo-info">Photo Header</h3>
                 <?php echo form_open_multipart(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                 <input type="hidden" name="current_about_photo" value="<?php echo $page['about_photo']; ?>">
                 <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Existing Photo </label>
                    <div class="col-sm-9">
                        <?php if($page['about_photo'] == ''): ?>
                            <div style="padding-top:6px;color:red;">No Photo Found</div>
                            <?php else: ?>
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['about_photo']; ?>" style="width:300px;">
                                <br>
                                <a href="<?php echo base_url().$this->session->userdata('role'); ?>/page/delete_about_photo" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete Photo</a>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Change Photo </label>
                        <div class="col-sm-6">
                            <input type="file" name="about_photo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success pull-left" name="form_about_photo">Update Photo</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>

                    <h3 class="seo-info">Structure Image</h3>
                    <?php echo form_open_multipart(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                    <input type="hidden" name="current_structure_photo" value="<?php echo $page['structure_photo']; ?>">
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Existing Photo </label>
                        <div class="col-sm-9">
                            <?php if($page['structure_photo'] == ''): ?>
                                <div style="padding-top:6px;color:red;">No Photo Found</div>
                                <?php else: ?>
                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['structure_photo']; ?>" style="width:300px;">
                                    <br>
                                    <a href="<?php echo base_url().$this->session->userdata('role'); ?>/page/delete_structure_photo" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete Photo</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Change Photo </label>
                            <div class="col-sm-6">
                                <input type="file" name="structure_photo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_structure_photo">Update Photo</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>

                        <h3 class="seo-info">Other Information Section</h3>
                        <?php echo form_open(base_url().$this->session->userdata('role').'/page/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Tentang Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="about_content" class="form-control" cols="30" rows="10" id="editor1"><?php echo $page['about_content']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Profile Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="profile_content" class="form-control" cols="30" rows="10" id="editor2"><?php echo $page['profile_content']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Nilai & Budaya </label>
                            <div class="col-sm-9">
                                <textarea name="culture_content" class="form-control" cols="30" rows="10" id="editor3"><?php echo $page['culture_content']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Komitmen Mutu </label>
                            <div class="col-sm-9">
                                <textarea name="quality_content" class="form-control" cols="30" rows="10" id="editor4"><?php echo $page['quality_content']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Misi Judul </label>
                            <div class="col-sm-6">
                                <input type="text" name="mission_heading" class="form-control" value="<?php echo $page['mission_heading']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Misi Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="mission_content" class="form-control" cols="30" rows="10" id=""><?php echo $page['mission_content']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Visi Judul </label>
                            <div class="col-sm-6">
                                <input type="text" name="vision_heading" class="form-control" value="<?php echo $page['vision_heading']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Visi Perusahaan </label>
                            <div class="col-sm-9">
                                <textarea name="vision_content" class="form-control" cols="30" rows="10" id=""><?php echo $page['vision_content']; ?></textarea>
                            </div>
                        </div>    
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mk_about" style="height:100px;"><?php echo $page['mk_about']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="md_about" style="height:100px;"><?php echo $page['md_about']; ?></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_about">Update Information</button>
                            </div>
                        </div>                              
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </form>
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
