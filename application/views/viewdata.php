<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="<?php echo base_url(); ?>/CSS/dev.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>/CSS/n.css" rel="stylesheet" type="text/css">
		<div class="navbar">
  			<a href="index">Salary</a>
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

<table class="table table-bordered" style="background-color:#ffffff">
	<tr>
		<td>Id</td>
		<td> Member Name</td>
		<td>Month</td>
		<td>Day Salary</td>
		<td>Attendance</td>
		<td>Total Salary</td>
		
	</tr>
	<?php foreach($new1 as $user  ) { ?>
		<tr>
		<td><?php echo $user->Id;  ?></td>
		<td><?php echo $user->staffname; ?></td>
		<td><?php echo $user->month; ?></td>
		<td><?php echo $user->s_perday; ?></td>
		<td><?php echo $user->attendance; ?></td>
		<td><?php echo $user->salary=$user->s_perday*$user->attendance;?></td>
		<td><a class="btn btn-warning"onclick="return confirm('Are you sure to edit?')" href="<?php echo base_url()?>index.php/groupc/edit/<?php echo $user->Id?>">Edit</a></td>
        <td><a class="btn btn-danger"onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url()?>index.php/groupc/delete/<?php echo $user->Id?>">Delete</a></td>
		
		
		
	</tr>
	<?php }?>
</table>
</body>
</html>