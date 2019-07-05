
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(CSS); ?>/style.css">

</head>
<body>
    <div class ="loginBox">
        <img src="<?php echo base_url(IMAGES); ?>/user.png" class="user">
        <h2>Log In</h2>

        <?php
		   echo form_open('Welcome/login');
		   echo validation_errors();
		   if (isset($msg))
		   echo '<p>'.$msg.'</p>';
	    ?>

            <label for="username">User Name</label>
            <input type ="text" name="username" placeholder=" " value="" required>

            <label for="password">Password</label>
            <input type ="password" name="password" placeholder="******" value="" required>

            <label for="userid">User Id</label>
            <input type ="text" name="userid" placeholder=" " value="" required>

            <!--<input type ="submit" name="submit" value="submit">-->
            <button type="sign in" >Submit</button>
            <?php echo form_close() ?>
        </form>
    </div>
</body>
</html>

