<?php include('Back-end/config/constants.php');
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
                    
                    <li>
                    <a href="<?php echo SITEURL; ?>Delivery/Restaurant/login-rest.php"><button class="button" 
                        style=" background-color: #182C61; 
                            color: rgb(255, 255, 255); 
                            padding: 12px 24px;
                            border-radius: 5px; margin-left: 20px;">Rest Delivery Login</button></a>
                    </li>
                    <li>
                
                    <a href="<?php echo SITEURL; ?>Delivery/Home-made/login-home.php"><button class="button" 
                        style=" background-color: #182C61; 
                            color: rgb(255, 255, 255); 
                            padding: 12px 24px;
                            border-radius: 5px; margin-left: 20px;">Home Delivery Login</button></a>
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
           <h2 style="color: #182C61;">Train food service<br><br> <a href="https://www.google.com/maps/@10.8211663,78.2897649,7z"><button class="button" 
                                            style=" background-color: #182C61; 
                                                color: rgb(255, 255, 255); 
                                                padding: 9px 24px;
                                                border-radius: 5px; margin-left: 20px;">Go to Google Maps</button></a>
                                               
</h2>

        </div>
        
                  <?php

                       if(isset($_SESSION['update']))
                      {
                       echo $_SESSION['update'];//display msg
                       unset($_SESSION['update']);//remove msg
                     }
                     if(isset($_SESSION['order']))
                     {
                      echo $_SESSION['order'];//display msg
                      unset($_SESSION['order']);//remove msg
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

                        
                        <form action="" method="post" >
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Food title :</label><br><br>
                        
		                <input type="text"  name="food" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                        <label   style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">quantity :</label><br><br>
                        
		                <input type="number"  name="qty" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

		                <label style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Train Name :</label><br><br>
                        
                        <input type="text"  name="train_name" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                         <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Train Location (in url) :</label><br><br>
		               
                         <input type="text"  name="train_url" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

		                <label   style="color: rgb(255, 255, 255); border-radius: 5px;  margin-left:35px; margin-right:56px; color: navy; font-weight:bold; ">Restaurant Name :</label><br><br>
		                <input type="text"  name="rest_name" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>

		                <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:26px; color:  #1B1464; margin-left:36px; font-weight:bold;">Restaurant Location(in url) :</label><br><br>
		                <input type="text"  name="rest_url" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>



                      <label   style="color: rgb(255, 255, 255); border-radius: 5px;  margin-left:35px; margin-right:56px; color: navy; font-weight:bold; "> Name :</label><br><br>
                      <input type="text" name="cust_name" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>

                      <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:26px; color:  #1B1464; margin-left:36px; font-weight:bold;">Email :</label><br><br>
                      <input type="text" name="cust_email" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:35px;  background-color:  #ecf0f1;  color: black;" value=""><br><br>

                      <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:8px; margin-left:30px; color: navy; padding:5px; font-weight:bold;">Phone number :</label><br><br>
                      <input type="text"  name="cust_number" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:35px;  background-color:  #ecf0f1;  color: black; " value=""><br><br>

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
   $food = mysqli_real_escape_string($conn,$_POST['food']);
   $qty = mysqli_real_escape_string($conn,$_POST['qty']);
   $train_name = mysqli_real_escape_string($conn,$_POST['train_name']);
   $train_url = mysqli_real_escape_string($conn,$_POST['train_url']);
   $rest_name = mysqli_real_escape_string($conn,$_POST['rest_name']);               
   $rest_url = mysqli_real_escape_string($conn,$_POST['rest_url']);
   $order_date =date("Y-m-d h:i:sa");
   $status="Ordered"; //ordered, undelivery cancelled 
   $cust_name = mysqli_real_escape_string($conn,$_POST['cust_name']);
   $cust_email = mysqli_real_escape_string($conn,$_POST['cust_email']);
   $cust_number = mysqli_real_escape_string($conn,$_POST['cust_number']);
  

   //create sql to store data

   $sql2 = "INSERT INTO train_service SET 
            food='$food',
            qty='$qty',
            train_name='$train_name',
            train_url='$train_url',
            rest_name='$rest_name',
            rest_url='$rest_url',
            order_date='$order_date',
            status='$status',
            cust_name='$cust_name',
            cust_email='$cust_email',
            cust_number='$cust_number'
            

   ";

   //execute the query
   $res2 = mysqli_query($conn, $sql2);

   //check whether the query executed or not
   if($res2 = true)
   {
          
       //query executed successfully
       $_SESSION['order'] = "<div class='success'>Food Ordered Successfully   <strong>X</strong></div>";
       header("location:".SITEURL.'train-order.php');


   }
   else
   {

       //query not executed 
       $_SESSION['order'] = "<div class='error'>Unable to order Food   <strong>X</strong></div>";
       header("location:".SITEURL.'train-order.php');



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
            <p>All rights reserved. Designed By <a href="#">vignesh</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>