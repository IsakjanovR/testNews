<?php
class Users extends CI_Controller {

    public function __construct()

    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('check_model');
        $this->load->model('news_model');
        $this->load->library('session');
    }

    public function register()
    {
        $data['title']= 'Create users';
        $this->load->helper('form');
        $this->load->library('form_validation');
        $query = $this->db->get_where('users', array('username'=> $this->input->post('username')));
        $query2 = $this->db->get_where('users', array('email'=> $this->input->post('email')));

        if (empty($_POST)){
            $this->load->view('templates/header',$data);
            $this->load->view('users/register');
            $this->load->view('templates/footer',$data);
        }
        else{
            if ($query->num_rows() > 0){
                echo "Такой пользователь есть";
            }
            elseif ($query2->num_rows()>0){
                echo "Такой емеил уже зпрегистрирован";
            }
            else {
                $this->user_model->register();
               $this->load->view('users/success');
            }
        }
    }

    public function login()
    {
        $data['title']= 'Create users';
        $this->load->helper('form');
        $this->load->library('form_validation');


        $query = $this->db->get_where('users' ,array('username' => $this->input->post('username')));
        $password = md5($this->input->post('password'));
        $login = $this->input->post('username');
        if (empty($_POST)){
            $this->load->view('templates/header',$data);
            $this->load->view('users/login');
            $this->load->view('templates/footer',$data);

        }
        else{
            if ($query->num_rows() == 0){
                echo "вы не зарегистрированы";
            }
            else {

                $data= $query->row_array();
                if ($data['password'] == $password){
                    $this->user_model->login($login);
                  $this->load->view('users/successlog');

                }
                else{
                    echo "неверный пароль";
                }


            }
        }
    }

    public function mypage()
    {
        $data['title']= 'My page';
        $data['userInf']= $this->check_model->check_users();
        $user_id = $data['userInf']['id'];
        $data['news_user'] = $this->news_model-> get_news_from_user($user_id);
        $this->load->view('templates/header',$data);
        $this->load->view('users/mypage',$data);
        $this->load->view('templates/footer',$data);
    }
}