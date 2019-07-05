<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url(); ?>/CSS/styles.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/CSS/n.css" rel="stylesheet" type="text/css">
	<div class="navbar">
  <a href="<?php echo site_url('groupc/index1');?>">View</a>
  <a href="<?php echo site_url('groupc/index');?>">Salary</a>
		<a href="<?php echo base_url(); ?>index.php/User/index">Dashboard</a>
    </div>
<style>

body {
background-color : #3949AB;
}
</style>
</head>
<body>
<div id="container">
<?php foreach($new1 as $user  ) { ?>
<?php echo form_open('groupc/update/'); ?>
<h1> Edit Month Salary</h1>
<?php echo form_label('Id :'); ?>
<?php echo form_input(array('id' => 'did', 'name' => 'did' ,'value'=>$user->Id)); ?>
<?php echo form_label('Member Name :'); ?>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname','value'=>$user->staffname)); ?>
<?php echo form_label('Month :'); ?>
<?php echo form_input(array('id' => 'dmonth', 'name' => 'dmonth','value'=>$user->month)); ?>
<?php echo form_label('Day Salary:'); ?>
<?php echo form_input(array('id' => 'dsalary', 'name' => 'dsalary','value'=>$user->s_perday)); ?>
<?php echo form_label('Attendance:'); ?>
<?php echo form_input(array('id' => 'datt', 'name' => 'datt','value'=>$user->attendance)); ?>
<?php echo form_submit(array('id' => 'update', 'value' => 'Update')); ?>
<?php echo form_close(); ?>
<?php }?>
</div>
</body>
</html>
