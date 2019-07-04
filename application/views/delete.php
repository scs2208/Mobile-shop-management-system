
<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
<style>
  td{
    background-color:#a7b5cc;
  }
  a:hover{
    color: yellow;

  }
  a{
    text-decoration: none;
  }
</style>
</head>
 
<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>The brand category</th>
    <th>The brand ID</th>
    <th>The brand name</th>
    <th>Price of the brand</th>
    <th>stock</th>
 <th>Delete</th>
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
  echo "</tr>";
  }
   ?>
</table>
</body>
</html>