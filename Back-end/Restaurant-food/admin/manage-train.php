<?php include('partials/menu.php'); ?>




<!--- main content section starts --->   
    <div class="main-content ">
<div class="wrapper">
   </div>
</div>

   <div class="main-content ">
    <div class="wrapper2">
    <h2 style="margin-left:30px; color:navy; font-weight:bold; margin-bottom:10px;">Manage Train  Order</h2>
                  <!-- Button to add admin-->
                  </br>
                  </br>
                  <?php

                       if(isset($_SESSION['update']))
                      {
                       echo $_SESSION['update'];//display msg
                       unset($_SESSION['update']);//remove msg
                     }
                     if(isset($_SESSION['no-category-found']))
                      {
                       echo $_SESSION['no-category-found'];//display msg
                       unset($_SESSION['no-category-found']);//remove msg
                     }
                     
                     ?> </br>
                  </br>
            
    
                    <table class="tbl-full">
                        <tr>
                          <th>S.No</th>
                          <th>Food details and status</th>
                          <th>Train and <br>Restaurant<br>details</th>
                          <th>Customer details </th>
                          <th>Actions</th>


                          <?php
                            
                            //Query to get all the data in category_rest table

                           $sql = "SELECT * FROM train_service ORDER BY id DESC";

                           //execute the query
                           $res = mysqli_query($conn, $sql);

                           //check whether the query is executed or not
                           if($res==TRUE)
                           {

                            //count rows to check whether we have data in databse or not
                            $count = mysqli_num_rows($res); //function to get all the rrows in database

                            $sn=1;  //create a variable and assign values

                            if($count>0){
                                    // we hava data in database
                               while($rows=mysqli_fetch_assoc($res)){
                                  //using while loop to get all the data from db
                                  //and while loop will run as long as we have data in database

                                  //get individual data
                                   $id=$rows['id'];
                                   $food=$rows['food'];
                                   $qty=$rows['qty'];
                                   $train_name=$rows['train_name'];
                                   $train_url=$rows['train_url'];
                                   $rest_name=$rows['rest_name'];
                                   $rest_url=$rows['rest_url'];
                                   $order_date=$rows['order_date'];
                                   $status=$rows['status'];
                                   $cust_name=$rows['cust_name'];
                                   $cust_email=$rows['cust_email'];
                                   $cust_number=$rows['cust_number'];
                                   
                              

                                   ?>


                        </tr>

                        <tr>
                        <td><?php echo $sn++; ?>.</td>
                          <td>
                                <span><?php echo "Food :<br> ".$food; ?></span><br><br>
                                <span><?php echo "Quantity: ".$qty; ?></span><br><br>
                                <span><?php echo "<div class='f-details2'>Ordered date : ".$order_date."</div>"; ?>
                               <br><br>
                                <span>
                           <?php 
                                     //ordered, delivered,on delivery, csncelled
                                     if($status==="Ordered"){
                                       echo "Status:<label style='color:#48dbfb;'> $status</label>";
                                     }
                                     elseif($status=="On Delivery"){
                                       echo "Status:<label style='color:#ffa801;'> $status</label>";

                                     }
                                     elseif($status=="Delivered"){
                                       echo "Status:<label style='color:#32ff7e;'>$status</label>";
                                     }
                                     elseif($status=="Cancelled"){
                                       echo "Status:<label style='color:red;'> $status</label>";
                                     }
                           
                           ?></span><br><br>
                                 </td>
                          <td>
                                 <span><?php echo "<div class='f-details1'>Train Name : ".$train_name."</div>"; ?></span><br>
                                 <a href="<?php echo $train_url;?>"> <span><?php echo "<div class='f-details2'>Train Url: <br>".$train_url.",</div>"; ?></span></a><br>
                                <span><?php echo "<div class='f-details3'>Restaurant Name : ".$rest_name."</div>"; ?></span><br>
                                <a href="<?php echo $rest_url;?>"><span><?php echo "<div class='f-4'>Restaurant Url: <br>".$rest_url.",</div>"; ?></span></a><br>
                                
                          </td>
                          <td><span><?php echo "<div class='f-details1'>Customer name: <br>".$cust_name.",</div>"; ?></span><br>
                          <a href="mailto:<?php echo $cust_email;?>"><span><?php echo "<div class='f-details2'>Customer email : <br>".$cust_email.",</div>"; ?><span></a> <br>
                                <span><?php echo "<div class='f-4'>Customer Mobile number : <br>".$cust_number.",</div>"; ?></span><br>
                               
                           </td>
                          
                           <td>
                           <span> <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/update-train.php?id=<?php echo $id; ?>" class="btn-secondary1" >Update Order</a></span>
                                       
                           <?php


                           }
                        }
                        else
                         {

                           //we have no data in database


                           ?>

                             <tr>
                             <td>  <div class="error">No Order Placed    <strong>X</strong></div></td>
                              </tr>

                                 <?php


                                 }
                                }
                                else{

                                }
                               ?>

                          

                         
                          
                        </td>
                        </tr>

                       
                    </table>
                    </div>
   </div>

<!--- main content section ends --->

<!--- dummy section starts --->
<div class="main-content ">
<div class="wrapper">
   </div>
</div>
<div class="main-content ">
<div class="wrapper">
   </div>
</div>
<div class="main-content ">
<div class="wrapper">
   </div>
</div>
<div class="main-content ">
<div class="wrapper">
   </div>
</div>
<div class="main-content ">
<div class="wrapper">
   </div>
</div>
<div class="main-content ">
<div class="wrapper">
   </div>
</div>


<!--- dummy section ends--->




<?php include('partials/footer.php'); ?>