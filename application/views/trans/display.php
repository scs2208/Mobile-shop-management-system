<?php
$this->load->view('templates/header');
  $Bill_No = $transInfo['Bill_No'] ? $transInfo['Bill_No'] : '';
  $Date = $transInfo['Date'] ? $transInfo['Date'] : '';
  $Customer_Name = $transInfo['Customer_Name'] ? $transInfo['Customer_Name'] : '';
  $Customer_Contact = $transInfo['Customer_Contact'] ? $transInfo['Customer_Contact'] : '';
  $Item_Quantity = $transInfo['Item_Quantity'] ? $transInfo['Item_Quantity'] : '';
  $Price = $transInfo['Price'] ? $transInfo['Price'] : '';
  $Cashier_ID = $transInfo['Cashier_ID'] ? $transInfo['Cashier_ID'] : '';
?>
<div class="row">
    <div class="col-lg-12">
        <br>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <a href="<?php print site_url();?>/crud/index" class="pull-left btn btn-primary btn-xs" style="margin: 2px;"><i class="fa fa-list"></i> List</a>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <p><strong>Bill No: </strong><?php print $Bill_No?></p>
        <p><strong>Date: </strong><?php print $Date?></p>
        <p><strong>Customer Name: </strong><?php print $Customer_Name?></p>
        <p><strong>Customer Contact: </strong><?php print $Customer_Contact?></p>
        <p><strong>Items and Quantity: </strong><?php print $Item_Quantity?></p>
        <p><strong>Price: </strong><?php print $Price?></p>
        <p><strong>Cashier ID: </strong><?php print $Cashier_ID?></p>
    </div>
</div>
