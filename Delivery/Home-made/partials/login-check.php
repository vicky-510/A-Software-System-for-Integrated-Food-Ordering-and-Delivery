
<?php

       //=Authorisation access control
       //check whether the user is logged in or not

       if(!isset($_SESSION['delivery_home']))
       {
       //user is not logged in
       //redirect to login page with message
       $_SESSION['no-login-message'] = "<div class='error'>Please login to access delivery Panel  <strong>X</strong></div>";

        //redirect to login page
        header('location:'.SITEURL.'Delivery/Home-made/login-home.php');


       }


?>