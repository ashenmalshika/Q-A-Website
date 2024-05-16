<?php
class GetAnswersModel extends CI_Model {

public function getAnswers($questionId) {
    $this->db->where('question_id', $questionId);
    $query = $this->db->get('answers');

    if ($query->num_rows() > 0) {
        return $query->result_array();
    } else {
        return false;
    }
}
}
?>