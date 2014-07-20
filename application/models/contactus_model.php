<?php
class Contactus_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        /* server timezone */
	define('CONST_SERVER_TIMEZONE', 'UTC');
	 
	/* server dateformat */
	define('CONST_SERVER_DATEFORMAT', 'YmdHis');
	    }
    function savemessage()
    {
    	$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('text', 'msg', 'required|min_length[2]|max_length[200]');
		if ($this->form_validation->run() == FALSE)
		{
			echo validation_errors(); 
		}
		else
		{
			date_default_timezone_set('Asia/Karachi');
			
			$dt = new DateTime('now');
			// print_r($dt->format('Y-m-d H:i:s'));
			// die();
	    	$new_insert_data=array(
	                             'name'=>$this->input->post('name'),
	                             'email'=>$this->input->post('email'),
	                             'msg'=>$this->input->post('text'),
	                             'date'=>$dt->format('Y-m-d H:i:s')
			                     );
			$insert=$this->db->insert('contactus',$new_insert_data);
		return $insert;
		}
    }
    function fetch_messages()
    {  
    $query = $this->db->get('contactus');
     return $query;
    }
}