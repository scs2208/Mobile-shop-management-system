<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){

		$this->load->view('home_view');
	
	}

	public function login(){

		$this->load->library('form_validation');
			
		/* Validation rule */
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');	 
		$this->form_validation->set_rules('userid', 'User Id', 'required');
			   
		if ($this->form_validation->run() == FALSE) { 

			$this->load->view('login_view'); 
		} 

		else { 

			 $this->load->model('login_model');
			 $query = $this->login_model->login();

			if ($query->num_rows() > 0){                   //captured no of results(row) should be > 0
				
				$data = $query->row_array();
				$sesdata = array('name'=>$data['name'],'id'=>$data['userid'],'level'=>$data['level'],'logeed_in'=>TRUE);
				$this->session->set_userdata($sesdata);
			    redirect('User/index');
			}

			else { 

				$msg = "The username or password or userid you entered is incorrect.";
				$this->load->view('login_view', compact('msg'));
			} 
		}
	}

	public function logout(){

		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		//$this->load->view('login_view');        //direct back to home
		redirect('Welcome/login','refresh');
	}
}
