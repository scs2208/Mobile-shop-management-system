<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(CSS); ?>/style3.css">
</head>

<body>
    
        <div class =' container'>
        <?php
           $uId = $record->uId;
		   echo form_open(base_url('index.php/User/update/'.$uId));   //pass parameter to update in controll User
		   echo validation_errors();
		   
	    ?>
           <h1>Edit</h1>
           <hr>
           
            Full Name       :
            <input type="text" name="fullName" value="<?php echo $record->fullName; ?>" required><br><br>
            Phone No        :
            <input type="text" name="phoneNo" value=" <?php echo $record->phoneNo; ?>" required ><br><br>
            Address          :
           <input type="text" name="address" value="<?php echo $record->address; ?> " required ><br><br>
    
           <button type="submit" class="btn" >save</button>
           <a href="<?php echo base_url(); ?>index.php/User/index"><input type="button" class='btn'  value="Dashboard"></a>

        <?php echo form_close()?>

        </div>
    
</body>
</html>
