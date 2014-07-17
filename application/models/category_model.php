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
             'post'=>$trimmed,
             'title'=>$this->input->post('title'),
             'author'=>($this->session->userdata('udata')->userid)
        );
        $insert=$this->db->insert('blogCategory',$new_insert_data);
        return $insert;
    }
	function retrieve_cat()
	{  
	 $query = $this->db->get('blogCategory');
     return $query;
	}

// **********************
function getRecords(){
    $query = $this->db->get('blogCategory');
     return $query;
  } 

  function save($data)
  {
    if(count($data)){
        $values = implode("','", array_values($data));
        $mysql_query="insert into blogCategory (".implode(",",array_keys($data)).") values ('".$values."')";
        $this->db->query($mysql_query);
    return 1;
    }
     else return 0;  
  } 

  function delete_record($id){
     if($id){
        mysql_query("delete from blogCategory where id = $id limit 1");
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
        $sql = "update blogCategory set $str where id = $id limit 1";

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
        $sql = "update blogCategory set ".key($data)."='".$data[key($data)]."' where id = $id limit 1";
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