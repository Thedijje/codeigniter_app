<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Response extends REST_Controller {

    public function index_get(){
        $this->response(array('status'=>'awesome'), REST_Controller::HTTP_OK);
    }

}