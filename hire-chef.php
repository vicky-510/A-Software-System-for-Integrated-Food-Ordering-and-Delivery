<?php include('Front-end/config/constants.php'); ?>







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
                        <a href="<?php echo SITEURL; ?>hire-chef.php" style="color: orange;">Hire a Chef</a>
                        </li>
                        <li>
                        <a href="<?php echo SITEURL; ?>train-service.php" >Train service</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>Recipies.php">Blog</a>
                    </li>
                    
                
                    <a href="<?php echo SITEURL; ?>chef/login-chef.php"><button class="button" 
                        style=" background-color: #182C61; 
                            color: rgb(255, 255, 255); 
                            padding: 12px 24px;
                            border-radius: 5px; margin-left: 20px;">Chef Login</button></a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search5 text-center">
        <div class="container">
       <form action="<?php echo SITEURL; ?>hire-chef-search.php" method="POST" >               
                <input type="search" name="chef" placeholder="Search for Chef.." required id="search-bar">
                <input type="submit" name="submit" value="Search" class="btn btn-primary" id="search-btn"><br><br>
                <span style="font-size:20px; font-weight:bold; color:navy;">Want to register as a chef?   <a href="<?php echo SITEURL; ?>chef/register-chef.php" style="font-size:20px; font-weight:bold; color:green;">Click here</a><span>

            </form>
            <br>
            <?php

if(isset($_SESSION['update']))
{
echo $_SESSION['update'];//display msg
unset($_SESSION['update']);//remove msg
}
if(isset($_SESSION['register']))
{
echo $_SESSION['register'];//display msg
unset($_SESSION['register']);//remove msg
}
if(isset($_SESSION['upload']))
{
echo $_SESSION['upload'];//display msg
unset($_SESSION['upload']);//remove msg
}
if(isset($_SESSION['hire']))
{
echo $_SESSION['hire'];//display msg
unset($_SESSION['hire']);//remove msg
}

?> <br>
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->
        


    <section class="food-menu">
        <div class="container">
            <h2 class="text-center text-white">Popular Chefs in India</h2>

            
           <?php

           //getting foods from database that are active and featured
           //sql query


           $sql2 ="SELECT * FROM chef_hire";

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
                    $name = $row2['name'];
                    $age = $row2['age'];
                    $salary_work = $row2['salary_work'];
                    $salary_function = $row2['salary_function'];
                    $skills = $row2['skills'];
                    $experience = $row2['experience'];
                    $contact = $row2['contact'];
                    $email = $row2['email'];
                    $address = $row2['address'];
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
                      <img src="<?php echo SITEURL; ?>Front-end/chef/<?php echo $image_name;?>" alt="food" class="img-responsive img-curve" >

                       <?php


                      }

                      ?>

                      </div>
    
                <div class="food-menu-desc">
                   
                    <h4 style="font-size:18px; font-weight:bolder;"><?php echo "Chef name: "." ".$name;?></h4>
                    <p class="food-detail" style="color: #000000; font-weight: 500; margin-top: 0px; margin-left: 3px;">
                    </p>
                     <p class="food-detail" style="color: #000000; font-weight: 300;" >
                     <?php echo "<strong>Age:</strong> "." ".$age?><br>
                    <?php echo "<strong>Skills:</strong> "." ".$skills?><br>
                    <?php echo "<strong>Experience:</strong>"." ".$experience." "."years"?><br>
                    <?php echo "<strong>Phone no:</strong>"." ".$contact?><br>
                    <?php echo "<strong>Email:</strong>"." ".$email?><br>
                    <?php echo "<strong>Address:</strong>"." ".$address?>

                    <hr style="margin-top: 10px; border: none;
                    border-top: 2px dashed #bdc3c7;
                    color: #fff;
                    background-color: #fff;
                    height: 1px;
                    width: 98%;">
                     </p>
                     <p class="food-detail" style="color: #000000; font-weight: 500; margin-top: 5px; margin-left: 3px;">
                     <?php echo "<strong>Expected Salary :</strong>"." ".$salary_work."/Month "?>
                     <?php echo "<strong>function Order:</strong>"." ".$salary_function."(Minimum) "?>

                    </p>
                        <!-- Restaurant district/state-->  
    
                    <a href="<?php echo SITEURL; ?>chef/hiring-details.php?chef_id=<?php echo $id; ?>" class="btn btn-primary" id="food-order" style="font-weight: bolder; margin-top: 10px; margin-bottom: 10px; background-color:#f9ca24 ; color:black">Hire me</a>

                    <br>
    
                </div>
            </div>
                      <?php

             }


           }
           else
           {

                      // food not available 
                 echo "<div class='error'>Chef not found   <strong>X</strong></div>"; 

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