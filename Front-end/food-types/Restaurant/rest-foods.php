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

<body>
     <!-- Navbar Section Starts Here -->
     <section class="navbar">
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
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/rest-categories.php"  >Categories</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/rest-foods.php" style="color: orange;">Foods</a>
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

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search1 text-center">
        <div class="container">
            <form action="rest-food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required id="search-bar">
                <input type="submit" name="submit" value="Search" class="btn btn-primary" id="search-btn">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->
        


    <section class="food-menu">
        <div class="container">
            <h2 class="text-center text-white">Popular Restaurant Foods in India</h2>

            
           <?php

           //getting foods from database that are active and featured
           //sql query


           $sql2 ="SELECT * FROM food_rest WHERE active='Yes' ";

           //execute the query
           $res2 = mysqli_query($conn, $sql2);

           //count rows
           $count2 = mysqli_num_rows($res2);

           //check whether the food available or not
           if($count2>0)
           {
                       //Food available
             while($row2=mysqli_fetch_assoc($res2))
             {

                //get all the values
                    $id = $row2['id'];
                    $title = $row2['title'];
                    $description = $row2['description'];
                    $rest_name = $row2['rest_name'];
                    $rest_address = $row2['rest_address'];
                    $rest_district = $row2['rest_district'];
                    $rest_number = $row2['rest_number'];
                    $price = $row2['price'];
                    $image_name = $row2['image_name'];

                     ?>

                  <div class="food-menu-box">
                     <div class="food-menu-img">

                      <?php

                      //check whether the image is available or not

                      if($image_name=="")
                      {
                       echo "<div class='error'>Image not available   <strong>X</strong></div>";

                      }else{
                                 
                       ?>
                      <img src="<?php echo SITEURL; ?>Front-end/images/food/<?php echo $image_name;?>" alt="food" class="img-responsive img-curve" >

                       <?php


                      }

                      ?>

                      </div>
    
                <div class="food-menu-desc">
                    <h4><?php echo $title;?></h4>
                    <p class="food-detail">
                    <?php echo $description?>
                    </p>
                    <hr style="margin-top: 10px; border: none;
                    border-top: 2px dashed #bdc3c7;
                    color: #fff;
                    background-color: #fff;
                    height: 1px;
                    width: 98%;">
     
                     <p class="food-detail" style="color: #000000; font-weight: bold; margin-top: 10px; margin-left: 3px;">
                     <?php echo $rest_name?>
                     </p>
                     <p><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Flocation.png?alt=media&token=ea2798e9-8301-46aa-aeae-5cc848019c57" alt="location" />
                     <?php echo $rest_address?>
                    </p>
                        <!-- Restaurant district/state-->  
                        <p style="margin-left: 21px;">
                        <?php echo $rest_district?>                    </p>
    
                    <p class="food-price" style="color: rgb(255, 136, 0); font-weight: bolder;">₹<?php echo $price?></p>
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/rest-order.php?food_id=<?php echo $id; ?>&user_info=<?php echo $user_id?>" class="btn btn-primary" id="food-order" style="font-weight: bolder;">Add to cart</a>
    
                    <br>
    
                </div>
            </div>
                      <?php

             }


           }
           else
           {

                      // food not available 
                 echo "<div class='error'>Food not added   <strong>X</strong></div>"; 

           }

           ?>

    
           
                
    
            
            

            <div class="clearfix"></div>

            

        </div>

        
            

            <div class="clearfix"></div>

            

            </div>


  
</section>
<!-- fOOD Menu Section Ends Here -->


    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
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
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Vignesh</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>