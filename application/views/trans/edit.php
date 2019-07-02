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
<?php
    $this->load->library('form_validation');
    echo validation_errors();
?>
<div class="row">
    <div class="col-lg-12">
        <br>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <a href="<?php print site_url();?>" class="pull-left btn btn-primary btn-xs" style="margin: 10px; background-color:green"><i class="fa fa-list"></i> Back to List</a>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php if(validation_errors()) { ?>
          <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
          </div>
        <?php } ?>
    </div>
</div>
 <form action="<?php print site_url();?>/crud/update" method="POST" class="edit-trans" id="edit-trans">

  <div class="row">
      <div class="col-lg-12">
          <?php if(validation_errors()) { ?>
            <div class="alert alert-danger">
              <?php echo validation_errors(); ?>
            </div>
          <?php } ?>
      </div>
  </div>
   <form action="<?php print site_url();?>/crud/save" method="POST" class="add-trans" id="add-trans">

  <div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-hashtag"></i>
                </span>
                <input type="text" name="Bill_No" class="form-control" id="Bill_No" value="<?php print $Bill_No; ?>">
            </div>
        </div>
    </div>
  </div>


  <div class="row">
          <div class="col-lg-6">
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="fa fa-calendar-o"></i>
                      </span>
                      <input type="date" data-date-inline-picker="true" name="Date" class="form-control" id="Date" value="<?php print $Date; ?>">
                  </div>
              </div>
          </div>
  </div>

  <div class="row">
          <div class="col-lg-6">
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="fa fa-user-o"></i>
                      </span>
                      <input type="text" name="Customer_Name" class="form-control" id="Customer_Name" value="<?php print $Customer_Name; ?>">
                  </div>
              </div>
          </div>

          <div class="col-lg-6">
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="fa fa-phone"></i>
                      </span>
                      <input type="text" name="Customer_Contact" class="form-control" id="Customer_Contact" value="<?php print $Customer_Contact; ?>">
                  </div>
              </div>
          </div>
  </div>

  <div class="row">
          <div class="col-lg-6">
              <div class="form-group">
                  <div class="input-group">

                      <span class="input-group-addon">
                          <i class="fa fa-balance-scale"></i>
                      </span>

                    <input type="text" name="Item_Quantity"  class="form-control" id="Item_Quantity" value="<?php print $Item_Quantity; ?>">
                  </div>
              </div>
          </div>
  </div>

      <div class="row">
          <div class="col-lg-6">
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class=" fa fa-money"></i>
                      </span>
                      <input type="text" name="Price" class="form-control" id="Price" value="<?php print $Price; ?>">
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="fa fa-vcard"></i>
                      </span>
                      <input type="text" name="Cashier_ID" class="form-control" id="Cashier_ID" value="<?php print $Cashier_ID; ?>">
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 text-right">
              <button type="reset" name="reset_add_trans" id="re-submit-trans" class="btn btn-danger"><i class="fa fa-undo"></i> Reset</button>
              <button type="submit" name="add_trans" id="submit-trans" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
          </div>
      </div>
</form>
