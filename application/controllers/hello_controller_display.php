<?php
class hello_controller_display extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('hello_model_display');
	}

	public function savedata()
	{
		$this->load->view('insert');
		if($this->input->post('save'))
		{
		$n=$this->input->post('name');
		$e=$this->input->post('id');
		$m=$this->input->post('The_brand');
		$k=$this->input->post('Price_of_the_brand');
		$z=$this->input->post('stock');
		$this->Hello_Model->saverecords($n,$e,$m,$k,$z);		
		redirect("hello_controller_display/dispdata");  
		}
	}
	
	public function dispdata()
	{
	$result['data']=$this->hello_model_display->displayrecords();
	$this->load->view('display',$result);
	}
}
?>