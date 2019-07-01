<!DOCTYPE html>
<html>
<head>
<title>Create Contact Form Using CodeIgniter</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url(); ?>/CSS/styles.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/CSS/n.css" rel="stylesheet" type="text/css">
	<div class="navbar">
  <a href="index1">View</a>
  <a href="<?php echo base_url(); ?>index.php/User/index">Dashboard</a>
    </div>
	<style>
body {
 background-image: url("../../img/c.jpg");
 width: 100%;
}

</style>

</head>
<body>
<div id="container">
<?php echo form_open('groupc/submit'); ?>
<h1>Month Salary</h1>
<?php echo form_label('Id :'); ?>
<?php echo form_input(array('id' => 'did', 'name' => 'did')); ?>
<?php echo form_label('Member Name :'); ?>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?>
<?php echo form_label('Month :'); ?>
<?php echo form_input(array('id' => 'dmonth', 'name' => 'dmonth')); ?>
<?php echo form_label('Day Salary:'); ?>
<?php echo form_input(array('id' => 'dsalary', 'name' => 'dsalary')); ?>
<?php echo form_label('Attendance:'); ?>
<?php echo form_input(array('id' => 'datt', 'name' => 'datt')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?>


</div>
</body>
</html>