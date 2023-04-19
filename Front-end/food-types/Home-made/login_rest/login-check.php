
<?php

       //=Authorisation access control
       //check whether the user is logged in or not

       if(!isset($_SESSION['user_home']))
       {
       //user is not logged in
       //redirect to login page with message
       $_SESSION['no-login-message'] = "<div class='error'>Please login to order food  <strong>X</strong></div>";

        //redirect to login page
        header("location:".SITEURL.'Front-end/food-types/Home-made/login_rest/login_user_rest.php');


       }


?>