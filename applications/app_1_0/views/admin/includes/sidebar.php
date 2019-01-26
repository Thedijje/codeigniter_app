<?php 
$admin_info	=	$this->session->userdata('admin');
/*
* Badge number count
*/

?>
<!-- START SIDEBAR -->
<div class="sidebar clearfix">
<div class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox">
     <div class="user-name"><b>How are you <?php echo $admin_info['name'] ?? 'Admin';?> ?</b><span class="caret"></span></div></a>
      
       
       
    </div>
<ul class="sidebar-panel nav">
  <li class="sidetitle">Main Menu</li>
  <li><a href="<?php echo base_url('admin')?>"><span class="icon color5"><i class="fa fa-dashboard"></i></span>Dashboard</a></li>

<li class="sidetitle">Products</li>

<li><a href="<?php echo base_url('admin/products')?>"><span class="icon color6"><i class="fa fa-cube"></i></span>Products <span class="label label-primary"><?php echo $prod_count ?? 0;?></span></a></li>
<li><a href="<?php echo base_url('admin/category')?>"><span class="icon color6"><i class="fa fa-sitemap"></i></span>Categories <span class="label label-warning"><?php echo $cat_count ?? 0;?></span></a></li>

<li><a href="<?php echo base_url('admin/recipe')?>"><span class="icon color6"><i class="fa fa-cutlery"></i></span>Recipes <span class="label label-info"><?php echo $recipe_count ?? 0;?></span></a></li>

<li class="sidetitle">e-Commerce</li>
<li><a href="<?php echo base_url('admin/orders')?>"><span class="icon color6"><i class="fa fa-shopping-cart"></i></span>Orders <span class="label label-success"><?php echo $orders ?? 0;?></span></a></li>
<li><a href="<?php echo base_url('admin/users')?>"><span class="icon color6"><i class="fa fa-shopping-cart"></i></span>Users <span class="label label-warning"><?php echo $users ?? 0;?></span></a></li>


  <li class="sidetitle">Admin Menu</li>
  <li><a href="<?php echo base_url('admin/pages')?>"><span class="icon color6"><i class="fa fa-info-circle"></i></span>Info Pages</a></li>
  <li><a href="<?php echo base_url('admin/settings')?>"><span class="icon color6"><i class="fa fa-sliders"></i></span>Settings</a></li>
  <li><a href="<?php echo base_url('admin/log')?>"><span class="icon color6"><i class="fa fa-warning"></i></span>System Log</a></li>

  <li><a href="<?php echo base_url('admin/logout')?>"><span class="icon color6"><i class="fa fa-power-off"></i></span>Logout</a></li>
  
</ul>



</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

<div class="content">

<!-- Start Page breadcrumb -->
<div class="page-header">

    <ol class="breadcrumb">
  <li><a href="<?php echo base_url('admin')?>"><i class='fa fa-dashboard'></i> Dashboard</a></li>
    <?php if($this->router->fetch_class()!='home'){ echo '<li><a href="'.base_url('admin/'.$this->router->fetch_class()).'">'.$this->router->fetch_class().'</a></li>';}?>
      <?php if($this->router->fetch_method()!='index'){ echo "<li><a href='".base_url('admin/'.$this->router->fetch_method())."'>".$this->router->fetch_method().'</a></li>';}?>
    </ol>
</div>