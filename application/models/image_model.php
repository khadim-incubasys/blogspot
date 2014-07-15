<?php
class Image_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
       $this->load->helper('text');
       $this->load->helper('string');
     }
     function add_images($name)
    {
    	 $this->db->select_max('id');
         $query= $this->db->get('blogPost');
         $maxid=0;
         foreach ($query->result() as $row)
			{
			    $maxid=$row->id;
			}
         $new_insert_data=array(
             'image_name'=>$name,
              'postid'=> $maxid
        						);
        $insert=$this->db->insert('uploads',$new_insert_data);
        return $insert;
    }
    function fetch_images($param)
    {
        $this->db->order_by("order", "desc");
        $this->db->where('postid', $param); 
        $query = $this->db->get("uploads");
        return $query;
   }
   
   function order_set()
   {
    for ($i=0; $i < $this->input->post('count') ; $i++) 
    {
    
      $data = array(
               'order' => $this->input->post($i)
            );
            $this->db->where('id',$this->input->post('pid'.$i));
            $this->db->update('uploads', $data); 

    }
    return true;
   }

}