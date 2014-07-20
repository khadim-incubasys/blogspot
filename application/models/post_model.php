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
    function fetch_new_posts()
    {
        $this->db->where('approve','0');
        $query = $this->db->get("blogPost");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
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

   // **********************
function getRecords(){
    $query = $this->db->get('blogPost');
     return $query;
  } 

  function save($data)
  {
    if(count($data)){
        $values = implode("','", array_values($data));
        $mysql_query="insert into blogPost (".implode(",",array_keys($data)).") values ('".$values."')";
        $this->db->query($mysql_query);
    return 1;
    }
     else return 0;  
  } 

  function delete_record($id){
     if($id){
        mysql_query("delete from blogPost where id = $id limit 1");
        return mysql_affected_rows();
     }
  } 
  function approve_record($id){
     if($id)
     {
        mysql_query("UPDATE `blogPost` SET `approve`=1 WHERE `id`=$id limit 1");
        return mysql_affected_rows();
     }
  } 
  function update_record($data){
    if(count($data)){
        $id = $data['rid'];
        unset($data['rid']);
        $values = implode("','", array_values($data));
        $str = "";
        foreach($data as $key=>$val){
            $str .= $key."='".$val."',";
        }
        $str = substr($str,0,-1);
        $sql = "update blogPost set $str where id = $id limit 1";

        $res = mysql_query($sql);
        
        if(mysql_affected_rows())
         return $id;
     else
        return 0;
    }
    else return 0;  
  } 

  function update_column($data){
    if(count($data)){
        $id = $data['rid'];
        unset($data['rid']);
        $sql = "update blogPost set ".key($data)."='".$data[key($data)]."' where id = $id limit 1";
        $res = mysql_query($sql);
        if(mysql_affected_rows()) return $id;
        return 0;
        
    }   
  }

  function error($act){
     return json_encode(array("success" => "0","action" => $act));
  }

    // **************************



   
}