
<?php
class hello_controller_update extends CI_Controller 
{
 public function __construct()
 {
 parent::__construct();
 $this->load->database();
 $this->load->helper('url');
 $this->load->model('hello_model_update');
 }
 

 
 public function dispdata()
 {
 $result['data']=$this->hello_model_update->displayrecords();
 $this->load->view('display_record',$result);
 }
 
 public function deletedata()
 {
 $id=$this->input->get('id');
 $this->hello_model_update->deleterecords($id);
 redirect("hello_controller_update/dispdata");
 }

 
 public function updatedata()
 {
 $id=$this->input->get('id');
 $result['data']=$this->hello_model_update->displayrecordsById($id);
 $this->load->view('update',$result); 
 
 if($this->input->post('update'))
 {
 $n=$this->input->post('name');
 $e=$this->input->post('id');
 $m=$this->input->post('The_brand');
 $k=$this->input->post('Price_of_the_brand');
 $z=$this->input->post('stock');
 $this->hello_model_update->updaterecords($n,$e,$m,$k,$z,$id);
 redirect("hello_controller_update/dispdata");
 }
 }
}
?>