<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Insert data user baru
    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    // Ambil user berdasarkan username (untuk login)
    public function get_user($username) {
        return $this->db->get_where('users', ['username' => $username])->row();
    }

    // Ambil user berdasarkan ID (untuk halaman Account)
    public function get_user_by_id($id) {
        return $this->db->get_where('users', ['id' => $id])->row();
    }
}

