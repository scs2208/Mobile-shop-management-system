<?php
    class update_model extends CI_Model{
        
        public function show_regs(){
            $query = $this->db->get('registration');
            $query_result = $query->result();
            return $query_result;
        }
       
        public function show_reg_id($data){
            $this->db->select('*');
            $this->db->from('registration');
            $this->db->where('id', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }
        
            public function reg_id1($id,$data){
                $this->db->where('id', $id);
                $this->db->update('registration', $data);
        }
    }
?>