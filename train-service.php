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
                        <a href="<?php echo SITEURL; ?>Add-rest_home-made.php" >Add a restaurant</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>hire-chef.php">Hire a Chef</a>
                        </li>
                        <li>
                        <a href="<?php echo SITEURL; ?>train-service.php" style="color: orange;">Train service</a>
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
     <section class="food-search4 text-center">
        <div class="container">
           <h2 style="color: #182C61;">Get foods while you travel <br><br> <a href="https://www.google.com/maps/@10.8211663,78.2897649,7z"><button class="button" 
                                            style=" background-color: #182C61; 
                                                color: rgb(255, 255, 255); 
                                                padding: 9px 24px;
                                                border-radius: 5px; margin-left: 20px;">Go to Google Maps</button></a>
                                               
</h2>

        </div><br><br>
        
                  <?php

                       if(isset($_SESSION['update']))
                      {
                       echo $_SESSION['update'];//display msg
                       unset($_SESSION['update']);//remove msg
                     }
                     
                     
                     ?> 
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

   

    <?php
		// Set default values
		$train_lat = '';
		$train_lon = '';
		$restaurant_lat = '';
		$restaurant_lon = '';

		// Check if the form has been submitted
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// Get the form data
			$train_lat = mysqli_real_escape_string($conn,$_POST['train_lat']);
			$train_lon = mysqli_real_escape_string($conn,$_POST['train_lon']);
			$restaurant_lat = mysqli_real_escape_string($conn,$_POST['restaurant_lat']);
			$restaurant_lon = mysqli_real_escape_string($conn,$_POST['restaurant_lon']);

			// Validate the form data
			if (!is_numeric($train_lat) || !is_numeric($train_lon) || !is_numeric($restaurant_lat) || !is_numeric($restaurant_lon)) {
				$error_msg = 'Invalid input';
			} else {
				// Calculate the distance between the two locations
				$R = 6373.0;
				$lat1 = deg2rad($train_lat);
				$lon1 = deg2rad($train_lon);
				$lat2 = deg2rad($restaurant_lat);
				$lon2 = deg2rad($restaurant_lon);
				$dlon = $lon2 - $lon1;
				$dlat = $lat2 - $lat1;
				$a = sin($dlat / 2)**2 + cos($lat1) * cos($lat2) * sin($dlon / 2)**2;
				$c = 2 * atan2(sqrt($a), sqrt(1 - $a));
				$distance_km = $R * $c;

				// Decide whether to accept the order
				if ($distance_km < 30) {
                       
                    $_SESSION['update'] = "<div class='success' style='margin-left:200px;'>Location is accepted,  but you can select only restaurant from google map that is near to railway station. Please enter the required details    <strong>X</strong><br><br>Distance between two places :"." ".number_format( $distance_km, 2, '. ', '' )." "."km</div>";
                      //redirect to manage Admin page
                    header('location:'.SITEURL.'train-order.php');
				} else {
                    $_SESSION['update'] = "<div class='error' style='margin-left:200px;'>Sorry Order is not accepted due to long distance  :".number_format( $distance_km, 2, '. ', '' )." "."km        <strong>X</strong></div>";
                    header('location:'.SITEURL.'train-service.php');

				}
			}
		}
	?>



    

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-type1" >
        <div class="container ">
      

                 <div class="food-type-box3 ">
                
                    <div class="" style="color: black;  border-radius: 5px; ">
                        
                        <h4 id="head" class="text-center" style="color: rgb(255, 255, 255);  background-color:  rgb(255, 0, 81); height: 30px; padding:8px;">  Train food service</h4>
                        <br>  

                        
                        <form method="post" class="" >
		                <label for="train_lat"  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Train Latitude :</label><br><br>
                        
		                <input type="text" id="train_lat" name="train_lat" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value="<?php echo $train_lat; ?>"><br><br>

		                <label for="train_lon"  style="color: rgb(255, 255, 255); border-radius: 5px;  margin-left:35px; margin-right:56px; color: navy; font-weight:bold; ">Train Longitude :</label><br><br>
		                <input type="text" id="train_lon" name="train_lon" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value="<?php echo $train_lon; ?>"><br><br>

		                <label for="restaurant_lat" style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:26px; color:  #1B1464; margin-left:36px; font-weight:bold;">Restaurant Latitude :</label><br><br>
		                <input type="text" id="restaurant_lat" name="restaurant_lat" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:35px;  background-color:  #ecf0f1;  color: black;" value="<?php echo $restaurant_lat; ?>"><br><br>

		                <label for="restaurant_lon" style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:8px; margin-left:30px; color: navy; padding:5px; font-weight:bold;">Restaurant Longitude :</label><br><br>
		                <input type="text" id="restaurant_lon" name="restaurant_lon" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:35px;  background-color:  #ecf0f1;  color: black; " value="<?php echo $restaurant_lon; ?>"><br><br>

                                                 <a href="https://support.google.com/maps/answer/18539?hl=en&co=GENIE.Platform%3DDesktop" style="font-size:14px; font-weight:bold;  margin-left:50px;" >
                                            Do you feel any difficulty while finding location?<span style="color:rgb(255, 0, 81);vfont-weight:bolder;"> Click here<span></a>
                                                <br>
                                                <br>

		                <input type="submit" value="Go Next" name="submit" class="button"  style=" background-color:  rgb(255, 0, 81);
                                                color: rgb(255, 255, 255); 
                                                padding: 12px 24px;
                                                border-radius: 5px; margin-left: 200px; font-weight:bold;">
                        

            	</form>

                     
                                           
                            

                        </div>  
                  
                </div> 

                


           
            <div class="clearfix"></div>
        </div>

           
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