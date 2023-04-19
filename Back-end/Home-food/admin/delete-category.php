<?php


    //include constants.php file here
    include('../../config/constants.php');

    //get the id of the admin to be deleted
    $id = $_GET['id'];
  

     //create aql query TO Delete admin
     $sql = "DELETE FROM category_home WHERE id=$id";


    //execute the query    

    $res = mysqli_query($conn, $sql);


    //check whether the query executed or not 
    if($res==true){

    //query executed successfully and admin deleted 
     //echo "admin deleted successfully";
     //create a session variable to display msg

     $_SESSION['delete'] = "<div class='success'>Category deleted successfully   <strong>X</strong></div>";
       // redirect to manage admin page 
	 
    header("location:".SITEURL.'Back-end/Home-food/admin/manage-category.php');

    }else{
    //echo "not inserted";
    //create a session variable to display msg 
    //query failed to execute and delete admin  

       $_SESSION['delete'] = "<div class='error'>Failed to  delete Category. try again later!   <strong>X</strong></div>";

       //redirect to manage admin
       header("location:".SITEURL.'Back-end/Home-food/admin/manage-category.php');


       }

  // redirect to manage add page or not

  

?>