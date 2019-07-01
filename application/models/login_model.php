<?php

class Login_model extends CI_Model{

    public function login(){

        $username = $this->input->post('username');
        $password = ($this->input->post('password'));
        $userid =  $this->input->post('userid');
        $query = $this->db->where(['name'=> $username,'password'=>$password,'userid'=>$userid])->get('users');
        
        return  $query;


    }
}
