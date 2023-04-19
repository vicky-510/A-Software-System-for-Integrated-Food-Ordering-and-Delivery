<?php 

      include('../../config/constants.php'); 
    
      include('login_rest/login-check.php'); 

?>


<?php

  //check whether id is passed or not
  if(isset($_GET['category_id']))
  {

    //category id is set and get the id
    $category_id= $_GET['category_id'];

    //get the category title based on id
    $sql = "SELECT title FROM category_home WHERE id=$category_id ";

    //execute the query
    $res = mysqli_query($conn, $sql);

    //get the value from database
    $row = mysqli_fetch_assoc($res);
    //get the title
    $category_title = $row['title'];

  } 
  else
  {

   //category id is set and get the id
   //redirect to restaurant page

   header('location:'.SITEURL);



  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies-Categories</title>

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
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/home-made.php"  >Home Made</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/home-categories.php"  style="color: orange;">Categories</a>
                    </li>
                    <li>
                      <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/home-foods.php" >Foods</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/rest-cart.php" >Orders</a>
                    </li>
                    
                    <li>
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/login_rest/logout_user_rest.php" >Logout</a>
                    </li>
                    <?php 
                 //Check whether the user is logged in
                 if((!isset($_SESSION['user_home'])))
                 {
                     //User not logged in, redirect to login page
                     header('location:'.SITEURL.'Front-end/food-types/Home-made/login_rest/login_user_rest.php');
                 }                 

                 //Get the username of the logged-in user
                 $username = $_SESSION['user_home'];
                

                 //SQL query to fetch the user details from the database
                 $sql7 = "SELECT * FROM user_home WHERE username='$username' ";                 

                 //Execute the query
                 $res7 = mysqli_query($conn, $sql7);                 

                 //Check whether the query was successful
                 if($res7)
                 {
                     //Query executed successfully, fetch the user details

                   

                     $row7 = mysqli_fetch_assoc($res7);
                     $user_id=$row7['user_id'];
                     $username = $row7['username'];
                    
                     
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
    <section class="food-search3 text-center">
        <div class="container">
           
            <h2>Foods on <a href="#" class="text-white">"<?php echo $category_title;?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



   <!-- fOOD MEnu Section Starts Here -->
   <section class="food-menu">
        <div class="container">
            <h2 class="text-center text-white">Popular Home chef Foods in India</h2>

            
           <?php

           //getting foods from database that are active and featured
           //sql query


           $sql2 ="SELECT * FROM food_home WHERE category_id=$category_id ";

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
                    $home_name = $row2['home_name'];
                    $home_address = $row2['home_address'];
                    $home_district = $row2['home_district'];
                    $home_number = $row2['home_number'];
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
                      <img src="<?php echo SITEURL; ?>Front-end/img/food/<?php echo $image_name;?>" alt="food" class="img-responsive img-curve" >

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
                     <?php echo $home_name?>
                     </p>
                     <p><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Flocation.png?alt=media&token=ea2798e9-8301-46aa-aeae-5cc848019c57" alt="location" />
                     <?php echo $home_address?>
                    </p>
                        <!-- Restaurant district/state-->  
                        <p style="margin-left: 21px;">
                        <?php echo $home_district?>                    </p>
    
                    <p class="food-price" style="color: rgb(255, 136, 0); font-weight: bolder;">₹<?php echo $price?></p>
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/rest-order.php?food_id=<?php echo $id; ?>&user_info=<?php echo $user_id?>" class="btn btn-primary" id="food-order" style="font-weight: bolder;">Add to cart</a>

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
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container1 text-center">
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
        <div class="container1 text-center">
            <p>All rights reserved. Designed By <a href="#">Vignesh</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>