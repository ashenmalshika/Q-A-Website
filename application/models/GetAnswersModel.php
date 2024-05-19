<?php
class GetAnswersModel extends CI_Model {

    public function getAnswers($questionId) {
        $this->db->select('answers.content, answers.created_at, users.username, answers.user_id');
        $this->db->from('answers');
        $this->db->join('users', 'users.id = answers.user_id');
        $this->db->where('answers.question_id', $questionId);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}
?>