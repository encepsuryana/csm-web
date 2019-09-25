<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Seting Komentar Facebook</h1>
	</div>
</section>

<?php if ($this->session->userdata('role') == 'admin') { ?>
	<section class="content">

		<div class="row">
			<div class="col-md-12">

				<?php if($error): ?>
					<div class="callout callout-danger">
						<p>
							<?php echo $error; ?>
						</p>
					</div>
				<?php endif; ?>

				<?php if($success): ?>
					<div class="callout callout-success">
						<p><?php echo $success; ?></p>
					</div>
				<?php endif; ?>

				<?php echo form_open(base_url().$this->session->userdata('role').'/comment',array('class' => 'form-horizontal')); ?>

				<div class="box box-info b-box">
					<div class="box-body">
						
						<p style="padding:0 20px;">Buka facebook developer (<a target="_blank" href="https://developers.facebook.com/docs/plugins/comments/">https://developers.facebook.com/docs/plugins/comments/</a>) Untuk mendaparkan kode komentar.</p>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Kode digunakan setelah tag &lt;body&gt; </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="code_body" style="height:300px;"><?php echo $comment['code_body']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>
					</div>
				</div>

				<?php echo form_close(); ?>
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