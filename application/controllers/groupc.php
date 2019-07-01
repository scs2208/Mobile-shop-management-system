<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Groupc extends CI_Controller {
function __construct() {
parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('groupm');

}
function index() {
	$this->load->view('groupv');
}
public function index1(){
		$data['new1'] = $this->groupm->getAllUsers();
		$this->load->view('viewdata', $data);
	}
	function submit() {
	$this->load->model('groupm');
	$response=$this->groupm->submitdata();
	if($response){
		redirect('groupc/index1');
	}
	 }
	
function delete($id) {
$this->db->delete('stable',array('Id'=>$id));
	echo "Delete successfully";
	redirect('groupc/index1');
}
 function edit(){
 $id = $this->uri->segment(3);
 $data['new1']=$this->groupm->editdata($id);
 $this->load->view('editv',$data);

 }
 
  function update(){
	$id=$this->input->post('did');
	$data= array(
			
			'Id'=> $this->input->post('did'),
			'staffname'=> $this->input->post('dname'),
			'month'=> $this->input->post('dmonth'),
			's_perday'=> $this->input->post('dsalary'),
			'attendance'=> $this->input->post('datt'),
			);
			$this->groupm->updatedata($id,$data);
          
		   redirect('groupc/index1');
	}
	

}
?>