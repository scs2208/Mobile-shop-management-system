<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class crud_model extends CI_Model {

    private $_billno;
    private $_date;
    private $_customername;
    private $_customercontact;
    private $_itemquantity;
    private $_price;
    private $_cashierid;

    public function setBillNo($billno) {
        $this->_billno = $billno;
    }
    public function setDate($date) {
        $this->_date = $date;
    }
    public function setCustomerName($customername) {
        $this->_customername = $customername;
    }
    public function setCustomerContact($customercontact) {
        $this->_customercontact = $customercontact;
    }
    public function setItemQuantity($itemquantity) {
        $this->_itemquantity = $itemquantity;
    }
    public function setPrice($price) {
        $this->_price = $price;
    }
    public function setCashierID($cashierid) {
        $this->_cashierid = $cashierid;
    }
    // get transaction List
    public function getTransList() {
        $this->db->select(array('t.Bill_No', 't.Date', 't.Customer_Name', 't.Customer_Contact', 't.Item_Quantity', 't.Price', 't.Cashier_ID'));
        $this->db->from('trans t');
        $query = $this->db->get();
        return $query->result_array();
    }
    // create new transaction
    public function createTrans() {
        $data = array(
            'Bill_No' => $this->_billno,
            'Date' => $this->_date,
            'Customer_Name' => $this->_customername,
            'Customer_Contact' => $this->_customercontact,
            'Item_Quantity' => $this->_itemquantity,
            'Price' => $this->_price,
            'Cashier_ID' => $this->_cashierid,
        );
        $this->db->insert('trans', $data);

    }
    // update transaction
    public function updateTrans() {
      $data = array(
          'Date' => $this->_date,
          'Customer_Name' => $this->_customername,
          'Customer_Contact' => $this->_customercontact,
          'Item_Quantity' => $this->_itemquantity,
          'Price' => $this->_price,
          'Cashier_ID' => $this->_cashierid,
      );
        $this->db->where('Bill_No', $this->_billno);
        $this->db->update('trans', $data);
    }
    //display transaction
    public function getTrans() {
        $this->db->select(array('t.Bill_No', 't.Date', 't.Customer_Name','t.Customer_Contact', 't.Item_Quantity', 't.Price', 't.Cashier_ID'));
        $this->db->from('trans t');
        $this->db->where('t.Bill_No', $this->_billno);
        $query = $this->db->get();
        return $query->row_array();
    }
    // delete transaction
    public function deleteTrans() {
        $this->db->where('Bill_No', $this->_billno);
        $this->db->delete('trans');
    }

}
?>
