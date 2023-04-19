<?php include('partials/menu.php'); ?>




<!--- main content section starts --->   
    <div class="main-content ">
<div class="wrapper">
   </div>
</div>

   <div class="main-content ">
    <div class="wrapper2">
    <h2 style="margin-left:30px; color:navy; font-weight:bold; margin-bottom:10px;">Manage Order</h2>
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
                          <th>Food and <br>Restaurant<br>details</th>
                          <th>Total</th>
                          <th>Order date and<br>Status</th>
                          <th>Customer<br> details</th>
                          <th>Actions</th>


                          <?php
                            
                            //Query to get all the data in category_rest table

                           $sql = "SELECT * FROM basket_rest ORDER BY id DESC";

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
                                   $rest_name=$rows['rest_name'];
                                   $rest_address=$rows['rest_address'];
                                   $rest_district=$rows['rest_district'];
                                   $rest_number=$rows['rest_number'];
                                   $price=$rows['price'];
                                   $qty=$rows['qty'];
                                   $total=$rows['total'];
                                   $order_date=$rows['order_date'];
                                   $status=$rows['status'];
                                   $cust_name=$rows['cust_name'];
                                   $cust_contact=$rows['cust_contact'];
                                   $cust_email=$rows['cust_email'];
                                   $cust_address=$rows['cust_address'];
                                   $is_pet=$rows['is_pet'];
                              

                                   ?>


                        </tr>

                        <tr>
                        <td><?php echo $sn++; ?>.</td>
                          <td>
                                <span><?php echo "<div class='f-details3'>Food : ".$food."</div>"; ?></span><br>
                                <span><?php echo "<div class='f-details1'>Restaurant name: <br>".$rest_name.",</div>"; ?></span><br>
                                <span><?php echo "<div class='f-details2'>Restaurant address :<br> ".$rest_address."</div>"; ?><span><br>
                                <span><?php echo "<div class='f-details3'>Restaurant district :<br> ".$rest_district."</div>"; ?></span><br>
                                <span><?php echo "<div class='f-4'>Restaurant Mobile number : <br>".$rest_number.".</div>"; ?></span><br>
                          </td>
                          <td>
                                 <span><?php echo "Price:<br> ".$price."</div>"; ?></span><br><br>
                                <span><?php echo "Quantity:<br>".$qty."</div>"; ?><span><br><br>
                                <span><?php echo "Total Price: ".$total."</div>"; ?></span><br>

                          </td>
                          <td >
                          <span><?php echo $order_date; ?></span><br><br>
                          <span>
                           <?php 
                                     //ordered, delivered,on delivery, csncelled
                                     if($status==="Ordered"){
                                       echo "<label style='color:#48dbfb;'>$status</label>";
                                     }
                                     elseif($status=="On Delivery"){
                                       echo "<label style='color:#ffa801;'>$status</label>";

                                     }
                                     elseif($status=="Delivered"){
                                       echo "<label style='color:#32ff7e;'>$status</label>";
                                     }
                                     elseif($status=="Cancelled"){
                                       echo "<label style='color:red;'>$status</label>";
                                     }
                           
                           ?></span>
                          </td>

                          <td><span><?php echo "<div class='f-details1'>Customer name: <br>".$cust_name.",</div>"; ?></span><br>
                          <a href="mailto:<?php echo $cust_email;?>"><span><?php echo "<div class='f-details2'>Customer email : <br>".$cust_email.",</div>"; ?><span></a> <br>
                                <span><?php echo "<div class='f-details3'>Customer address : <br>".$cust_address.",</div>"; ?></span><br>
                                <span><?php echo "<div class='f-4'>Customer Mobile number : <br>".$cust_contact.",</div>"; ?></span><br>
                                <span><?php echo "<div class='f-details2'>Pet (dog) : ".$is_pet.".</div>"; ?></span><br>

                           </td>
                           <td>
                           <span> <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/update-order.php?id=<?php echo $id; ?>" class="btn-secondary1" style="margin- ">Update Order</a></span>
                                       
                           <?php


                           }
                        }
                        else
                         {

                           //we have no data in database


                           ?>

                             <tr>
                             <td>  <div class="error">No Food Added    <strong>X</strong></div></td>
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