<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	public function SaveQuestions() {

        $userdata = $this->session->userdata('user_details');

        $data = [
            'user_id' => $userdata['user_id'], 
            'question' => $this->input->post('askQuestion'),
            'tag1' => $this->input->post('tag1'),
            'tag2' => $this->input->post('tag2'),
            'tag3' => $this->input->post('tag3'),
            'question_image' => $this->input->post('questionImg') 
        ];

        $this->load->model('SaveQuestionsModel');
        $result=$this->SaveQuestionsModel->save_question($data);

        if ($result) {
            $this->session->set_flashdata('message', 'Question posted successfully.');
            
        } else {
            $this->session->set_flashdata('message', 'Failed to post the question.');
        }
        
        $this->load->view('PostQuestion',$userdata);
    }

    public function search() {
        $query = $this->input->post('query');

        $this->load->model('GetDataModel');
        $questions = $this->GetDataModel->searchQuestions($query);
        
        if ($questions) {
            echo json_encode(array('status' => 'success', 'questions' => $questions));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'No questions found.'));
        }
    }

}
