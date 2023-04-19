<?php
    
    //include constants.php for site url

    include('../Front-end/config/constants.php'); 

    //destroy the session

    session_destroy();//unset $SESSION=$username;


    //redirect to login page
    header("location:".SITEURL.'chef/login-chef.php');




?>