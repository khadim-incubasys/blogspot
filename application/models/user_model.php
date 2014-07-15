<?php
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        //$this->load->database();
       
       $this->load->helper('array');
     }
	

	function signUp()
	{
			  $new_insert_data=array(
                             'fname'=>$this->input->post('fname'),
                             'lname'=>$this->input->post('lname'),
                             'email'=>$this->input->post('email'),
                             'pwd'=>$this->input->post('pwd'),
                             'pic'=>base_url().'uploads/wallpapers.gif'  // dummy pic
		                     );
		$insert=$this->db->insert('user',$new_insert_data);
		return $insert;
	}
	function signup_fromfb($param)
	{
		//print_r($param);
	
	    $this->db->where('email',$param['email']);
		$query = $this->db->get('user');
	
		if($query->num_rows()==1)
		{
		    $object = ($query);
		     $row = $query->row();
		    return $row ;
		}
		else
		{

		         $new_insert_data=array(
                              'fname'=>$param['fname'],
                              'lname'=>$param['lname'],
                              'email'=>$param['email'],
                              'pwd'=>'dummy',
                              'pic'=>'https://graph.facebook.com/'.$param['pic'].'/picture?type=large'
		                      );
		        $insert=$this->db->insert('user',$new_insert_data);
	   
	    $this->db->where('email',$param['email']);
		$query = $this->db->get('user');
		if($query->num_rows()==1)
		{
		    $object = ($query);
		     $row = $query->row();
		    return $row ;
		}
		}
	}
	 function login()
	{ 
		
	    $this->db->where('email',$this->input->post('email'));
	    $this->db->where('pwd',($this->input->post('pwd')));
		$query = $this->db->get('user');
	
		if($query->num_rows()==1)
		{
		    $this->load->helper('array');
		    $object = ($query);
		     $row = $query->row();
		    return $row ;
		}
		else
			return false;
	}
	function get_image($param)
    {
        $this->db->select('fname','pic');
        $this->db->where('id', $param); 
        $query = $this->db->get("user");
        return $query;
   }
	
}

//$row = $query->row(); 

// $row = $query->row_array(); 
// echo $row['title'];
// echo $row['name'];


// $query = $this->db->query("YOUR QUERY");
// foreach ($query->result_array() as $row)
// {
//    echo $row['title'];
//    echo $row['name'];
//    echo $row['body'];
// }