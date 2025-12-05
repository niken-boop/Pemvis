<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata('user_id')) {
            redirect('daftar');
        }
    }

    public function index() {
        $this->load->view('dashboard_view');
    }
    /* public function detail($judul) {
        // data manual (tanpa database)
        if ($judul == 'Dallergut') {
            $data['judul'] = 'Dallergut: Toko Penjual Mimpi';
            $data['penulis'] = 'Lee Miye';
            $data['gambar'] = base_url('asset/Dallergut.jpg');
            $data['harga_paper'] = 'Rp89.000';
            $data['harga_ebook'] = 'Rp30.000';
            $data['sinopsis'] = 'Novel fantasi karya Lee Miye tentang toko tempat mimpi dijual dan dibeli, dengan kisah hangat dan penuh makna.';
        }
    } */
}