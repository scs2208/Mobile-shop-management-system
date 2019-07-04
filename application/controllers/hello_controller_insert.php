<?php
class hello_controller_insert extends CI_Controller 
{
	public function __construct()
	{

	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model('hello_model');
	}

	public function savedata()
	{
		//load registration view form
		$this->load->view('insert');
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('name');
		$e=$this->input->post('id');
		$m=$this->input->post('The_brand');
		$k=$this->input->post('Price_of_the_brand');
		$z=$this->input->post('stock');
		
//call saverecords method of Hello_Model and pass variables as parameter
		$this->hello_model->saverecords($n,$e,$m,$k,$z);		
		echo "Records Saved Successfully";
		}
	}
}
?>