<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounting_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert_entry($data) {
        return $this->db->insert('transactions', $data);
    }
}
