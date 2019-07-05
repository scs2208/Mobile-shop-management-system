
<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<style>
  table{
    background-color: white;
  }
  tr{
    color: black;
  }
  input{
    color:grey;
  }

  input.but{
    background-color:none;
  }

</style>
</head>

<body>
<div class="container">
	<form method="post">
		<table width="400" class="table">
  <tr>
    <td width="230">Enter the category name </td>
    <td width="329"><input type="text" name="name" class="form-control"/></td>
  </tr>
  <tr>
    <td>Enter the brand ID </td>
    <td><input type="text" name="id" class="form-control"/></td>
  </tr>
  <tr>
    <td>Enter the brand name </td>
    <td><input type="text" name="The_brand" class="form-control"/></td>
  </tr>
  <tr>
    <td>Enter the price of the brand </td>
    <td><input type="text" name="Price_of_the_brand" class="form-control"/></td>
    </tr>

    <tr>
    <td>The stock </td>
    <td><input type="text" name="stock" class="form-control"/></td>
  </tr>


  <tr>
    <td colspan="2" align="center"><input class="but" type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>

	</form>
</div>
</body>
</html>
