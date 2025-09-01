<?php

class Models extends CI_Model {
    // to load database library *IMPORTANT*
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function Get_ID($id){
        $this->db->where('id', $id);
        $query = $this->db->get('account');
        
        return $query->row_array();
    }

    public function Get_By_Username($username) {
        $query = $this->db->get_where('account', ['username' => $username]);
        return $query->row_array();
    }

    public function ADD_Account($data) {
        $this->db->insert('account', $data);
    }
}