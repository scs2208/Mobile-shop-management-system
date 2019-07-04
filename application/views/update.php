<html>
<head>
<title>Registration form</title>
<style>
  table{
    background-color: #f2d2ae;
  }
</style>
</head>
 
<body>
 <?php

  foreach($data as $row)
  {
  ?>
 <form method="post">
 <table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter  category name </td>
    <td width="329"><input type="text" name="name" value="<?php echo $row->name; ?>"/></td>
  </tr>
  <tr>
    <td>Enter brand ID</td>
    <td><input type="text" name="id" value="<?php echo $row->id; ?>"/></td>
  </tr>
  <tr>
    <td>Enter the brand name</td>
    <td><input type="text" name="The_brand" value="<?php echo $row->The_brand; ?>"/></td>
  </tr>
   <tr>
    <td>Change the price of the brand</td>
    <td><input type="text" name="Price_of_the_brand" value="<?php echo $row->Price_of_the_brand; ?>"/></td>
  </tr>

  <tr>
    <td>The stock </td>
    <td><input type="text" name="stock" value="<?php echo $row->stock; ?>"/></td>
  </tr>


  <tr>
    <td colspan="2" align="center">
 <input type="submit" name="update" value="Update Records"/></td>
  </tr>
</table>
 </form>
 <?php } ?>
</body>
</html>