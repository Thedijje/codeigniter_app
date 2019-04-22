<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Web_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('contact_model'=>'contact'));
		$this->load->helper('security');
	}
	public function index(){
	
		$data 	=	array(
			'title'				=>	'Contact Mobi-hub',
			'meta_desription'	=>	'Contact Mobi-hub',
			'meta_keyword'		=>	'Contact Mobi-hub'
			);
		$user_info 				=	$this->lib->get_row_array('users',array('user_id'=>webapp_user('user_id'),'user_status<='=>2));
		if($user_info){
			$data['user_info']	=	$user_info;
		}
		$data['msg_show']	=	"Please let us know what seems to be the problem.";
		$data['subject']	=	"Request to update VAT";

		$contact_for 			=	$this->input->get('for');
		
		if(isset($contact_for)){
			if($contact_for=='edit'){
				$data['msg_show']	=	"Please contact and let us know about your VAT changes.";
				$data['subject']	=	"Request to update VAT";		
			}
		}
		
		$this->load->view('front/includes/public_header',$data);
		$this->load->view('front/contact_us',$data);
		$this->load->view('front/includes/public_footer',$data);
	}

	public function save(){
		if(!validate_csrf()){
			$this->lib->redirect_msg('Security token mismatched or expired, please try again','danger','contact-us');
		}

		$data 	=	$this->input->post();
   
		if(!$data){
			$this->lib->redirect_msg('Invalid request','warning','contact-us');
		}
		$current_ip 	=	$this->input->ip_address();
		$checking_spam	=	$this->lib->get_row_array('contact_msg',array('contact_ip'=>$current_ip,'contact_at>='=>time()-300));
		$sess_check 	=	$this->session->userdata('contacted');
		if($checking_spam AND isset($sess_check)){
			$this->lib->redirect_msg('It seems like you have just contacted, please try after 10 minutes','warning','contact-us');
		}
		if(empty($data['name']) OR empty($data['email']) OR empty($data['message'])){
			
			$this->lib->redirect_msg('All fields are required','warning','contact-us');
		}
		// dd($data);
		$contact_msg 	=	array(
								'contact_name'		=>	$data['name'],
								'contact_email'		=>	$data['email'],
								'contact_phone'		=>	$data['phone'] ?? '',
								'contact_subject'	=>	$data['subject'] ?? 'General Enquiry',
								'contact_message'	=>	$data['message'],
								'contact_user_id'	=>	webapp_user('user_id') ?? 0,
								'contact_at'		=>	time(),
								'contact_ip'		=>	$current_ip,
								'contact_status'	=>	1
							);
		$insert_db 		=	$this->db->insert('contact_msg',$contact_msg);
		$query_id 		=	$this->db->insert_id();
		$data['contact_msg_id']	=	$query_id;
		$send_mail 		=	$this->send_email->contact_us_mail_admin($data);
		$send_mail 		=	$this->send_email->contact_us_mail_user($data);
		$this->session->set_tempdata('contacted','TRUE',300);
		$this->lib->redirect_msg('Message sent successfully','success','contact-us');
	}

}
