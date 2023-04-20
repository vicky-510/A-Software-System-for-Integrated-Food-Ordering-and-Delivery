<?php
    
    //include constants.php for site url

    include('partials/constants.php'); 

    //destroy the session

    session_destroy();//unset $SESSION=$username;


    //redirect to login page
    header('location:'.SITEURL.'Delivery/Home-made/login-home.php');




?>