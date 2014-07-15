<?php
class Category_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        //$this->load->database();
       $this->load->helper('text');
       $this->load->helper('string');
     }
     function add_cat()
    {

    $trimmed= trim($this->input->post('post'));
     $new_insert_data=array(
             'blogid'=>1,
             'post'=>$trimmed,
             'title'=>$this->input->post('title'),
             'author'=>($this->session->userdata('udata')->userid)
        );
        $insert=$this->db->insert('blogPost',$new_insert_data);
        return $insert;
    }
	function retrieve_cat()
	{  
	 $query = $this->db->get('blogCategory');
     return $query;
	}
}