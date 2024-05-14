<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaveQuestionsModel extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function save_question($data) {
        return $this->db->insert('questions', $data);
    }
}
