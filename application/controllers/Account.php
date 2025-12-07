<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session'); //cek status login
    }

    public function index() {
        if (!$this->session->userdata('user_id')) {
            redirect('daftar');
        }

$user_id = $this->session->userdata('user_id');
$data['user'] = $this->User_model->get_user_by_id($user_id);


        $this->load->view('account_view', $data);
    }
}
