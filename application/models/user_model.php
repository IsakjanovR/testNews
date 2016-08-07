<?php

class user_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();


    }

    public function get_key()
    {
        $str  = "abcdefghijklmnopqrstuvwxyz0123456789";
        $hash = "";
        for ($i = 0; $i < 32; $i++) {
            $hash.= $str[rand(0, 35)];
        }
        return $hash;
    }

    public function register()
    {
        $log['login'] = trim(strip_tags($this->input->post('username')));
        $log['pass'] = md5($this->input->post('password'));
        $this->load->helper('url');

        $token = $this->get_key();
        setcookie ("session", $token);
        setcookie("user_inf", $token, time()+2400000,"/");


        $data = array(
            'username' => $log['login'],
            'password' => $log['pass'],
            'email' => $this->input->post('email'),
            'activation_code' => $token
        );
        return $this->db->insert('users', $data);

    }

    public function login($login)
    {
        $this->load->helper('url');
        $token = $this->get_key();
        setcookie ("session", $token);
        setcookie("user_inf", $token, time()+2400000,"/");

        $data = array(
            'activation_code' => $token
        );
        return $this->db->update('users', $data,array('username' => $login));
var_dump($data);
    }
}