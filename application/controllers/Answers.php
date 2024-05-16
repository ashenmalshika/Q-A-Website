<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answers extends CI_Controller {

	public function saveAnswers() {
        $questionId = $this->input->post('questionId');
        $answerText = $this->input->post('answerText');
        $userId = $this->input->post('userId');


        $this->load->model('SaveAnswersModel');
        $result = $this->SaveAnswersModel->saveAnswer($questionId, $answerText, $userId);

        if ($result) {
            echo json_encode(array('status' => 'success', 'message' => 'Answer posted successfully'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Failed to post answer'));
        }
    }
    public function getAnswers() {
        $questionId = $this->input->post('questionId');

        $this->load->model('GetAnswersModel');
        $answers = $this->GetAnswersModel->getAnswers($questionId);

        if ($answers) {
            echo json_encode(array('status' => 'success', 'answers' => $answers));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'No answers found.'));
        }
    }

}
