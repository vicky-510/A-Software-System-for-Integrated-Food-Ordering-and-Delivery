<?php 

      include('../Front-end/config/constants.php'); 
      include('login-check.php'); 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - chef Dashboard</title>
    <link rel="stylesheet" href="<?php echo SITEURL; ?>Back-end/Restaurant-food/css/admin.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
    rel="stylesheet">
   


</head>

<body>

<!--- menu section starts --->
<div class="menu">
   <div class="wrapper">
    <ul>
     <li><a href="<?php echo SITEURL; ?>" style="color:orange; margin-right:220px;; font-size:19px">Chef Dashboard</a></li>
  
        <li><a href="<?php echo SITEURL; ?>chef/index.php">Home</a></li>
        <li><a href="<?php echo SITEURL; ?>chef/manage-notification.php">Work Notification</a></li>
        <li><a href="<?php echo SITEURL; ?>chef/logout-chef.php">Logout</a></li>


    </ul>
   </div>

 
</div>
<!--- menu section ends --->