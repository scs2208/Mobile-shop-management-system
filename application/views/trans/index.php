<?php
$this->load->view('templates/header');
?>
<div class="row">
    <div class="col-lg-12">
        <br>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <a href="<?php print site_url();?>/add" class="pull-left btn btn-primary btn-xs" style="margin-bottom: 5px;"><i class="fa fa-plus"></i> Add New Transaction</a>
    </div>
</div>

<div class="row">
        <div class="col-lg-12">
    <table class="table table-bordered">
    <thead>
      <tr>
        <!-- <th width="15%">Date</th> -->
        <th width="15%">Customer Name</th>
        <!-- <th width="15%">Customer Contact</th> -->
        <th width="10%">Items and Quantity</th>
        <th width="10%">Price</th>
        <th width="10%">Cashier ID</th>
        <th width="25%">Action</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($transInfo as $key=>$element) { ?>
      <tr>
        <!-- <td><?php print $element['Date']; ?></td> -->
        <td><?php print $element['Customer_Name']; ?></td>
        <!--<td><?php print $element['Customer_Contact']; ?></td> -->
        <td><?php print $element['Item_Quantity']; ?></td>
        <td><?php print $element['Price']; ?></td>
        <td><?php print $element['Cashier_ID']; ?></td>
        <td>
            <a title="Display" href="<?php print site_url();?>/display/<?php print $element['Bill_No'];?>" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Display </a>
            <a title="Edit" href="<?php print site_url();?>/edit/<?php print $element['Bill_No'];?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
            <a title="Delete" href="<?php print site_url();?>/delete/<?php print $element['Bill_No'];?>" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete </a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
