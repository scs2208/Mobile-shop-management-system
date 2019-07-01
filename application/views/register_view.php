

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(CSS); ?>/style3.css">
</head>

<body>
    
    <form action = "<?php echo base_url();?>/index.php/User/register" method="POST" >

        <div class='container'>
        <?php echo validation_errors();
        if(isset($sucess))
        echo '<p>'.$sucess.'</p>'  ?>

        <h1>Register</h1>
        <hr>
       
       <fieldset>
            <legend><b>Personal details</b></legend><br>
            Full Name       :
            <input type="text" name="fullName" value=" " required><br><br>
            National ID     :
            <input type="text" name="nid" value=" " required><br><br>
            Phone No        :
            <input type="text" name="phoneNo" value=" " required ><br><br>
           Address          :
           <input type="text" name="address" value=" " required ><br><br>
            
        </fieldset><br>
        <fieldset>
            <legend><b>Work Details</b></legend><br>
            User Name        :
            <input type ="text" name ="uName" value =" " required><br><br>
            User ID          :
            <input type ="text" name="uId" value =" " required/><br><br>
            Password         :
            <input type="password" name="password" placeholder="********" value="" required><br><br>
            Confirm password :
            <input type="password" name ="passwordCheck" placeholder="*********" value="" required><br><br>
            
        </fieldset><br>
        <button type="submit" class="btn" >save</button>
        <a href="<?php echo base_url(); ?>index.php/User/index"><input type="button"  class='btn' value="Dashboard"></a>

    </form>
</body>
</html>

    
