<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fancyupload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        // load the libraries at first
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }
    
    // front view
    function index()
    {
        echo (base_url().('uploads/'));
        $this->load->view('fancyupload_view');
    }
    function do_upload()
    {
        $allowed = array('png', 'jpg', 'gif','zip');

        if(isset($_FILES['upload_file']) && $_FILES['upload_file']['error'] == 0)
        {
            $vpb_file_id = strip_tags($_POST['upload_file_ids']);

            $extension = pathinfo($_FILES['upload_file']['name'], PATHINFO_EXTENSION);
            if(move_uploaded_file($_FILES['upload_file']['tmp_name'], 'uploads/'.$_FILES['upload_file']['name']))
            {
                $name='uploads/'.$_FILES['upload_file']['name'];
                 $this->load->model('Image_model');
                 $result=$this->Image_model->add_images($name);
                echo $vpb_file_id;
            }
            else
            {
                //Display general system error
                echo 'general_system_error';
            }
            // if(!in_array(strtolower($extension), $allowed))
            // {
            //     echo '{"status":"error"}';
            // }  
        }
    }
}