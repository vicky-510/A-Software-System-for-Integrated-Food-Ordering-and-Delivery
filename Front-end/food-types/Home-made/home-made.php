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
    <title>Foodies-Home Made</title>

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
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/home-made.php" style="color: orange;"  >Home Made</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/home-categories.php"  >Categories</a>
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
            <form action="<?php echo SITEURL; ?>Front-end/food-types/Home-made/home-food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required id="search-bar">
                <input type="submit" name="submit" value="Search" class="btn btn-primary" id="search-btn">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->
    
  
    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
        <?php
              
              if(isset($_SESSION['order']))
              {
               echo $_SESSION['order'];//display msg
               unset($_SESSION['order']);//remove msg       
              }   if(isset($_SESSION['login-rest']))
              {
                  echo $_SESSION['login-rest'];
                  unset($_SESSION['login-rest']);
              }
              if(isset($_SESSION['check']))
              {
               echo $_SESSION['check'];//display msg
               unset($_SESSION['check']);//remove msg       
              }  
               
                   ?>
               
            
            <h2 class="text-center text-white">Popular Home Made chef Foods in India</h2>

            
           <?php

           //getting foods from database that are active and featured
           //sql query


           $sql2 ="SELECT * FROM food_home WHERE active='Yes' AND featured='Yes'  LIMIT 6 ";

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

        <p class="text-center">
            <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/home-foods.php" class="text-white">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

   
      <!-- CAtegories Section Starts Here -->
      <section class="categories">
        <div class="container">
            <h2 class="text-center ">Trending Foods</h2>

            <?php 
            
            ///create sql query to display category from database
            $sql ="SELECT * FROM category_home WHERE active='Yes' AND featured='Yes' ORDER BY title ASC  LIMIT 3";
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
                       <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/home-category-foods.php?category_id=<?php echo $id;?>">
                       <div class="box-3 float-container">

                       <?php

                       //check whether the image is available or not

                       if($image_name=="")
                       {
                        echo "<div class='error'>Image not available   <strong>X</strong></div>";

                       }else{
                                  
                        ?>
                       <img src="<?php echo SITEURL; ?>Front-end/img/category/<?php echo $image_name?>" alt="biriyani" class="img-responsive img-curve" >

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


<section class="faq-section">
<div class="container">
  <div class="row">
                    <!-- ***** FAQ Start ***** -->
                    <div class="col-md-6 offset-md-3">

                        <div class="faq-title text-center pb-3">
                            <h2>FAQ</h2>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3">
                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">1</span>Who is Foodies?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Foodies is an Indian Startup restaurant aggregator and food delivery company founded  in 2022.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">2</span>Which is most ordered on Foodies?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                            Speaking of the most ordered food item, foodies revealed that the most ordered food item of the year was biryani. According to foodies, 186 biryanis were delivered every minute in the year of 2022.</p>
                                    </div>
                                </div>
                            </div>
                          
                           
                            <div class="card">
                                <div class="card-header" id="faqHeading-6">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                            <span class="badge">3</span> Which is the highest selling food online?

                                        </h5>
                                    </div>
                                </div>
                                
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>According to foodies 2022 stats, chicken biryani continues to be consumer favourite in India, sixth year in a row as it became the most-ordered food item on the delivery app, with pav bhaji, gulab jamun taking the second spot on the list.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
               <br>
               <br>
               <br>
                </section>
                
               
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
            <p>All rights reserved. Designed By <a href="#">vignesh</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>