<?php
class Post_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        //$this->load->database();
       $this->load->helper('text');
       $this->load->helper('string');
     }
     function add_post()
    {

    $trimmed= trim($this->input->post('post'));
     $new_insert_data=array(
             'blogid'=>$this->input->post('cat'),
             'post'=>$trimmed,
             'title'=>$this->input->post('title'),
             'author'=>$this->session->userdata('udata')->id
        );
        $this->db->insert('blogPost',$new_insert_data);

        return $this->db->insert_id();
    }
	
    function retrievePost($param)
    {
        
     $this->db->where('id',$param);   
    $query = $this->db->get('blogPost');
     return $query;
    }
    function selectAll()
    {
    $query = $this->db->query('SELECT * FROM blogPost');
     return $query;
    }
    function record_count() {
        return $this->db->count_all("blogPost");
    }
    function fetch_all_posts($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("blogPost");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}