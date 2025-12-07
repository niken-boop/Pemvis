<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Book_model extends CI_Model {

    // Ambil semua buku
    public function get_all_books() {
        return $this->db->get('books')->result();
    }

    // Ambil 1 buku (untuk edit)
    public function get_book_by_id($id) {
        return $this->db->get_where('books', ['id' => $id])->row();
    }

    // Simpan buku
    public function insert_book($data) {
        return $this->db->insert('books', $data);
    }

    // Update buku
    public function update_book($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('books', $data);
    }

    // Hapus buku
    public function delete_book($id) {
        $book = $this->get_book_by_id($id);
        // Hapus file gambar jika ada
        if ($book && $book->cover != 'default.jpg' && file_exists('./asset/' . $book->cover)) {
            unlink('./asset/' . $book->cover);
        }
        $this->db->where('id', $id);
        return $this->db->delete('books');
    }
}