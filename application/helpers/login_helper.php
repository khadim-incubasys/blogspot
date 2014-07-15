<?php
function loaderrorshow($arr) 
{
                $data['message']=$arr['msg'];
				$data['home']=$arr['url'];
				$object=$arr['obj'];
				$object->load->model('Category_model');
				$data['cat']=$object->Category_model->retrieve_cat();

				$object->load->view('partial/header',$data);
				$object->load->view('errorshow',$data);
				$object->load->view('partial/footer');
}
