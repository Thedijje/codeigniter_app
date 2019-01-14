<div class="content">

  <!-- Start Page breadcrumb -->
  <div class="page-header">
 
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin')?>"><i class='<?php echo $icon;?>'></i> <?php echo $heading;?></a></li>
      </ol>
</div>

<div class="container-default">
	<div class="col-lg-12">
	
	<div class="col-lg-9 panel panel-default">
		
			<div class="form-group">
				<label class="col-lg-2">Sitename</label>
				<div class="col-lg-5"><input type="text" class="form-control" id="sitename" value="<?php echo $sitename;?>"></div>
				<div class="col-lg-2"><span id="save_site" class="btn btn-primary"><i class="fa fa-save"></i> Save</span></div>
				<div class="col-lg-3" id="msg_site"></div>
			</div>
			<div class="clearfix"></div>
			<br>
				<div class="form-group">
				<label class="col-lg-2">Admin Email</label>
				<div class="col-lg-5"><input type="email" class="form-control" id="email" value="<?php echo $email;?>"></div>
				<div class="col-lg-2"><span id="save_email" class="btn btn-primary"><i class="fa fa-save"></i> Save</span></div>
				<div class="col-lg-3" id="msg_email"></div>
				</div>
			<div class="clearfix"></div>
			
			<br>
				<div class="form-group">
				<label class="col-lg-2">Date Format</label>
				<div class="col-lg-5">
					<select class="form-control" name="date-format" id="date">
						<option value="M/d/Y" <?php if($this->lib->get_settings('date_format')=='M/d/Y'){ echo "selected";}?>><?php echo date('M/d/Y')?></option>
						<option value="M d Y" <?php if($this->lib->get_settings('date_format')=='M d Y'){ echo "selected";}?>><?php echo date('M d Y')?></option>
						<option value="m/d/Y" <?php if($this->lib->get_settings('date_format')=='m/d/Y'){ echo "selected";}?>><?php echo date('m/d/y')?></option>
						<option value="d M Y" <?php if($this->lib->get_settings('date_format')=='d M Y'){ echo "selected";}?>><?php echo date('d M Y')?></option>
						<option value="D d-M-Y" <?php if($this->lib->get_settings('date_format')=='D d-M-Y'){ echo "selected";}?>><?php echo date('D-d-M-Y')?></option>
						<option value="D d-m-y" <?php if($this->lib->get_settings('date_format')=='D d-m-y'){ echo "selected";}?>><?php echo date('D d-m-y')?></option>
						
					</select>
				</div>
				<div class="col-lg-2"><span id="save_date" class="btn btn-primary"><i class="fa fa-save"></i> Save</span></div>
				<div class="col-lg-3" id="msg_date"></div>
				</div>
			<div class="clearfix"></div>
			
			<br>
				<div class="form-group">
				<label class="col-lg-2">Name of Email sender</label>
				<div class="col-lg-5"><input type="email" class="form-control" id="email_name" value="<?php echo $email_name;?>"></div>
				<div class="col-lg-2"><span id="save_send_name" class="btn btn-primary"><i class="fa fa-save"></i> Save</span></div>
				<div class="col-lg-3" id="msg_email_name"></div>
				</div>
			<div class="clearfix"></div>
			
			
			<br>
			
			<?php /*
			<div class="form-group">
				<label class="col-lg-2">Logo</label>
				<div class="col-lg-5">
				<form class="form" action="<?php echo base_url('admin/settings/save_logo')?>" enctype="multipart/form-data">
				<img width="100px" src="<?php if(file_exists($logo)){ echo base_url($logo);}else{ echo "http://placehold.it/100x100?text=No+logo";}?>">	
				<input type="file" name="logo" accept="image/*" id="select_image" class="hidden"><span onclick="$('#select_image').click();" class="btn btn-info"><i class="fa fa-upload"></i> Select image</span></div>
				<div class="col-lg-2"><span id="saveSitebtn" class="btn btn-primary"><i class="fa fa-save"></i> Save</span></div>
				</form>
				<div class="col-lg-3" id="saveSiteMsg"></div>
			</div>
			*/?>
		<div class="clearfix"></div>
		
	</div>
	</div>

</div>
<script>
	$('#saveSiteMsg').hide();
	
	$(document).ready(function() {
		$('#save_site').click(function () {
			$("#msg_site").html("<i class='fa fa-spinner fa-pulse fa-fw'></i>Please wait...");
			var sitename = $('#sitename').val();
		
			var data='value='+sitename;
			$.ajax({
				type:"POST",
				url:"<?php echo base_url('admin/settings/save_settings/sitename')?>",
				data:data,
				success:function(html) {
				$("#msg_site").html(html);
				},
				failure:function(html){
					$("#msg_site").html("Unable to connect to server");
				}
			});
			return false;
		});
		
		$('#save_email').click(function () {
			$("#msg_email").html("<i class='fa fa-spinner fa-pulse fa-fw'></i>Please wait...");
			var email = $('#email').val();
		
			var data='value='+email;
			$.ajax({
				type:"POST",
				url:"<?php echo base_url('admin/settings/save_settings/email')?>",
				data:data,
				success:function(html) {
				$("#msg_email").html(html);
				}
			});
			return false;
		});
		
		
		$('#save_date').click(function () {
			var date = $('#date').val();
			$("#msg_date").html("<i class='fa fa-spinner fa-pulse fa-fw'></i>Please wait...");
		
			var data='value='+date;
			$.ajax({
				type:"POST",
				url:"<?php echo base_url('admin/settings/save_settings/date_format')?>",
				data:data,
				success:function(html) {
				$("#msg_date").html(html);
				}
			});
			return false;
		});
		
		$('#save_send_name').click(function () {
			$("#msg_email_name").html("<i class='fa fa-spinner fa-pulse fa-fw'></i>Please wait...");
			var email_name = $('#email_name').val();
		
			var data='value='+email_name;
			$.ajax({
				type:"POST",
				url:"<?php echo base_url('admin/settings/save_settings/sending_email_name')?>",
				data:data,
				success:function(html) {
				$("#msg_email_name").html(html);
				}
			});
			return false;
		});
		
	});
	
	
		


	</script>
	
	


