<html>
<head>
<title>Display Records</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
 
<body>
	<div class="container">
<table width="600" border="1" cellspacing="5" cellpadding="5" class="table">
  <tr style="background:#CCC">
    <th>The category name</th>
    <th> The brand ID</th>
    <th>The brand name</th>
    <th>Price of the brand</th>
    <th>stock</th>
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
  echo "</tr>";
  
  }
   ?>
</table>
	</div>
</body>
</html>
