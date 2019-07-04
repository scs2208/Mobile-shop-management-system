
<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
<style>
  table{
    background-color: #FCF3CF;
  }
  tr{
    color: black;
  }
  input{
    color:grey;
  }

  input.but{
    background-color:#e5b227;
  }

</style>
</head>

<body>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter the category name </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>
  <tr>
    <td>Enter the brand ID </td>
    <td><input type="text" name="id"/></td>
  </tr>
  <tr>
    <td>Enter the brand name </td>
    <td><input type="text" name="The_brand"/></td>
  </tr>
  <tr>
    <td>Enter the price of the brand </td>
    <td><input type="text" name="Price_of_the_brand"/></td>
    </tr>

    <tr>
    <td>The stock </td>
    <td><input type="text" name="stock"/></td>
  </tr>


  <tr>
    <td colspan="2" align="center"><input class="but" type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>

	</form>
</body>
</html>
