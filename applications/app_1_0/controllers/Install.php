<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends Web_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Install_model', 'install');
	}
	
	public function index(){

        //  check for configuration table
        $config     =   $this->install->check('config');
        if($config){
            echo "\n\t-\t`config` table added/available.<br /><br />";
        }else{
            echo "\n\t-\t`config` table not available.<br /><br />";
        }


        //  install contact table
        $contact     =   $this->install->check('contact');
        if($contact){
            echo "\n\t-\t`contact` table added/available.<br /><br />";
        }else{
            echo "\n\t-\t`contact` table not available.<br /><br />";
        }


        //  install admin table
        $admin     =   $this->install->check('admin');
        if($admin){
            echo "\n\t-\t`admin` table added/available.<br /><br />";
        }else{
            echo "\n\t-\t`admin` table not available.<br /><br />";
        }


        //  install status table
        $status     =   $this->install->check('status');
        if($status){
            echo "\n\t-\t`status` table added/available.<br /><br />";
        }else{
            echo "\n\t-\t`status` table not available.<br /><br />";
        }


        //  install users table
        $users     =   $this->install->check('users');
        if($users){
            echo "\n\t-\t`users` table added/available.<br /><br />";
        }else{
            echo "\n\t-\t`users` table not available.<br /><br />";
        }
        exit();
	}
    
}
