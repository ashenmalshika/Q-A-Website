<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class save_user_model extends CI_Model {

    public function insert_user($firstname, $lastname, $email, $username, $hashed_password, $id) {
        $data = array(
            'first_name' => $firstname,
            'last_name' => $lastname,
            'email' => $email,
            'username' => $username,
            'password' => $hashed_password,
            'id' => $id
        );

        // Insert the user data into the database
        if ($this->db->insert('users', $data)) {
            return array('status' => 'success', 'message' => 'User registered successfully');
        } else {
            return array('status' => 'error', 'message' => 'User registration failed');
        }
    }
}
