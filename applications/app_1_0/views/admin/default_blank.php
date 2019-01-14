<div class="content">

  <!-- Start Page breadcrumb -->
  <div class="page-header">
 
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin')?>"><i class='fa fa-dashboard'></i> Dashboard</a></li>
		<li><?php if($heading){ echo $heading;}?></li>
      </ol>
</div>

<div class="container-default">
	<div class="col-lg-12">
		<?php echo $this->lib->alert_message();?>

		
	</div>
	<div class="clearfix"></div>

</div>




