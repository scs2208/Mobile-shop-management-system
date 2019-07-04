
<?php
class hello_controller_delete extends CI_Controller 
{
 public function __construct()
 {
 parent::__construct();
 $this->load->database();
 $this->load->helper('url');
 $this->load->model('hello_model_delete');
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
 redirect("hello_controller_delete/dispdata");  
 }
 }
 
 public function dispdata()
 {
 $result['data']=$this->hello_model_delete->displayrecords();
 $this->load->view('delete',$result);
 }
 
 public function deletedata()
 {
 $id=$this->input->get('id');
 $this->hello_model_delete->deleterecords($id);
 redirect("hello_controller_delete/dispdata");
 }
}
?>