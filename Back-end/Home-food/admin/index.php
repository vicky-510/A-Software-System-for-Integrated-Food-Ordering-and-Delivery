
<?php include('partials/menu.php'); ?>


<!--- main content section starts --->

   <div class="main-content ">
<div class="wrapper">
   </div>
   </div>
<div class="main-content ">

<div class="wrapper">
<br>
<br>

<?php
if(isset($_SESSION['login-home']))
      {
         echo $_SESSION['login-home'];
         unset($_SESSION['login-home']);
      }
  ?>

<div class="row1-container">
 
    <div class="box box-down cyan">
    <?php

//create a sql query to get the details
$sql = "SELECT * FROM category_home ";

//execute the query
$res = mysqli_query($conn,$sql);
 //check whether the data isavailable or not
 $count =mysqli_num_rows($res);

?>
      <h2 style="color:navy;">Categories</h2>
      <p>Monitor categories added in our website</p>

      <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
      <h1 style="text-align:center; margin-top:10px; color:rgb(255, 123, 0);"><?php echo $count; ?></h1>

    </div>

    <div class="box red">
    <?php

//create a sql query to get the details
$sql1 = "SELECT * FROM food_home ";

//execute the query
$res1 = mysqli_query($conn,$sql1);
 //check whether the data isavailable or not
 $count1 =mysqli_num_rows($res1);

?>
      <h2 style="color:navy;">Foods</h2>
      <p>Know the number of foods posted in our website</p>
    <br>
      <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
      <h1 style="text-align:center; margin-top:10px; color:rgb(255, 123, 0);"><?php echo $count1; ?></h1>

    </div>
    <div class="box box-down blue">
    <?php

//create a sql query to get the details
$sql2 = "SELECT * FROM basket_home ";

//execute the query
$res2 = mysqli_query($conn,$sql2);
 //check whether the data isavailable or not
 $count2 =mysqli_num_rows($res2);

?>
      <h2 style="color:navy;">Total orders</h2>
      <p>Display the number of orders received from user</p>
      <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
      <h1 style="text-align:center; margin-top:10px; color:rgb(255, 123, 0);"><?php echo $count2; ?></h1>

    </div>
  </div>    <h2 style="margin-left:535px; color:white; font-weight:bold; background-color: navy; width:fit-content; border-radius:5px; padding:1%;">Dashboard</h2>

  <div class="row2-container">
    <div class="box orange">
    <?php

//create a sql query to get the details
$sql3 = "SELECT SUM(total) As Total FROM basket_home WHERE status='Delivered' ";

//execute the query
$res3 = mysqli_query($conn,$sql3);
 //check whether the data isavailable or not
 $row3 =mysqli_fetch_assoc($res3);

 //get the total revenue
 $total_revenue = $row3['Total'];

?>
      <h2 style="color:navy;">Revenue generated</h2>
      <p>Calculate the money earned while done food delivery</p>
      <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
      <h2 style="text-align:center; margin-top:10px; color:rgb(255, 123, 0);">₹<?php echo $total_revenue; ?></h2>

    </div>
  </div>
   </div>

 
</div>
<!--- main content section ends --->

<!--- dummy section starts --->




<!--- dummy section ends--->



<?php include('partials/footer.php'); ?>