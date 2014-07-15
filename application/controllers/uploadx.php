<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Uploadx extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        // load the libraries at first
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('image_lib');
    }
    
    // front view
    function index()
    {
        $this->load->view('upload_view');
    }
    function do_upload()
    {
        $allowed = array('png', 'jpg', 'gif','zip');

        if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0)
        {

            $extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

            if(!in_array(strtolower($extension), $allowed)){
                echo '{"status":"error"}';
                exit;
            }

            if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name']))
            {
                echo '{"status":"success"}';
                exit;
            }
        }
        echo "string";
    }
}