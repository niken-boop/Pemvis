<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_model {

    // Mengambil satu data detail buku berdasarkan ID
    public function get_book_details($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('books');
        return $query->row(); // Mengembalikan satu object
    }
    
    // ... method lain (get_all_books) jika ada ...
}
?>