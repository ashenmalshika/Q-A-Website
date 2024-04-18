<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class save_user_model extends CI_Model {

    public function save_details($data) {
        $this->db->insert('users', $data);
    }
}
