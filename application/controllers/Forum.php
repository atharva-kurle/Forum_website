<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->model('Forum_model');
    }
    public function index()
	{
        if($this->input->post() != NULL)
        {

            $data = array(
                't_id' => $this->input->post('t_id'),
                'reply' => $this->input->post('reply'),
                'time' => date()
            );

            $result = $data['topics'] = $this->Forum_model->storeReply($data);
            if($result == 1)
            {
                return redirect(base_url());
            }
        }
        else{
        $data['topics'] = $this->Forum_model->getAllPosts();
        $data['t_rows'] = $this->Forum_model->getPostRows();

        $data['replies'] = $this->Forum_model->getAllReplies();        
        $data['r_rows'] = $this->Forum_model->getReplyRows();

        $data['r_to_r'] = $this->Forum_model->getAllr2r();   
        $data['rr_rows'] = $this->Forum_model->getr2rRows();   

     
        // echo "<pre>";
        // print_r($data);
        
        $this->load->view('index', $data);
        }
    }


    public function add()
    {
        

        if($this->input->post() != NULL)
        {
            $data = array(
                'topic' => $this->input->post('topic'),
                'category' => $this->input->post('category'),
                'name' => $this->input->post('name'),
                'qualification' => $this->input->post('qualification'),
                'time' => date('y-m-d')
            );

            $result = $this->Forum_model->add($data);
            
            if($result == 1)
            {
                return redirect(base_url());
            }

            //print_r($result);
        }
        else
        {
            $this->load->view('add');
        }
    }


    public function radd()
    {
        

        if($this->input->post() != NULL)
        {
            $data = array(
                'r_id' => $this->input->post('r_id'),
                'reply_to_reply' => $this->input->post('reply_to_reply'),
                'date' => date('y-m-d')
            );

            $result = $this->Forum_model->radd($data);
            
            if($result == 1)
            {
                return redirect(base_url());
            }

            //print_r($result);
        }
        else
        {
            $this->load->view('index');
        }
    }



    
    

	
}