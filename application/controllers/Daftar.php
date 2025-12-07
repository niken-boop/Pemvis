<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); //fungsi redirect, base_url
        $this->load->model('User_model');   //akses database
        $this->load->library('session'); //cek status login
        log_message('debug', 'Daftar controller loaded.');
    }
/*memanggil hlm login */
    public function index() {
        $this->load->view('auth_view');
    }

    public function signup() { //fungsi regis
        $data = array(
            'username'   => $this->input->post('username'),
            'email'      => $this->input->post('email'),
            'password'   => password_hash($this->input->post('password'), PASSWORD_BCRYPT), //hash pw
            'created_at' => date('Y-m-d H:i:s')
        );

        if ($this->User_model->insert_user($data)) { //simpan data
            $this->session->set_flashdata('success', 'Akun berhasil dibuat! Silakan login.');
            redirect('daftar'); 
        } else {
            $error = $this->db->error(); //mengambil error db
            $this->session->set_flashdata('error', 'Gagal menyimpan data! '.$error['message']);
            redirect('daftar');
        }
    }

    public function login() { //fungsi log
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->User_model->get_user($username);

        if (!$user) { //jika user tdk ditemukan
            echo "Username tidak ditemukan!";
            return;
        }

        if (password_verify($password, $user->password)) { //cek pw
            $this->session->set_userdata('user_id', $user->id); 
            redirect('dashboard');
        } else {
            echo "Password salah!";
        }
    }
}
