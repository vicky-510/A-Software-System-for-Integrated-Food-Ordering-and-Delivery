<?php 

      include('../../config/constants.php'); 
    
      include('login_rest/login-check.php'); 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body >
     <!-- Navbar Section Starts Here -->
     <section class="navbar" >
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="../../images/foodies.gif" alt="Restaurant Logo" class="img-responsive" >
                </a>
                
            </div>

            <div class="menu text-right">
                <ul>
                   
                    <li>
                        <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/restaurant.php" >Restaurants</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/rest-categories.php"  style="color: orange;">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/rest-foods.php">Foods</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/reservation.php" >Reservation</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/rest-cart.php" >Orders</a>
                    </li>
                    
                    <li>
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/login_rest/logout_user_rest.php" >Logout</a>
                    </li>
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
                     <li>
                        <?php echo "<span style='background-color:#182C61;color:white; padding:8px 16px; border-radius:.25rem;'>$username</span>";?>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
       
    </section>
    
    <!-- Navbar Section Ends Here -->



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center ">Trending Foods</h2>

            <?php 
            
            ///create sql query to display category from database
            $sql ="SELECT * FROM category_rest WHERE active='Yes' ";
            //execute the query
            $res= mysqli_query($conn, $sql);
            //count rows to check whether the category is availbale or not
            $count = mysqli_num_rows($res);

            if($count>0){
 
                //category available

                while($row = mysqli_fetch_assoc($res)){
                    
                    //get the values like id, title, image name
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
                      
                    ?>
                       <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/rest-category-foods.php?category_id=<?php echo $id;?>">
                       <div class="box-3 float-container">

                       <?php

                       //check whether the image is available or not

                       if($image_name=="")
                       {
                        echo "<div class='error'>Image not available   <strong>X</strong></div>";

                       }else{
                                  
                        ?>
                       <img src="<?php echo SITEURL; ?>Front-end/images/category/<?php echo $image_name?>" alt="biriyani" class="img-responsive img-curve" >

                        <?php


                       }

                       ?>

                      <h3 class="float-text text-white"><?php echo $title?></h3>
                      </div>
                      </a>
                
            
            <?php

          
        }
    }
    else{

        //category not  available
        echo "<div class='error'>Category not added   <strong>X</strong></div>";

    }

           ?>
            <div class="clearfix"></div>
        </div>
           
    </section>
    <!-- Categories Section Ends Here -->

    
    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container1 text-center text-grey">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container1 text-center text-grey">
            <p>All rights reserved. Designed By <a href="#">Vignesh</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>