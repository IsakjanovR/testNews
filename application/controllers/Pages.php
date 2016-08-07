<?php

class Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('check_model');
    }

    public function view($page = 'home')
    {

        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            show_404();
        }
        $data['userInf']= $this->check_model->check_users();
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer',$data);
    }
}