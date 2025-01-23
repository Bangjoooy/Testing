<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounting extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Accounting_model');
    }

    public function index() {
        $this->load->view('accounting/form');
    }

    public function submit() {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'deskripsi' => $this->input->post('deskripsi'),
            'jumlah' => $this->input->post('jumlah'),
            'jenis_transaksi' => $this->input->post('jenis_transaksi')
        ];

        $this->Accounting_model->insert_entry($data);
        redirect('accounting');
    }
}
