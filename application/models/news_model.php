<?php

class news_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();

    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('news', array('slug' => $slug));
            return $query->row_array();
        }

    }
    public function get_news_view($id)
    {
        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();

    }
    public function get_news_from_user($user_id)
    {
        $query = $this->db->get_where('news', array('user_id' => $user_id));
        return $query->result_array();
    }
    public function get_news_user($user_id)
    {
        $query2 = $this->db->get_where('users', array('id'=> $user_id));
        return $query2->row_array();
    }

    public function set_news($image,$data)
    {
       $id = $data['id'];
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'),'dash',TRUE);
        $data = array(
            'title' => $this->input->post('title'),
            'image' => $image,
            'slug' => $slug,
            'text'=> $this->input->post('text'),
            'user_id' => $id,
        );

       return $this->db->insert('news',$data);
    }




}