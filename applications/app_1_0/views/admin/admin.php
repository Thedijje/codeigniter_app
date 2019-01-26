

<div class="container-default">
	<div class="col-lg-12">
	<?php $this->lib->alert_message();?>
	<div class="clearfix"></div>
		<div class="panel panel-default col-lg-4">
		<h3>Add New Admin</h3>
			<form class="form" action="<?php echo base_url('admin/users/add')?>" method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" required placeholder="Enter speciality name" autofocus>
				</div>
				
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" required placeholder="Enter admin email" autofocus>
				</div>
				
				<div class="form-group">
					<label>Password</label>
					<input type="text" class="form-control" name="password" required placeholder="Enter password" autofocus>
				</div>
				
			
				
				<div class="form-group">
					<button class="btn btn-primary btn-icon"><i class="fa fa-save"></i> Save Admin</button>
				</div>
				
				
			</form>
		
		</div>
		
		<div class="panel panel-default col-lg-8" >
			<h4>List of available speciality</h4>
			<hr>
			<table class="table table-hover table-responsive">
				<thead>
					<tr>
						<th>Sr No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Last login</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if($admin){
					$i=1;
						foreach($admin as $sd){
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $sd->name;?></td>
							<td><?php echo $sd->email;?></td>
							<td><?php if($sd->last_login){ echo timespan($sd->last_login,time(),2);?> ago <?php }else{ echo "Not yet";}?></td>
							<td>
								<button class="btn btn-icon btn-sm btn-info" onclick="$('#loadData').load('<?php echo base_url('admin/users/edit/'.$sd->id)?>');" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
							
								<a onclick="return confirm('Are you sure want to trash this record?')" href="<?php echo base_url('admin/users/del/'.$sd->id)?>"><button class="btn btn-icon btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
							</td>
						</tr>
						<?php
						$i++;
						}
						
					}else{
					?>
					<tr>
						<td colspan="4"><i class='fa fa-inbox'></i> No active Record at moment</td>
					</tr>
					<?php
					}	
					
					?>
				</tbody>
			</table>
		
		</div>
	
	</div>
	<div class="clearfix"></div>
</div>

</div>