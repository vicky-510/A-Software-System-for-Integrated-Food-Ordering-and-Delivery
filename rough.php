<a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/rest-order.php?food_id=<?php echo $id; ?>&user_info=<?php echo $user_id?>" class="btn btn-primary" id="food-order" style="font-weight: bolder;">Add to cart</a>



<?php

  //get the id whether food is set or not

  if(isset($_GET['user_info']))
  {

    //GET THE FOOD ID AND DETAILS OF THE SELECTED FOOD
    $user_info = $_GET['user_info'];
    


    //get the details of the selected food

    $sql = "SELECT * FROM user_rest WHERE user_id=$user_info";

        //execute the query

    $res = mysqli_query($conn, $sql);

    //count the rows
    $count = mysqli_num_rows($res);

    if($count == 1)
    {

        // we have data
        // GET THE DATA FROM DATABASE
        $row = mysqli_fetch_assoc($res);
             
        
        $order_id = $row['user_id'];
        $order_name = $row['cust_name'];
        $order_contact = $row['cust_name'];
        $order_address = $row['cust_name'];
        $order_address	 = $row['cust_name'];
        $order_pet=$row['is_pet'];
             
    }
   


  }
  else
  {
    
    //redirect to restaurant page

    header('location:'.SITEURL."Front-end/food-types/Restaurant/restaurant.php");
  }

?>





<?php

  //get the id whether food is set or not

  if(isset($_GET['user_info']))
  {

    //GET THE FOOD ID AND DETAILS OF THE SELECTED FOOD
    $user_info = $_GET['user_info'];
    


    //get the details of the selected food

    $sql = "SELECT * FROM user_rest WHERE user_id=$user_info";

        //execute the query

    $res = mysqli_query($conn, $sql);

    //count the rows
    $count = mysqli_num_rows($res);

    if($count == 1)
    {

        // we have data
        // GET THE DATA FROM DATABASE
        $row = mysqli_fetch_assoc($res);
             
        
        $user_id = $row['user_id'];
        
             
    }
   


  }
  else
  {
    
    //redirect to restaurant page

    header('location:'.SITEURL."Front-end/food-types/Restaurant/restaurant.php");
  }

?>

&user_info=<?php echo $user_id?>






<?php 
                 //Check whether the user is logged in
                 if(!isset($_SESSION['user_rest']))
                 {
                     //User not logged in, redirect to login page
                     header('location:'.SITEURL.'Front-end/food-types/Restaurant/login_rest/login_user_rest.php');
                 }                 

                 //Get the username of the logged-in user
                 $username = $_SESSION['user_rest']; 
                

                 //SQL query to fetch the user details from the database
                 $sql7 = "SELECT * FROM user_rest WHERE username='$username'";                 

                 //Execute the query
                 $res7 = mysqli_query($conn, $sql7);                 

                 //Check whether the query was successful
                 if($res7)
                 {
                     //Query executed successfully, fetch the user details

                   

                     $row7 = mysqli_fetch_assoc($res7);
                     $user_id=$row7['user_id'];
                     $username = $row7['username'];
                     $cust_name=$row7['cust_name'];
                     $cust_contact=$row7['cust_contact'];
                     $cust_email=$row7['cust_email'];
                     $cust_address=$row7['cust_address'];
                     $is_pet=$row7['is_pet'];
                     
                 }
                                

        
        else{
            //redirect to manage Admin page
            header('location:'.SITEURL.'chef/login-chef.php');
        }

       ?>