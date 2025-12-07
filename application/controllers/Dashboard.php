<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        // Cek status login
        if (!$this->session->userdata('user_id')) { 
            redirect('daftar');
        }
    }
/*menampilkan hlm dashboard */
    public function index() {
        $this->load->view('dashboard_view');
    }
}