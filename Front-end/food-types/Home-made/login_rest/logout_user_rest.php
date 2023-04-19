<?php
    
    //include constants.php for site url

    include('../../../config/constants.php'); 


    //destroy the session

    session_destroy();//unset $SESSION=$username;


    //redirect to login page
    header("location:".SITEURL.'Front-end/food-types/Home-made/login_rest/login_user_rest.php');




?>