<?php

class book_model extends CI_Model{
    public function get_books() {
        return $this->db->get('books')->result_array();
    }

    public function add_book ($data) {
        return $this->db->insert('books', $data);
    }

    public function borrow_book($book_id) {
        $data = array(
            'status' => 'Borrowed'
        );
        $this->db->where('id', $book_id);
        return $this->db->update('books', $data);
    }
 
    public function return_book($book_id) {
        $data = array(
            'status' => 'Available'
        );
        $this->db->where('id', $book_id);
        return $this->db->update('books', $data);
    }

    public function get_all_transactions() {
       
        $this->db->select('u.name as borrower_name, b.title as book_title, br.borrow_date, br.return_date');
        $this->db->from('borrow_records br');
        $this->db->join('users u', 'br.user_id = u.id'); 
        $this->db->join('books b', 'br.book_id = b.id');  
        $query = $this->db->get();

        return $query->result_array();
}

public function delete_book($book_id) {
    $this->db->where('id', $book_id);  
    return $this->db->delete('books');   

}
}
?>