<?php
    class update_model extends CI_Model{
        
        public function show_regs(){
            $query = $this->db->get('persons');
            $query_result = $query->result();
            return $query_result;
        }
       
        public function show_reg_id($data){
            $this->db->select('*');
            $this->db->from('persons');
            $this->db->where('nid', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }
        
            public function reg_id1($nid,$data){
                $this->db->where('nid', $nid);
                $this->db->update('persons', $data);
        }
    }
?>
