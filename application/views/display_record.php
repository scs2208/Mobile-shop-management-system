<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	
</head>
 
<body>
<div class="container">
<table width="200" class="table">
  <tr style="background:#CCC">
    <th>The category name</th>
    <th>The brand ID</th>
    <th>The brand name</th>
    <th>Change the Price of the brand</th>
    <th>stock</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
  <?php
  
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->The_brand."</td>";
  echo "<td>".$row->Price_of_the_brand."</td>";
  echo "<td>".$row->stock."</td>";
  echo "<td><a href='deletedata?id=".$row->id."'><button>Delete</button></a></td>";
  echo "<td><a href='updatedata?id=".$row->id."'><button>Update</button></a></td>";
  echo "</tr>";
  
  }
   ?>
</table>
<br>
<a href = "<?php echo base_url()?>index.php/hello_controller_display/dispdata"><button type="button" class="btn btn-warning">display</button></a>
<a href = "<?php echo base_url()?>index.php/hello_controller_insert/savedata"><button type="button" class="btn btn-warning">insert</button></a>
</div>
</body>
</html>
