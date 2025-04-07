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
        $this->book_model->add_book(array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'published_year' => $this->input->post('published_year')
        ));
     
        redirect('library');
    }

    public function borrow($id) {
        $this->book_model->borrow_book($id);
        redirect('library');
    }

    public function return_book($id) {
        $this->book_model->return_book($id);
        redirect('library');
    }

       
    public function view() {
        
        $data['book_records'] = $this->Book_model->get_borrowed_books(); 

        $this->load->view('view_library', $data);
    }

    public function delete($id) {
        $this->load->model('Book_model');  // Load the model
        $this->Book_model->delete_book($id);  // Call the delete method in the model
        redirect('library');  // Redirect back to the library page
    }
}
