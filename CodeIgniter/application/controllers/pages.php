<?php

class Pages extends CI_Controller{

	public function view($page='home')
	{
	
	if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		//Whoops, we don't have a page for that!
		//show_404();
	}
	
	$data['title'] = ucfirst($page); // Capitalize the first letter
	
	$this->load->view('templates/header', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);
	
	}
	
	function getValues(){
		$this->load->model("jobs_model");
		
		$data['results']= $this->jobs_model->getAll();
		$this->load->view("jobs_view", $data);
		}
	
	function insertValues(){
	$this->load->model("jobs_model");
	
	$newRow=array(
			"name"=>"bob"
		);
		$this->jobs_model->insert1($newRow);
	
	/*
		//$this->jobs_model->insert2($newRow); // pass in an array. which is one record.*/
		
		echo"it submitted";
	}
}	