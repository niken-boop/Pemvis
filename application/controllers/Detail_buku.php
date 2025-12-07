<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_buku extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Book_model');  //akses database
    }

    public function detail($id) {
        $book_data = $this->Book_model->get_book_details($id); //mengambil data buku berdasarkan id


        $data['book'] = $book_data; 
        $data['isFav'] = false; // Placeholder untuk status favorit

        $this->load->view('detail_buku_view', $data);
    }

}
?>
