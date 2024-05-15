<?php
class GetDataModel extends CI_Model{

    function getQuestionData($user_id){
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('questions');
        return $query->result_array(); // Returning the results as an array 

    }

    function getAllQuestionData(){
        $query = $this->db->get('questions');
        return $query->result_array(); // Returning the results as an array 
    }

}
?>