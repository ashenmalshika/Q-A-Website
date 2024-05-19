<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateProfileModel extends CI_Model {

    public function updateProfile($user_id, $username, $email, $profession, $biography) {
        // updating data
        $data = array(
            'username' => $username,
            'email' => $email,
            'profession' => $profession,
            'biography' => $biography
        );

        // Update database
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }
}
