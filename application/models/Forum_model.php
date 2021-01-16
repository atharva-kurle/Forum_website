<?php

class Forum_model extends CI_Model
{
    function add($data)
    {
        return $this->db->insert('topics',$data);
    }

    function radd($data)
    {
        return $this->db->insert('reply_to_replies',$data);
    }


    function getAllPosts()
    {
        return $this->db->get('topics')->result_array();
    }

    function getPostRows()
    {
        return $this->db->get('topics')->num_rows();
    }

    function getReplyRows()
    {
        return $this->db->get('replies')->num_rows();
    }

    function storeReply($data)
    {
        return $this->db->insert('replies',$data);
    }

    function getAllReplies()
    {
        $this->db->select('*');
        $this->db->from('topics');
        $this->db->join('replies', 'replies.t_id = topics.t_id');
        return $this->db->get()->result_array();
    }

    function getAllr2r()
    {
        $this->db->select('*');
        $this->db->from('replies');
        $this->db->join('reply_to_replies', 'reply_to_replies.r_id = replies.r_id');
        return $this->db->get()->result_array();
    }

    function getr2rRows()
    {
        return $this->db->get('reply_to_replies')->num_rows();
    }


}