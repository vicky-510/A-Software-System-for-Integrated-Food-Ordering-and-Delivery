<?php include('partials/menu.php'); ?>




<!--- main content section starts --->   
    <div class="main-content ">
<div class="wrapper">
   </div>
</div>

   <div class="main-content ">
    <div class="wrapper2">
    <h2 style="margin-left:30px; color:navy; font-weight:bold; margin-bottom:10px;">Manage Reservation</h2>
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
            
    
                    <table class="tbl-full">
                        <tr>
                          <th>S.No</th>
                          <th>Food and <br>Restaurant<br>details</th>
                          <th>Reservation<br>date</th>
                          <th>Other<br>details</th>
                          <th>Status</th>
                          <th>Customer details</th>
                          <th>Actions</th>


                          <?php
                            
                            //Query to get all the data in category_rest table

                           $sql = "SELECT * FROM reservation ORDER BY id DESC";

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
                                   $title=$rows['title'];
                                   $rest_name=$rows['rest_name'];
                                   $table_count=$rows['table_count'];
                                   $time_date=$rows['time_date'];
                                   $person_count=$rows['person_count'];
                                   $cust_name=$rows['cust_name'];
                                   $cust_number=$rows['cust_number'];
                                   $cust_email=$rows['cust_email'];
                                   $status=$rows['status'];                              

                                   ?>


                        </tr>

                        <tr>
                        <td><?php echo $sn++; ?>.</td>
                          <td>
                                <span><?php echo "<div class='f-details3'>Food : ".$title."</div>"; ?></span><br>
                                <span><?php echo "<div class='f-details1'>Restaurant name: <br>".$rest_name.",</div>"; ?></span><br>
                                
                          </td>
                          <td >
                          <span><?php echo $time_date; ?></span><br><br>
                          <span>
                          
                          <td>
                                 <span><?php echo "No.of.table: ".$table_count."</div>"; ?></span><br><br>
                                <span><?php echo "No.of.person:".$person_count."</div>"; ?><span><br><br>

                          </td>
                          <td>
                           <?php 
                                     //ordered, delivered,on delivery, csncelled
                                     if($status==="Accepted"){
                                       echo "<label style='color:#32ff7e;'>$status</label>";
                                     }
                               
                                     elseif($status=="Rejected"){
                                       echo "<label style='color:red;'>$status</label>";
                                     }
                           
                           ?></span>
                          </td>

                          <td><span><?php echo "<div class='f-details1'>Customer name: <br>".$cust_name.",</div>"; ?></span><br>
                          <a href="mailto:<?php echo $cust_email;?>"><span><?php echo "<div class='f-details2'>Customer email : <br>".$cust_email.",</div>"; ?><span></a> <br>
                                <span><?php echo "<div class='f-4'>Customer Mobile number : <br>".$cust_number.",</div>"; ?></span><br>

                           </td>
                           <td>
                           <span> <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/update-reservation.php?id=<?php echo $id; ?>" class="btn-secondary1" style="margin:25px;">Update Reservation</a></span>
                                       
                           <?php


                           }
                        }
                        else
                         {

                           //we have no data in database


                           ?>

                             <tr>
                             <td>  <div class="error">No Reservation Added    <strong>X</strong></div></td>
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