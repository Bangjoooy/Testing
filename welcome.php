<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        // Tampilkan halaman index.html
        $this->load->view('index'); // pastikan index.html disimpan sebagai index.php atau template view
    }
}
