<?php include('partials/constants.php');
ob_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../../Front-end/css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="../../Front-end/images/foodies.gif" alt="Restaurant Logo" class="img-responsive" >
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
                        <a href="#">Blog</a>
                    </li>
                    
                
                    <a href="<?php echo SITEURL; ?>Delivery/Restaurant/login-rest.php"><button class="button" 
                        style=" background-color: #182C61; 
                            color: rgb(255, 255, 255); 
                            padding: 12px 24px;
                            border-radius: 5px; margin-left: 20px;">Delivery Login</button></a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
    

     <!-- fOOD sEARCH Section Starts Here -->
     <section class="food-search text-center">
        <div class="container">
           <h2 style="color: #182C61;">Delivery Boy Registration for Restaurant <br><br> 
</h2>

        </div>
        
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
                     
                     ?> 
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

   




    

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-type1" >
        <div class="container ">
      

                 <div class="food-type-box3 ">
                
                    <div class="" style="color: black;  border-radius: 5px; ">
                        
                        <h4 id="head" class="text-center" style="color: rgb(255, 255, 255);  background-color:  rgb(255, 0, 81); height: 30px; padding:8px;">  Enter your details</h4>
                        <br>  

                        
                        <form action="" method="post" enctype="multipart/form-data" >

                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Username :</label><br><br>
                        
		                <input type="text"  name="username" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Password :</label><br><br>
                        
		                <input type="text"  name="pwd" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                      
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Name :</label><br><br>
                        
		                <input type="text"  name="name" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>


                      <label   style="color: rgb(255, 255, 255); border-radius: 5px;  margin-left:35px; margin-right:56px; color: navy; font-weight:bold; ">Phone number :</label><br><br>
                      <input type="number" name="contact" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>

                      <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:8px; margin-left:30px; color: navy; padding:5px; font-weight:bold;">Address :</label><br><br>
                      <input type="text"  name="address" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:35px;  background-color:  #ecf0f1;  color: black; " value=""><br><br>

                      <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:26px; color:  #1B1464; margin-left:36px; font-weight:bold;">District :</label><br><br>
                      <input type="text" name="district" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:35px;  background-color:  #ecf0f1;  color: black;" value=""><br><br>

                                                <br>
                                                <br>

		                <input type="submit" value="Submit" name="submit" class="button"  style=" background-color:  rgb(255, 0, 81);
                                                color: rgb(255, 255, 255); 
                                                padding: 12px 24px;
                                                border-radius: 5px; margin-left: 200px; font-weight:bold;">
                        

            	</form>

                     
                                           
                            

                        </div>  
                  
                </div> 
                <?php 

             

//check whether the submit button is clicked or not
if(isset($_POST['submit']))	 {
//echo"clicked";

//get the value from category form
   $username =  mysqli_real_escape_string($conn,$_POST['username']);
   $raw_pwd = md5($_POST['pwd']);  ///password encryption with md5
   $pwd =    mysqli_real_escape_string($conn,$raw_pwd);  ///password encryption with md5
   $name =  mysqli_real_escape_string($conn,$_POST['name']);
   $contact =  mysqli_real_escape_string($conn,$_POST['contact']);
   $district =  mysqli_real_escape_string($conn,$_POST['district']);
   $address =  mysqli_real_escape_string($conn,$_POST['address']);

   
                       
  
  

   //create sql to store data

   $sql2 = "INSERT INTO delivery_rest SET 
            username = '$username',
            pwd = '$pwd',
            delivery_boy_name='$name',
            delivery_boy_number='$contact',
            delivery_boy_district='$district',
            delivery_boy_address='$address'
            

   ";

   //execute the query
   $res2 = mysqli_query($conn, $sql2);

   //check whether the query executed or not
   if($res2 = true)
   {
          
       //query executed successfully
       $_SESSION['register'] = "<div class='success'>Registration Successful  <strong>X</strong></div>";
       header("location:".SITEURL.'Delivery/Restaurant/register-delivery.php');


   }
   else
   {

       //query not executed 
       $_SESSION['register'] = "<div class='error'>failed to register   <strong>X</strong></div>";
       header("location:".SITEURL.'Delivery/Restaurant/register-delivery.php');



   }
   
}
else{
    

}
ob_end_flush();


?>
                


           
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
            <p>All rights reserved. Designed By <a href="#">Team foody</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>