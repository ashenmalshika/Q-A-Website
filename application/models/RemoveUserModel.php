<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RemoveUserModel extends CI_Model {

    public function removeUser($user_id) {
        $this->db->where('id', $user_id);
        $this->db->delete('users');
    }
}
