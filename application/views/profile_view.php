
       
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "./assert/css/update.css" ?>">
        <style>
            #container {
                width:100%;
                height:100%;
            }
            #wrapper {
                background-color:#8389BF;
                width:95%;
                height:100%;
            }
            #w3-main {
                
               color:red;
            }
            
            </style> 

            <!DOCTYPE html>
<html>
<title>profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" nid="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <h1>Mobile Store</h1>
    <img src="<?php echo base_url()?>./img/profile.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Select Profile</b></h4>
    
  </div>
  <div class="w3-bar-block">


            <div nid="menu">
                   
                   <!-- Fetching reg ids Of All persons From Database -->
                   <ol>
                       <?php foreach ($persons as $persons): ?>
                       <li><a href="<?php echo base_url() . "index.php/update_ctrl/reg_id1/" .$persons->nid; ?>"><?php echo $persons->fullName; ?></a>
           
                       </li><?php endforeach; ?>
                   </ol>
               </div>
    
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

        <div class="w3-main" style="margin-left:300px">
            <div nid="wrapper">
                <center> <br><br><br><h1>Staff Details </h1><br><hr/><br><br></center>
               
                <div nid="detail">
                    <!-- Fetching All Details of Selected registrations From Database And Showing In a Form -->
                    <?php foreach ($single_registration as $persons): ?>
                    <!-- <br><h4>Edit Detail & Click Update Button</h4><br><br><br> -->
                    <form method="post" action="<?php echo base_url() . "index.php/update_ctrl/reg_id1"?>">
                       <div  style="margin-left:100px">

                           
                            <label>Name :</label><br>
                            <input type="text" name="name" value="<?php echo $persons->fullName; ?>"><br>
                            <label>NIC :</label><br>
                            <input type="text" nid="nid" value="<?php echo $persons->nid; ?>"><br>
                            <label>PHONE_NO :</label><br>
                            <input type="text" phoneNo="phone_no" value="<?php echo $persons->phoneNo; ?>"><br>
                            <label>ADDRESS :</label><br>
                            <input type="text" address="addrerss" value="<?php echo $persons->address; ?>"><br>
                            <label>USERNAME :</label><br>
                            <input type="text" uName="username" value="<?php echo $persons->uName; ?>"><br>
                            <label>USERID :</label><br>
                            <input type="text" uId="userid" value="<?php echo $persons->uId; ?>"><br>
                            <label>PASSWORD :</label><br>
                            <input type="text" uId="password" value="<?php echo $persons->password; ?>"><br>
                            
                          
                        
                            <!-- <input type="submit" nid="submit" name="submit" value="Update"> -->
                        </div>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

