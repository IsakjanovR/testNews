<?php

class check_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function check_users()
    {
        if (isset($_COOKIE['user_inf'])) {
            $query_login = $this->db->get_where('users', array('activation_code' => $_COOKIE['user_inf']));
            if ($query_login->num_rows() > 0) {
                return $query_login->row_array();
            } else {

            }
        }
    }
}