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
}
