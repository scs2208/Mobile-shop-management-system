
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(CSS); ?>/style2.css">


</head>
<body>


<div class="navbar">
  <a href="#">Dashboard</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/index">Home</a>
  <?php if($this->session->userdata('level')==='1'): ?>                   
    <div class="dropdown">
      <button class="dropbtn">Employee</button>
      <div class="dropdown-content">
        <a href="<?php echo base_url(); ?>index.php/User/display">View</a>
        <a href="<?php echo base_url(); ?>index.php/User/register">Register</a>
        <a href="<?php echo base_url(); ?>index.php/update_ctrl/reg_id">Profile</a>
        <a href="<?php echo base_url(); ?>index.php/groupc/index1">Salary</a>
      </div>
    </div>
  <?php endif; ?>
  <a href="<?php echo base_url(); ?>index.php/crud/index">Transaction</a>
  <a href="<?php echo base_url(); ?>index.php/hello_controller_update/dispdata">Stock</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/logout">Log out</a>
</div>
<br><br>

</body>
</html>
