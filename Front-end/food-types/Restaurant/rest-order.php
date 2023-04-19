<?php 

      include('../../config/constants.php'); 
    
      include('login_rest/login-check.php'); 



ob_start();
?>




<?php

  //get the id whether food is set or not

  if(isset($_GET['user_info']))
  {

    //GET THE FOOD ID AND DETAILS OF THE SELECTED FOOD
    $user_info = $_GET['user_info'];
    


    //get the details of the selected food

    $sql = "SELECT * FROM user_rest WHERE user_id=$user_info";

        //execute the query

    $res = mysqli_query($conn, $sql);

    //count the rows
    $count = mysqli_num_rows($res);

    if($count == 1)
    {

        // we have data
        // GET THE DATA FROM DATABASE
        $row = mysqli_fetch_assoc($res);
             
        
        $order_id = $row['user_id'];
        $order_name = $row['cust_name'];
        $order_contact = $row['cust_contact'];
        $order_address = $row['cust_address'];
        $order_email	 = $row['cust_email'];
        $order_pet=$row['is_pet'];
             
    }
   


  }
  else
  {
    
    //redirect to restaurant page

    header('location:'.SITEURL."Front-end/food-types/Restaurant/restaurant.php");
  }

?>




   


<?php

  //get the id whether food is set or not

  if(isset($_GET['food_id']))
  {

    //GET THE FOOD ID AND DETAILS OF THE SELECTED FOOD
    $food_id = $_GET['food_id'];
    


    //get the details of the selected food

    $sql = "SELECT * FROM food_rest WHERE id=$food_id";

        //execute the query

    $res = mysqli_query($conn, $sql);

    //count the rows
    $count = mysqli_num_rows($res);

    if($count == 1)
    {

        // we have data
        // GET THE DATA FROM DATABASE
        $row = mysqli_fetch_assoc($res);
             
        

        $title = $row['title'];
        $price = $row['price'];
        $rest_name = $row['rest_name'];
        $rest_address = $row['rest_address'];
        $rest_district	 = $row['rest_district'];
        $rest_number = $row['rest_number'];
        $image_name =$row['image_name'];
             
    }
   


  }
  else
  {
    
    //redirect to restaurant page

    header('location:'.SITEURL."Front-end/food-types/Restaurant/restaurant.php");
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

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
          <h3 class="text-center">Confirm your order to checkout</h3><br>
          <table class="tbl-full">

        <form action="" method="post" class="order1">

                        <tr>
                          <th>S.No</th>
                          <th>Food<br> title</th>
                          <th>Image <br>name</th>
                          <th>Restaurant <br>details</th>
                          <th>Total Price</th>
                          <th>Payment Mode</th>
                        </tr>
                       
                        
                        <tr >
                        <td style="font-weight:bold;">  
                            1.                      
                         </td>
                        <td style="font-weight:bold; padding:5px;"><?php echo $title?>
                        <input type="hidden" name="food" value="<?php echo $title?>">
                    </td>

                        <td>
                        <?php                    

                    //check whether the image is available or not                    

                    if($image_name=="")
                    {
                     echo "<div class='error'>Image not available   <strong>X</strong></div>";                    

                    }else{
                               
                     ?>
                    <img src="<?php echo SITEURL; ?>Front-end/images/food/<?php echo $image_name;?>" alt="food" style="width:100px; margin:10px; ">                    

                     <?php                    
                    

                    }                    

                    ?>
                         </td>
                        
                        <td style="padding:2px;"><span style="background-color:green; padding:2px; color:white">Restaurant name: <?php echo $rest_name?>
                        <input type="hidden" name="rest_name" value="<?php echo $rest_name?>">
                    </span> <br><br> 

                        <span style="background-color:violet; padding:2px; color:white">Restaurant address: <?php echo $rest_address?>
                        <input type="hidden" name="rest_address" value="<?php echo $rest_address?>">
                    </span><br> <br> 

                        <span style="background-color:red; padding:2px; color:white">Restaurant district: <?php echo $rest_district?>
                        <input type="hidden" name="rest_district" value="<?php echo $rest_district?>">
                    </span><br> <br>

                        <span style="background-color:yellow; padding:2px; color:black">Restaurant number: <?php echo $rest_number?>
                        <input type="hidden" name="rest_number" value="<?php echo $rest_number?>">
                        <input type="hidden" name="order_name" value="<?php echo $order_name?>">
                        <input type="hidden" name="order_contact" value="<?php echo $order_contact?>">
                        <input type="hidden" name="order_email" value="<?php echo $order_email?>">
                        <input type="hidden" name="order_address" value="<?php echo $order_address?>">
                        <input type="hidden" name="order_pet" value="<?php echo $order_pet?>">
                        <input type="hidden" name="order_id" value="<?php echo $order_id?>">


                    </span>
                    </td>
                    <td >
                    <span style="font-weight:bold; ">Price: ₹<?php echo $price?> 
                    <input type="hidden" name="price" value="<?php echo $price?>">
                </span> <br><br> 
                    <span style="font-size:15px; font-weight:bold;">X</span> <br><br> 

                        <span style="font-weight:bold;">Quantity: </span>
                        <input type="number" name="qty" class="input-responsive" value="1" required style="width:20%; border:2px solid black;"> <br>

                </td>
                
                       
                        <td style="font-weight:bold;">Cash <br>On<br>Delivery <br><br>
                        <span ><br><br><br><br>
<br><br><br>
                    <button class="btn btn-primary1" type="submit" name="submit">Check out</button>
                    
                    <!---<a href="#"><input type="submit" name="check" value="Check out" class="btn btn-primary1"></a>  -->

                    </span ><br> 
                    

                    </td>
                        </tr></form>
                       
</table>

           <?php 

             

             //check whether the submit button is clicked or not
	 if(isset($_POST['submit']))	 {
		//echo"clicked";
            
		//get the value from category form
                $food = $_POST['food'];
                $rest_name = $_POST['rest_name'];
                $rest_address = $_POST['rest_address'];
                $rest_district = $_POST['rest_district'];
                $rest_number = $_POST['rest_number'];               
                $price = $_POST['price'];
                $qty = $_POST['qty'];
                $total = $price * $qty;
                $order_date =date("Y-m-d h:i:sa");
                $status="Ordered"; //ordered, undelivery cancelled 
                $cust_name = $_POST['order_name'];
                $cust_contact = $_POST['order_contact'];
                $cust_email = $_POST['order_email'];
                $cust_address = $_POST['order_address'];
                $is_pet = $_POST['order_pet'];
                $user_id = $_POST['order_id'];



                //create sql to store data

                $sql2 = "INSERT INTO basket_rest SET 
                         food='$food',
                         rest_name='$rest_name',
                         rest_address='$rest_address',
                         rest_district='$rest_district',
                         rest_number='$rest_number',
                         price='$price',
                         qty='$qty',
                         total='$total',
                         order_date='$order_date',
                         status='$status',
                         cust_name='$cust_name',
                         cust_contact='$cust_contact',
                         cust_email='$cust_email',
                         cust_address='$cust_address',
                         is_pet='$is_pet',
                         user_id='$user_id'

                         

                ";

                //execute the query
                $res2 = mysqli_query($conn, $sql2);

                //check whether the query executed or not
                if($res2 == true)
                {
                       
                    //query executed successfully
                    $_SESSION['order'] = "<div class='success'>Restarant Food Ordered Successfully   <strong>X</strong></div>";
                    header("location:".SITEURL.'Front-end/food-types/Restaurant/restaurant.php');
                   


                }
                else
                {

                    //query not executed 
                    $_SESSION['order'] = "<div class='error'>Unable to order Food   <strong>X</strong></div>";
                    header("location:".SITEURL.'Front-end/food-types/Restaurant/restaurant.php');



                }
                
            }
            else{
      
        
            }
            ob_end_flush();

            ?>
                   

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