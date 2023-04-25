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
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/rest-categories.php" >Categories</a>
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
                 if((!isset($_SESSION['user_rest'])))
                 {
                     //User not logged in, redirect to login page
                     header('location:'.SITEURL.'Front-end/food-types/Restaurant/login_rest/login_user_rest.php');
                 }                 

                 //Get the username of the logged-in user
                 $username = $_SESSION['user_rest'];
                

                 //SQL query to fetch the user details from the database
                 $sql7 = "SELECT * FROM user_rest WHERE username='$username' ";                 

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
<hr>

         <!--- main content section starts --->   
       <div class="main-content1 ">
        <div class="wrapper2">
        
          <br/>
          <h3 class="text-center">List of orders placed by you</h3><br><br>
          <span style="font-weight:bold; margin-left:120px;">If you want to make many any changes in order. Please don't hestitate to contact us via email:<a href="mailto:vignesh510510@gmail.com" style="color:blue; text-decoration:underline;">Vignesh510510@gmail.com </a>(or) call this number :8189950272</span>

         <tr>
                       

           </tr><br><br>
        
        <table class="tbl-full">
        <form action="" method="post" class="order1">

                        <tr>
                          <th>S.No</th>
                          <th>Food<br> title</th>
                          <th>Restaurant <br>details</th>
                          <th>Total Price</th>
                          <th>Payment Mode: <br>(Cash On-Delivery)/<br>
                          Online Payment(G Pay):94446 03820<br>
                          (once Payment done send <br>screenshot to above email ID:)
                          <br><br> 
                            Order Status                        </tr>
                       
                        <?php
                            
                            //Query to get all the data in category_rest table

                           $sql = "SELECT * FROM basket_rest WHERE user_id=$user_id ORDER BY id DESC";

                           //execute the query
                           $res = mysqli_query($conn, $sql);

                           //check whether the query is executed or not
                           if($res==TRUE)
                           {

                            //count rows to check whether we have data in databse or not
                            $count = mysqli_num_rows($res); //function to get all the rows in database 

                            $sn=1;   //create a variable and assign values

                            if($count>0){
                                    // we hava data in database
                               while($rows=mysqli_fetch_assoc($res)){
                                  //using while loop to get all the data from db
                                  //and while loop will run as long as we have data in database
                                  //get individual data
                                   $id=$rows['id'];
                                   $food=$rows['food'];
                                   $rest_name=$rows['rest_name'];
                                   $rest_address=$rows['rest_address'];
                                   $rest_district=$rows['rest_district'];
                                   $rest_number=$rows['rest_number'];
                                   $price=$rows['price'];
                                   $qty=$rows['qty'];
                                   $total=$rows['total'];
                                   $order_date=$rows['order_date'];
                                   $status=$rows['status'];
                                   $order_name=$rows['cust_name'];
                                   $order_contact=$rows['cust_contact'];
                                   $order_email=$rows['cust_email'];
                                   $order_address=$rows['cust_address'];
                                   $order_pet=$rows['is_pet'];
                                   $order_id=$rows['user_id'];
                                   $order_taken=$rows['order_taken'];


                              

                                   ?>


                        <tr >
                        <td><?php echo $sn++; ?>.</td>

                        <td style="font-weight:bold; padding:4px 8px; border-radius:5px;"><?php echo $food?>
                        <input type="hidden" name="food" value="<?php echo $food?>">
                    </td>

                       
                        
                        <td style="padding:2px;"><span style="background-color:green; padding:2px; color:white;">Restaurant name: <?php echo $rest_name?>
                        <input type="hidden" name="rest_name" value="<?php echo $rest_name?>">
                    </span> <br><br> 

                        <span style="background-color:violet; padding:2px; color:white; padding:4px 8px; border-radius:5px;">Restaurant address: <?php echo $rest_address?>
                        <input type="hidden" name="rest_address" value="<?php echo $rest_address?>">
                    </span><br> <br> 

                        <span style="background-color:red; padding:2px; color:white; padding:4px 8px; border-radius:5px;">Restaurant district: <?php echo $rest_district?>
                        <input type="hidden" name="rest_district" value="<?php echo $rest_district?>">
                    </span><br> <br>

                        <span style="background-color:yellow; padding:2px; color:black; padding:4px 8px; border-radius:5px;">Restaurant number: <?php echo $rest_number?>
                        <input type="hidden" name="rest_number" value="<?php echo $rest_number?>">
                        <input type="hidden" name="order_name" value="<?php echo $order_name?>">
                        <input type="hidden" name="order_contact" value="<?php echo $order_contact?>">
                        <input type="hidden" name="order_email" value="<?php echo $order_email?>">
                        <input type="hidden" name="order_address" value="<?php echo $order_address?>">
                        <input type="hidden" name="order_pet" value="<?php echo $order_pet?>">
                        <input type="hidden" name="order_id" value="<?php echo $order_id?>">
                        <input type="hidden" name="order_taken" value="<?php echo $order_taken?>">



                    </span>
                    </td>
                    <td >
                    <span style="font-weight:bold; ">Price: ₹<?php echo $price?> 
                    <input type="hidden" name="price" value="<?php echo $price?>">
                </span> <br><br> 
                    <span style="font-size:15px; font-weight:bold;">X</span> <br><br> 

                        <span style="font-weight:bold;">Quantity: </span>
                        <input type="number" name="qty" class="input-responsive" value="<?php echo $qty?>" required style="width:20%; border:2px solid black;"> <br>
                        <span style="font-weight:bold;">Sub Total: </span>
                        <input type="number" name="total" class="input-responsive" value="<?php echo $total?>" required style="width:30%; border:2px solid black;"> <br>

                </td>
                
                       
                        <td style="font-weight:bold;"><br><br>
                        <span style="color:black; background-color:yellow; padding:4px 8px; ">Order ID: <?php echo $id;?></span><br><br>
                        <span style="color:Navy; background-color:violet; padding:4px 8px; border-radius:5px;">Ordered Date/Time: <?php echo $order_date;?></span>
                        <br><br>
                        <span >
                        
                        <?php 
                                     //ordered, delivered,on delivery, csncelled
                                     if($status==="Ordered"){
                                       echo "<label style='color:black; background-color:#48dbfb; padding:4px 8px;'>$status</label>";
                                     }
                                     elseif($status=="On Delivery"){
                                       echo "<label style='color:black;  background-color:orange; padding:4px 8px;'>$status</label>";

                                     }
                                     elseif($status=="Delivered"){
                                       echo "<label style='color:white; background-color:green; padding:4px 8px;'>$status</label>";
                                     }
                                     elseif($status=="Cancelled"){
                                       echo "<label style='color:white;  background-color:red; padding:4px 8px;'>$status</label>";
                                     }
                           
                           ?>
                       
                    <!---<a href="#"><input type="submit" name="check" value="Check out" class="btn btn-primary1"></a>  -->

                    </span ><br><br>
                    <span style="color:Navy; background-color:violet; padding:4px 8px; border-radius:5px;">Order taken to <br><br>Delivery By:<br><br> <?php echo $order_taken;?></span>
 
                    
                    
                    </td>
                        </tr></form>
                         <?php


}
}
else
{

//we have no data in database


?>
<span style="color:white; padding:8px 16px; background-color:red; margin-left:200px;">You not placed any order. Go to food page and .Please order food. <a href="#" style="color:white; font-weight:bold; text-decoration: underline;"></a></span><br><br><br>

  <tr>
  <td>  <div class="error">No Food Added to cart    <strong>X</strong></div></td>
   </tr>

      <?php


      }
     }
     else{

     }
    ?>





