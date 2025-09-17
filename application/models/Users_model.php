<?php 
class Users_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_user_data($user_login){
        $this->db
            ->select("user_id, password_hash, user_nome, user_email")
            ->from("users")
            ->where("user_login", $user_login);


        $result = $this->db->get();    
    }
}