<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
<style >
  a{
    text-decoration: none;
  }
  a:hover{
    color: green;
  }

  table{
    background-color: #f2eff1;
  }
</style>

</head>
 
<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
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
  echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
  echo "<td><a href='updatedata?id=".$row->id."'>Update</a></td>";
  echo "</tr>";
  
  }
   ?>
</table>
	<br>
	<a href = "<?php echo base_url()?>index.php/hello_controller_display/dispdata"><button>display</button></a>
	<a href = "<?php echo base_url()?>index.php/hello_controller_insert/savedata"><button>insert</button></a>
</body>
</html>
