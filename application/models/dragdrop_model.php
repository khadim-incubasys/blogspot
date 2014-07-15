<?php
class Dragdrop_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    function saverecords()
    {
        $updateRecordsArray = $_POST['recordsArray'];
        $listingCounter = 1;
        foreach ($updateRecordsArray as $recordIDValue) 
        {
            
            $query = "UPDATE records SET recordListingID = " . $listingCounter . " WHERE recordID = " . $recordIDValue;
            mysql_query($query) or die('Error, insert query failed');
            $listingCounter = $listingCounter + 1;  
        }
        return true;
    }
    function save_orders()
    {
        
            $ids = $_POST["ids"];
            $pid=$_POST["pid"];
            // print_r($ids);
            for ($idx = 0; $idx < count($ids); $idx+=1) 
            {
                $id = $ids[$idx];
                $data = array(
               'order' =>$idx
               );
                
            $this->db->where('id', $id);
            $this->db->where('postid', $pid);
            $this->db->update('uploads', $data); 
                 print_r($id);

            }
            return ;
    }
}