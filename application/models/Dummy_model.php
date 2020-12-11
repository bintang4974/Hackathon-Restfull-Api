<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy_model extends CI_Model {

    public function getDummy()
    {
        return $this->db->get('data_dummy')->result_array();
    }

}

/* End of file Dummy_model.php */
