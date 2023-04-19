<?php include('Back-end/config/constants.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="Front-end/css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="Front-end/images/foodies.gif" alt="Restaurant Logo" class="img-responsive" >
                </a>
                
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>" >Home</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo SITEURL; ?>Add-rest_home-made.php" style="color: orange;">Add a restaurant</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>hire-chef.php" >Hire a Chef</a>
                        </li>
                        <li>
                        <a href="<?php echo SITEURL; ?>train-service.php" >Train service</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>Recipies.php">Blog</a>
                    </li>
                    
                
                    <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/login-rest.php"><button class="button" 
                        style=" background-color: #182C61; 
                            color: rgb(255, 255, 255); 
                            padding: 12px 24px;
                            border-radius: 5px; margin-left: 20px;">Login</button></a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
    

     <!-- fOOD sEARCH Section Starts Here -->
     <section class="food-search2 text-center">
        <div class="container">
           <h2 style="color: #182C61;">Procedure for Registeration</h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-type1" >
        <div class="container ">
            <h2 class="text-center" style="color: orange;font-weight: bolder;">Required documents</h2>

                 <div class="food-type-box2 text-center">
                
                    <div class="text-center" style="color: black;  border-radius: 5px;">
                        
                        <h4 id="head"  style="color: rgb(255, 255, 255);  background-color:  rgb(255, 0, 81); height: 30px;">  Restaurant</h4>
                        <br>  
                       <h4 id="head" style=" background-color:  rgb(131, 124, 126); color: white;"><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Ficons8-ok-20.png?alt=media&token=b31e603e-b38f-441f-ace1-38e7a5c1bca6" alt="location" />
                        FSSAI License Copy </h4> 
                        <h4 id="head" ><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Ficons8-ok-20.png?alt=media&token=b31e603e-b38f-441f-ace1-38e7a5c1bca6" alt="location" />
                            Aadhar Card Copy </h4> 
                            <h4 id="head" style=" background-color:  rgb(131, 124, 126); color: white;"><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Ficons8-ok-20.png?alt=media&token=b31e603e-b38f-441f-ace1-38e7a5c1bca6" alt="location" />
                                Regular GSTIN (if applicable) </h4> 
                                <h4 id="head" ><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Ficons8-ok-20.png?alt=media&token=b31e603e-b38f-441f-ace1-38e7a5c1bca6" alt="location" />
                                    Your restaurant menu </h4> 
                                    <h4 id="head" style=" background-color:  rgb(131, 124, 126); color: white;"><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Ficons8-ok-20.png?alt=media&token=b31e603e-b38f-441f-ace1-38e7a5c1bca6" alt="location" />
                                        Dish images for top 5 items </h4> 
                                           <br>
                                           <br>
                                           <a href="https://docs.google.com/forms/d/e/1FAIpQLSe2m030v9MuUn3Pl24S7nH78JVh_x8LuZ6IQ1iHq5YZijSVbQ/viewform?usp=pp_url"><button class="button" 
                                            style=" background-color: #182C61; 
                                                color: rgb(255, 255, 255); 
                                                padding: 12px 24px;
                                                border-radius: 5px; margin-left: 20px;">Proceed</button></a>
                                                <br>
                                                <br>


                        </div>  
                  
                </div> 

                <div class="food-type-box2" >
                   
                    <div class="text-center" style="color: black;  border-radius: 7.5px;">
                        <h4 id="head"  style="color: rgb(255, 255, 255);  background-color: rgb(255, 0, 81); height: 30px; ">  Home Made</h4>
                           
                           <br>  
                           <h4 id="head" style=" background-color:  rgb(131, 124, 126); color: white; "><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Ficons8-ok-20.png?alt=media&token=b31e603e-b38f-441f-ace1-38e7a5c1bca6" alt="location" />
                            Ration Card Copy </h4>
                            <h4 id="head" ><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Ficons8-ok-20.png?alt=media&token=b31e603e-b38f-441f-ace1-38e7a5c1bca6" alt="location" />
                                Aadhar Card Copy </h4> 
                           <h4 id="head" style=" background-color:  rgb(131, 124, 126); color: white;"><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Ficons8-ok-20.png?alt=media&token=b31e603e-b38f-441f-ace1-38e7a5c1bca6" alt="location" />
                            Voter ID Copy </h4> 
                            
                                 
                                    <h4 id="head" ><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Ficons8-ok-20.png?alt=media&token=b31e603e-b38f-441f-ace1-38e7a5c1bca6" alt="location" />
                                        Your Home Made menu </h4> 
                                        <h4 id="head" style=" background-color:  rgb(131, 124, 126); color: white;"><img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ffood%20menu%2Ficons8-ok-20.png?alt=media&token=b31e603e-b38f-441f-ace1-38e7a5c1bca6" alt="location" />
                                            Dish images for top 5 items </h4> 
                                            <br>
                                            <br>
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdKfIAvAFToHbsZoE7yrIKL2GgZNDdNqeIgRgGTYRFTFjdmeQ/viewform?usp=pp_url"><button class="button" 
                                                style=" background-color: #182C61; 
                                                    color: rgb(255, 255, 255); 
                                                    padding: 12px 24px;
                                                    border-radius: 5px; margin-left: 20px;">Proceed</button></a>
                                                     <br>
                                                     <br>
                            </div>   
                               
                    </div>   


           
            <div class="clearfix"></div>
        </div>
        <h4 id="head"  style="color:orange; margin-left: 150px; ">  Note: We will notify you through email and phone number, once your entered details in google form is Completely verified by Admin.</h4>

           
    </section>
    <!-- Categories Section Ends Here -->
    <br>
    <br>




             

                   
             
             <br>
             <br>


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