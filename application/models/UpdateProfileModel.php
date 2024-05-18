<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateProfileModel extends CI_Model {

    public function updateProfile($user_id, $username, $email, $profession, $biography) {
        // Data to be updated
        $data = array(
            'username' => $username,
            'email' => $email,
            'profession' => $profession,
            'biography' => $biography
        );

        // Update the database
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }
}
