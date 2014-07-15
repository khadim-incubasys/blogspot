<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class post extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
       $this->load->helper('text');
       $this->load->helper('string');
     }

	public function laodView($param=NULL)
	{
		
		$this->load->model('Post_model');
		$data['query']=$this->Post_model->retrievePost($param);
		$this->load->model('Comment_model');
		$data['comments']=$this->Comment_model->retrieveComments($param);
		$data['post_id']=$param;
		
		$this->load->model('Image_model');
		$data['images']=$this->Image_model->fetch_images($param);

		$this->load->model('Category_model');
		$data['cat']=$this->Category_model->retrieve_cat();

		$this->load->view('partial/header',$data);
		$this->load->view('post_view',$data);
		$this->load->view('partial/footer');
	}

	public function viewarticle($param)
	{
		
		$this->laodView($param);
	}
	public function addComment()
	{
		$this->load->model('Comment_model');
		$this->Comment_model->add_comment();
		$data['message']='Comment added Successfully! . . :)';
        $data['home']='';
        $this->load->model('Category_model');
		$data['cat']=$this->Category_model->retrieve_cat();
        $this->load->view('partial/header',$data);
		$this->load->view('errorshow',$data);
		$this->load->view('partial/footer');
	}
	public function addnewpost()
	{
		$this->load->model('Category_model');
		$data['cat']=$this->Category_model->retrieve_cat();
        $this->load->view('partial/header',$data);

		if (!$this->session->userdata('udata'))
        {
        	$data['param']='';
        	$data['message']='Sorry.. Please login . . :( :( :(';
	        $data['home']='user/index';
			$this->load->view('errorshow',$data);
        }
        else
        {
			$this->load->view('newpost',$data);
		}
		$this->load->view('partial/footer');
	}
	public function newPost()
	{
		$this->load->model('Post_model');
		$param=$this->Post_model->add_post();
		$data['param']=$param;
		$this->load->model('Post_model');
		$data['query']=$this->Post_model->retrievePost($param);
        $this->load->model('Category_model');
        $data['message']='Post added Successfully! . . :)';
        $data['home']='post/upload_img';
		$data['cat']=$this->Category_model->retrieve_cat();
        $this->load->view('partial/header',$data);
		$this->load->view('errorshow',$data);
	    $this->load->view('partial/footer');
	}
	public function upload_img($param)
	{
		$data['param']=$param;
		$this->load->model('Post_model');
		$data['query']=$this->Post_model->retrievePost($param);
        $this->load->model('Category_model');
		$data['cat']=$this->Category_model->retrieve_cat();
        $this->load->view('partial/header',$data);
		$this->load->view('uploadimages_view',$data);
	    $this->load->view('partial/footer');
	}
	function preview($param)
	{
		$this->load->model('Post_model');
		$data['query']=$this->Post_model->retrievePost($param);
		$this->load->model('Image_model');
		$data['images']=$this->Image_model->fetch_images($param);
		$data['param']=$param;
		 $this->load->model('Category_model');
		 $data['cat']=$this->Category_model->retrieve_cat();

         $this->load->view('partial/header',$data);
		$this->load->view('preview_view',$data);
	    $this->load->view('partial/footer');
	}
}