<?php
class GetDataModel extends CI_Model{

    function getQuestionData($user_id){
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('questions');
        return $query->result_array(); // Returning the results as an array 

    }

    function getAllQuestionData(){
        $this->db->select('questions.id, questions.question, questions.created_at, COUNT(answers.id) as answer_count, questions.tag1, questions.tag2, questions.tag3');
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
    public function searchQuestions($query) {
        $this->db->select('id, user_id, question, tag1, tag2, tag3, created_at');
        $this->db->from('questions');
        $this->db->like('question', $query);
        $this->db->or_like('tag1', $query);
        $this->db->or_like('tag2', $query);
        $this->db->or_like('tag3', $query);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getUserData($user_id){
        $this->db->select('id, username, email, profession, biography');
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        return  $query->row_array(); // Returning the results as an array 

    }

}
?>