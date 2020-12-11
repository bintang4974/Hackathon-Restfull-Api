<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Data_dummy extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dummy_model');
    }

    public function index_get()
    {
        $dummy = $this->dummy_model->getDummy();

        if ($dummy) {
            $this->response([
                'status' => FALSE,
                'data' => $dummy
            ], REST_Controller::HTTP_OK);
        }
    }
}
