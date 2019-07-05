<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){

    	parent::__construct();
    	if( $this->session->userdata('logged_in' !== TRUE)){

        	return redirect('Welcome/login');
    	}
} 

	public function index(){
		
		if( $this->session->userdata('logged_in' !== TRUE)){

        	return redirect('Welcome/login');
		}
		else{

			$this->load->view('dashboard_view');  
		}
		
    }

    public function display(){

		$this->load->model('User_model');
		$data['record'] = $this->User_model->display();
		$this->load->view('employes_view',$data);

	}

	public function getrecord($uId){

		$this->load->model('User_model');
		$data['record'] = $this->User_model->getuserbyid($uId);
		$this->load->view('update_view',$data);

	}

	public function delete($uId){

			$this->load->model('User_model');
			$this->User_model->delete($uId);
	}

	public function update($uId){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullName','Full Name','required');
		$this->form_validation->set_rules('phoneNo','Phone No','required');
		$this->form_validation->set_rules('address','Address','required');
	
		if($this->form_validation->run() == FALSE){

			$this->load->view('update_view');
		}
		
		else{

			$this->load->model('User_model');
			$this->User_model->update($uId);
		}
	}

	public function register(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullName','Full Name','required');
		$this->form_validation->set_rules('nid','National ID','required');
		$this->form_validation->set_rules('phoneNo','Phone No','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('uName','User Name','required');
		$this->form_validation->set_rules('uId','User ID','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == FALSE){

			$this->load->view('register_view');
		}

		else{

			$this->load->model('user_model');
			$this->user_model->save();
			$sucess='Account created';
			$this->load->view('register_view',compact('sucess'));
		}
    }
}
                