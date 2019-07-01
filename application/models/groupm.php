<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Groupm extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function getAllUsers(){
			$query = $this->db->get('stable');
			return $query->result(); 
		}
		public function submitdata(){
			$data= array(
			
			'Id'=> $this->input->post('did'),
			'staffname'=> $this->input->post('dname'),
			'month'=> $this->input->post('dmonth'),
			's_perday'=> $this->input->post('dsalary'),
			'attendance'=> $this->input->post('datt'),
			'salary'=> $this->input->post('datt')*$this->input->post('dsalary'),
			);
			 return $this->db->insert('stable',$data);
			 echo "Insert Successfully";
		}
		

	
	public function editdata($data){
	$this->db->select('*');
	$this->db->from('stable');
	$this->db->where('Id',$data);
	$query = $this->db->get();
	$result = $query->result();
return $result;
	}
function updatedata($id,$data){
$this->db->where('Id', $id);
$this->db->update('stable', $data);

}
	

		
	
}
?>