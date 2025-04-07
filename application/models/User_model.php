<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_user_by_email($email) {
        return $this->db->get_where('users', array('email' => $email))->row_array();
    }

    public function register_user($data) {
        return $this->db->insert('users', $data);
    }
    
    public function borrow($id) {
        $this->load->model('Book_model');
        $user_id = 1; 
        $this->Book_model->borrow_book($id, $user_id);
        redirect('library');
    }

    public function return_book($id) {
        $this->load->model('Book_model');
        $this->Book_model->return_book($id);
        redirect('library');
    }
}
?>

