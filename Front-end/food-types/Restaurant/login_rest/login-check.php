
<?php

       //=Authorisation access control
       //check whether the user is logged in or not

       if(!isset($_SESSION['user_rest']))
       {
       //user is not logged in
       //redirect to login page with message
       $_SESSION['no-login-message'] = "<div class='error'>Please login to order food  <strong>X</strong></div>";

        //redirect to login page
        header("location:".SITEURL.'Front-end/food-types/Restaurant/login_rest/login_user_rest.php');


       }


?>