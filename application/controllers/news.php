<?php
class News extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('check_model');
        $this->load->model('news_model');
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News Archive';
        $data['userInf']= $this->check_model->check_users();
        $this->load->view('templates/header',$data);
        $this->load->view('news/index',$data);
        $this->load->view('templates/footer',$data);
    }
    public function view()
    {
        $id = $_GET['id'];
        $data['news'] = $this->news_model->get_news_view($id);
        $user_id = $data['news']['user_id'];
        $data['users'] = $this->news_model-> get_news_user($user_id);
        $data['userInf']= $this->check_model->check_users();
        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['userInf']= $this->check_model->check_users();
        $data['title']= 'Create news';
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('text','text','required');

        if ($this->form_validation->run()===false){
            $this->load->view('templates/header',$data);
            $this->load->view('news/create');
            $this->load->view('templates/footer',$data);
        }
        else{
            $this->upload();
            $image = $this->upload->data('file_name');
            $this->news_model->set_news($image,$data['userInf']);
            $this->load->view('news/success');
        }
    }

public function upload()
{
    $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/testNews/img/';
    $config['allowed_types'] = "jpg|jpeg|png|gif|flv|mp4|wmv|doc|docx|xsl|xslx|ppt|pptx|zip|rar|tar";
    $config['max_size']	= 2048;
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload() == false) {
        echo "Ошибка загрузки файла";
    }else{
        $this->upload->data('file_name');

    }
}

}