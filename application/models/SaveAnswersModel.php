<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaveAnswersModel extends CI_Model {

    public function saveAnswer($questionId, $answerText, $userId) {
        $data = array(
            'question_id' => $questionId,
            'user_id' => $userId,
            'content' => $answerText,
            'created_at' => date('Y-m-d H:i:s') // Assuming you have a created_at field for timestamps
        );
        $result=$this->db->insert('answers', $data);
        return $result && ($this->db->affected_rows() > 0);
    }
}