</td>
</tr>
          <tr> <td> </td>
               <td> </td>
               <td> </td>
               
               <?php

                  //create a sql query to get the details
                  $sql3 = "SELECT SUM(total) As Total FROM basket_rest WHERE user_id=$user_id ";

                  //execute the query
                  $res3 = mysqli_query($conn,$sql3);
                   //check whether the data isavailable or not
                   $row3 =mysqli_fetch_assoc($res3);

                   //get the total revenue
                   $total_cost = $row3['Total'];

                  ?>
               <td>
                <span style="color:orange; font-weight: bold;"> Total Price:<?php echo " ".$total_cost;?></span><br>
              </td>

              <td><br>
               <span>You will receive your order within 20-30 mins based on location.</span><br>
              </td>
    </tr>
              
                       
</table>


<div class="main-content1 ">
<div class="wrapper2">
   </div>
</div>
<div class="main-content1 ">
<div class="wrapper2">
   </div>
</div>

<div class="main-content1 ">
<div class="wrapper2">
   </div>
</div>
<div class="main-content1 ">
<div class="wrapper2">
   </div>
</div>
<div class="main-content1 ">
<div class="wrapper2">
   </div>
</div>
<div class="main-content1 ">
<div class="wrapper2">
   </div>
</div>
<div class="main-content1 ">
<div class="wrapper2">
   </div>
</div>

</div>
                    </div>

    <style>
           
           
     /*   css for order page */
     .wrapper2{
        padding: 1%;
         width:90%;
        margin: 0 auto;

}
    .main-content1{
        background-color:#f5f6fa;

    }


    
/* css for manage admin */
.tbl-full{
    width:100%;
}

table tr th {

    padding:1.5%;
    color: black;
    font-weight: bold;

    background-color:rgb(255, 153, 0);
}

td{
    text-align: center;
    color:white;
    font-weight: 500;


    background-color:navy;
    padding: 1%;
}
    
    </style>


           <!---<legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="../../images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3>Food Title</h3>
                        <h3>Restaurant name</h3>
                        <h3>Restaurant address</h3>
                        <h3>Restaurant district</h3>

                    
                        <p class="food-price">Price: $2.3</p>


                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>

                        <p class="food-price">Total Price: </p>

                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Vigneshwaran M" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 8189xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. vignesh510510@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>-->
                    


       
    <!-- fOOD sEARCH Section Ends Here -->


</body>
</html>