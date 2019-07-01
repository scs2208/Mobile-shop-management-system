<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>
<div class="container">
	<table width="200" class="table">
	  <tr>
		<th>User Id</th>
		<th>User Name</th>
		<th>Full Name</th>
		<th>Phone No</th>
		<th>NID</th>
		<th>Address</th>
		<th>Action</th>
	  </tr>
	  <?php
	
		 foreach ($record as $result)
		  {
			 echo "<tr>";
			 echo "<td>".$result->uId."</td>";
			 echo "<td>".$result->uName."</td>";
			 echo "<td>".$result->fullName."</td>";
			 echo "<td>".$result->phoneNo."</td>";
			 echo "<td>".$result->nid."</td>";
			 echo "<td>".$result->address."</td>";
			 
             echo "<td><a href='".base_url()."/index.php/User/getrecord/".$result->uId."'> Edit </a>  <a href='".base_url()."/index.php/User/delete/".$result->uId."'> Delete </a></td>";
			 echo "</tr>";
		  }
	  ?>
	</table>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </body>

</html>