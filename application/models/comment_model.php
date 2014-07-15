<?php
class Comment_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function retrieveComments($param)
	{

     $this->db->where('postid',$param);   
	$query = $this->db->get('comment');
     return $query;
	}
    function add_comment()
    {
        $new_insert_data=array(
             'postid'=>$this->input->post('postid'),
             'comment'=>$this->input->post('comment'),
             'author'=>$this->session->userdata('udata')->id
        );
        $insert=$this->db->insert('comment',$new_insert_data);
        return $insert;
    }
}