<?php
class LoginModel extends CI_Model{

    function getdata(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    
        $this->db->where('username', $username);
        $respond = $this->db->get('users'); // Fetch user by username
    
        if($respond->num_rows() == 1){
            $user = $respond->row(0);
            // Verify password
            if(password_verify($password, $user->password)) {
                return $user; // Password is correct, return user data
            }
        }
        return false; // Either user doesn't exist or password is incorrect
    }

}
?>