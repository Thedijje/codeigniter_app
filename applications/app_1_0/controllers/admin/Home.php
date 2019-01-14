<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->login->check_admin_login();
	}

	public function index()
	{
		
		$data['title']			=	'Dashboard';
		$data['heading']		=	'Dashboard';
		$data['icon']			=	'fa fa-dashboard';
		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/includes/footer',$data);
	}
}
