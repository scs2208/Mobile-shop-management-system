<?php
    class update_ctrl extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('update_model');
        }
        public function reg_id() {
            $id = $this->uri->segment(3);
            $data['persons'] = $this->update_model->show_regs();
            $data['single_registration'] = $this->update_model->show_reg_id($id);
            
          
            $this->load->view('profile_view', $data);
          
        }
        public function reg_id1() {
			 $id= $this->input->post('nid');
            $data = array(
            'fullName' => $this->input->post('name'),
            'nid' => $this->input->post('nid'),
            'phoneNo' => $this->input->post('phone_no'),
            'address' => $this->input->post('addrerss'),
            'uName' => $this->input->post('username'),
            'uId' => $this->input->post('userid'),
           
            
            );
            $this->update_model->reg_id1($id,$data);
            $this->reg_id();
        }
    }
?>
