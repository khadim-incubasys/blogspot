<?php
class TestController extends CI_Controller 
{
	public function foo()
	{
                // $this->load->model('testModel');
		 //$query = $this->testModel->validate();
  
                 $data['whatever'] =  null;
		$this->load->view('testview',$data);
	}

}
