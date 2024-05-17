<?php
class GetDataModel extends CI_Model{

    function getQuestionData($user_id){
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('questions');
        return $query->result_array(); // Returning the results as an array 

    }

    function getAllQuestionData(){
        $this->db->select('questions.id, questions.question, questions.created_at, COUNT(answers.id) as answer_count');
        $this->db->from('questions');
        $this->db->join('answers', 'answers.question_id = questions.id', 'left');
        $this->db->group_by('questions.id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

}
?>