
<?php

class User_model extends CI_Model{

    public function save(){

        $data['fullName'] = $this->input->post('fullName');
        $data['nid'] = $this->input->post('nid');
        $data['phoneNo'] = $this->input->post('phoneNo');
        $data['address'] = $this->input->post('address');
        $data['uName'] = $this->input->post('uName');
        $data['uId'] = $this->input->post('uId');
        $data['password'] = $this->input->post('password');
        $this->db->insert('persons',$data);


    }

    public function display(){
        
        return $this->db->get('persons')->result();

    }

    public function delete($uId){

        $this->db->where('uId',$uId)->delete('persons');
        redirect('User/display');
    }

    public function getuserbyid($uId){

        return $this->db->where('uId',$uId)->get('persons')->row();   //return particular row data
    }

    public function update($uId){

       
        $data['fullName'] = $this->input->post('fullName');
        $data['phoneNo'] = $this->input->post('phoneNo');
        $data['address'] = $this->input->post('address');
        
        $this->db->where('uId',$uId)->update('persons',$data);
        redirect('User/display');

    }

}