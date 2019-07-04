<?php
    class update_ctrl extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('update_model');
        }
        public function reg_id() {
            $id = $this->uri->segment(3);
            $data['registrations'] = $this->update_model->show_regs();
            $data['single_registration'] = $this->update_model->show_reg_id($id);
            
          
            $this->load->view('profile_view', $data);
          
        }
        public function reg_id1() {
          
            $this->reg_id();
        }
    }
?>