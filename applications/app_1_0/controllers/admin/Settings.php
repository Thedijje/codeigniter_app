<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index()
	{
		$this->login->check_admin_login();
		
		$data['title']		=	'Settings';
		$data['heading']	=	'Settings';
		$data['icon']		=	'fa fa-sliders';
		
		$data['sitename']						=	config_item('sitename');
		$data['email']							=	config_item('email');
		$data['logo']							=	config_item('logo');
		$data['email_name']		=	config_item('sending_email_name');
		
		
		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/settings',$data);
		$this->load->view('admin/includes/footer',$data);
	}
	
	public function save_settings($module='sitename'){
		$this->login->check_admin_login('ajax');
		$data	=	$this->input->post('value');
		
		$update	=	$this->lib->update('config',array('value'=>$data),'name',$module);
		if($update){
		echo "<span class='text-success'><i class='fa fa-check-circle'></i> ".$module." Saved!</span>";
		}
		
		
	}
	
	
}
