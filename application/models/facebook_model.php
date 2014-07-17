<?php
class Facebook_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
       $this->load->helper('text');
       $this->load->helper('string');
        $this->load->helper('url');
        $this->load->helper('array');
         $this->load->helper('login');
     }
     function login_from_fb($param)
     {
        try 
            {
                $use = $this->facebook->api($param);
                $data['user_profile'] = $this->facebook->api('/me');
           
                $udata=array(
                    'fname' => $use['first_name'],
                    'lname' => $use['last_name'],
                     'pic'=> $data['user_profile']['id'],   ///fetching profile picture
                    'email' => $use['email']
                    );
                $this->load->model('User_model');
                $result=$this->User_model->signup_fromfb($udata);
                                                
                $this->session->set_userdata('udata', $result);
               
                $arr['msg']='Loged In Successfully! . . :)';
                $arr['url']='admin/index';
                $arr['obj']=$this;
                 loaderrorshow($arr);
            } 
            catch (FacebookApiException $e) 
                {
                    $param= null;
                }
     }
}