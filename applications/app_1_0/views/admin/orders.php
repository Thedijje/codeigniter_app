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
		<div class="panel panel-default">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Sr</th>
						<th>Order Number</th>
						<th>Product Name</th>
						<th>Amount</th>
						<th>User info</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i =1 ;
					foreach($orders as $order):
						
					?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $order->order_id?></td>
						<td><?php echo $order->product_name?></td>
						<td><?php echo currency_symbol($order->order_currency).number_format($order->order_cost,2)?>
							<br><small>Qty <?php echo $order->op_product_quantity;?>*<?php echo $order->op_unit_cost;?></small>

						</td>
						<td><?php echo $order->user_first_name.' '.$order->user_last_name?>
							<br><small><i class="fa fa-envelope fa-fw "></i> <?php echo $order->user_email?></small>
						</td>
						<td>
							<button class="btn btn-light btn-sm btn-icon"><i class="fa fa-search"></i></button>
							<button class="btn btn-danger btn-sm btn-icon"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
					<?php $i++; 
					endforeach;?>
				</tbody>
			</table>
		</div>
		
	</div>
	<div class="clearfix"></div>

</div>




