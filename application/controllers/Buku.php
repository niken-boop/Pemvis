<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Buku extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Book_model');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $data['books'] = $this->Book_model->get_all_books();
        $this->load->view('list_buku_view', $data);
    }

    public function tambah() {
        $this->load->view('tambah_buku_view');
    }

    public function simpan() {
        $config['upload_path']   = './asset/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name']     = 'buku_' . time();

        $this->upload->initialize($config);

        if ($this->upload->do_upload('cover')) {
            $cover = $this->upload->data('file_name');
        } else {
            $cover = 'default.jpg';
        }

        $data = [
            'title'    => $this->input->post('title'),
            'author'   => $this->input->post('author'),
            'sinopsis' => $this->input->post('sinopsis'),
            'cover'    => $cover
        ];

        $this->Book_model->insert_book($data);
        redirect('buku');
    }

    public function edit($id) {
        $data['book'] = $this->Book_model->get_book_by_id($id);
        $this->load->view('edit_buku_view', $data);
    }

    public function update($id) {
        $data = [
            'title'    => $this->input->post('title'),
            'author'   => $this->input->post('author'),
            'sinopsis' => $this->input->post('sinopsis'),
        ];

        if (!empty($_FILES['cover']['name'])) {
            $config['upload_path']   = './asset/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name']     = 'buku_' . time();

            $this->upload->initialize($config);

            if ($this->upload->do_upload('cover')) {
                // Hapus cover lama
                $old = $this->Book_model->get_book_by_id($id);
                if($old && $old->cover != 'default.jpg' && file_exists('./asset/'.$old->cover)){
                    unlink('./asset/'.$old->cover);
                }
                $data['cover'] = $this->upload->data('file_name');
            }
        }

        $this->Book_model->update_book($id, $data);
        redirect('buku');
    }

    public function hapus($id) {
        $this->Book_model->delete_book($id);
        redirect('buku');
    }
}