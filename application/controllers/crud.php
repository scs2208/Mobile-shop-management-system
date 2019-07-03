<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class crud extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('crud_model', 'trans');
    }
    // transaction list method
    public function index() {
        $data['page'] = 'trans-list';
        $data['title'] = 'Transaction List';
        $data['transInfo'] = $this->trans->getTransList();
        $this->load->view('trans/index', $data);
    }
    // transaction Add method
    public function add() {
        $data['page'] = 'trans-add';
        $data['title'] = 'Transaction Add';
        $this->load->view('trans/add', $data);
    }
    // transaction save method
    public function save() {
        $this->load->library('form_validation');
        // field name, error message, validation rules
        //
        $this->form_validation->set_rules('Bill_No', 'Bill No', 'trim|required');
        //
        $this->form_validation->set_rules('Date', 'Date', 'trim|required');
        $this->form_validation->set_rules('Customer_Name', 'Customer Name', 'trim|required');
        $this->form_validation->set_rules('Customer_Contact', 'Customer Contact', 'trim');
        $this->form_validation->set_rules('Item_Quantity', 'Items and Quantity', 'trim|required');
        $this->form_validation->set_rules('Price', 'Price', 'trim|required');
        $this->form_validation->set_rules('Cashier_ID', 'Cashier ID', 'trim|required');
        if($this->form_validation->run() == FALSE) {
          $this->add();
        } else {
          //
            $Bill_No = $this->input->post('Bill_No');
          //
            $Date = $this->input->post('Date');
            $Customer_Name = $this->input->post('Customer_Name');
            $Customer_Contact = $this->input->post('Customer_Contact');
            $Item_Quantity = $this->input->post('Item_Quantity');
            $Price = $this->input->post('Price');
            $Cashier_ID = $this->input->post('Cashier_ID');
            //
            $this->trans->setBillNo($Bill_No);
            //
            $this->trans->setDate($Date);
            $this->trans->setCustomerName($Customer_Name);
            $this->trans->setCustomerContact($Customer_Contact);
            $this->trans->setItemQuantity($Item_Quantity);
            $this->trans->setPrice($Price);
            $this->trans->setCashierID($Cashier_ID);

            $this->trans->createTrans();
            redirect('crud/index');
        }
    }

    // transaction edit method
    public function edit($billno='') {
        $data['page'] = 'trans-edit';
        $data['title'] = 'Transaction Edit';
        $this->trans->setBillNo($billno);
        $data['transInfo'] = $this->trans->getTrans();
        $this->load->view('trans/edit', $data);
    }
    // transaction update method
    public function update() {
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules('Date', 'Date', 'trim|required');
        $this->form_validation->set_rules('Customer_Name', 'Customer Name', 'trim|required');
        $this->form_validation->set_rules('Customer_Contact', 'Customer Contact', 'trim|required');
        $this->form_validation->set_rules('Item_Quantity', 'Items and Quantity', 'trim|required'); 
        $this->form_validation->set_rules('Price', 'Price', 'trim|required');
        $this->form_validation->set_rules('Cashier_ID', 'Cashier ID', 'trim|required');
        if($this->form_validation->run() == FALSE) {
          $this->edit();
        } else {
            $Bill_No = $this->input->post('Bill_No');
            $Date = $this->input->post('Date');
            $Customer_Name = $this->input->post('Customer_Name');
            $Customer_Contact = $this->input->post('Customer_Contact');
            $Item_Quantity = $this->input->post('Item_Quantity');
            $Price = $this->input->post('Price');
            $Cashier_ID = $this->input->post('Cashier_ID');

            $this->trans->setBillNo($Bill_No);
            $this->trans->setDate($Date);
            $this->trans->setCustomerName($Customer_Name);
            $this->trans->setCustomerContact($Customer_Contact);
            $this->trans->setItemQuantity($Item_Quantity);
            $this->trans->setPrice($Price);
            $this->trans->setCashierID($Cashier_ID);

            $this->trans->updateTrans();
            redirect('crud/index');
        }
    }

    // transaction display method
    public function display($billno='') {
        $data['page'] = 'trans-display';
        $data['title'] = 'Transaction Display';
        $this->trans->setBillNo($billno);
        $data['transInfo'] = $this->trans->getTrans();
        $this->load->view('trans/display', $data);
    }
    // transaction delete method
    public function delete($billno='') {
        $this->trans->setBillNo($billno);
        $this->trans->deleteTrans();
        redirect('crud/index');
    }
}
?>
