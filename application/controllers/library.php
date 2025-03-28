<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('book_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['books'] = $this->book_model->get_books();
        $this->load->view('view_library', $data);
    }

    public function add() {
        $this->Book_model->add_book(array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'published_year' => $this->input->post('published_year')
        ));
        redirect('library');
    }

    public function delete($id) {
        $this->Book_model->delete_book($id);
        redirect('library');
    }

}
