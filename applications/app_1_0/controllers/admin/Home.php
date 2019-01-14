<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->login->check_admin_login();
		
		$data['title']			=	'Dashboard';
		$data['heading']		=	'Dashboard';
		$data['icon']			=	'fa fa-dashboard';
		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/includes/footer',$data);
	}
}
