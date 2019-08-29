<?php
if(!$this->session->userdata('id')) {
  redirect(base_url().$this->session->userdata('role').'/login');
}
?>
<?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) { ?>
  <section class="content-header">
   <div class="content-header-left">
    <h1>View Products</h1>
  </div>
  <div class="content-header-right">
    <a href="<?php echo base_url().$this->session->userdata('role'); ?>/product/add" class="btn btn-primary btn-sm">Add New</a>
  </div>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info  b-box">
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>SL</th>
               <th>Product</th>
               <th>Caption</th>
               <th>Description</th>
               <th>Show?</th>
               <th width="200">Action</th>
             </tr>
           </thead>
           <tbody>

             <?php
             $i=0;
             foreach ($product as $row) {
              $i++;
              ?>
              <tr>
               <td><?php echo $i; ?></td>
               <td>
                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['product_name']; ?>" width="140">
              </td>
              <td><?php echo $row['product_caption']; ?></td>
              <td><?php echo $row['product_desc']; ?></td>
              <td><?php echo $row['product_show_home']; ?></td>
              <td>
                <?php if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) { ?>

                 <a href="<?php echo base_url().$this->session->userdata('role'); ?>/product/edit/<?php echo $row['product_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
                 <a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url().$this->session->userdata('role'); ?>/product/delete/<?php echo $row['product_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
               <?php } else { ?>
                <div class="forbiden">
                  <i class="fa fa-minus-circle" aria-hidden="true"></i>
                  <span>Akses Tidak tersedia</span>
                  <i class="fa fa-minus-circle" aria-hidden="true"></i>
                </div>
              <?php }?>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div> 

</section>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <div class="modal-body">
        Are you sure want to delete this item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger btn-ok">Delete</a>
      </div>
    </div>
  </div>
</div>
<?php } else { ?>
  <div class="forbiden">
    <i class="fa fa-minus-circle" aria-hidden="true"></i>
    <span>Akses Tidak tersedia</span>
    <i class="fa fa-minus-circle" aria-hidden="true"></i>
  </div>
  <?php }?>