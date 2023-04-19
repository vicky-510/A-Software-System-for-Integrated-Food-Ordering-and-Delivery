<?php include('partials/menu.php'); ?>




<!--- main content section starts --->   
    <div class="main-content ">
<div class="wrapper">
   </div>
</div>

   <div class="main-content ">
    <div class="wrapper2">
    <h2 style="margin-left:0px; color:navy; font-weight:bold; margin-bottom:10px;">Manage Food</h2>
    <br/>

                    <?php

                    if(isset($_SESSION['add']))
                    {
                     echo $_SESSION['add'];//display msg
                     unset($_SESSION['add']);//remove msg
                     } 
                     if(isset($_SESSION['upload']))
                     {
                      echo $_SESSION['upload'];//display msg
                      unset($_SESSION['upload']);//remove msg
                       }

                       if(isset($_SESSION['remove']))
                        {
                         echo $_SESSION['remove'];//display msg
                         unset($_SESSION['remove']);//remove msg
                        }
                        if(isset($_SESSION['delete']))
                        {
                         echo $_SESSION['delete'];//display msg
                         unset($_SESSION['delete']);//remove msg
                        }
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
                     
                     ?>             
    
    
    
    
    
    <!-- Button to add admin-->
                  <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/add-food.php" class="btn-primary-f"> Add Food</a>
                  </br>
                  </br>
                    <table class="tbl-full">
                        <tr>
                          <th>S.No</th>
                          <th>Food<br> title</th>
                          <th>Image <br>name</th>
                          <th>Restaurant <br>details</th>
                          <th>Price</th>
                          <th>Featured</th>
                          <th>Active</th>
                          <th>Actions</th>
                        </tr>

                     
                        <?php
                            
                            //Query to get all the data in category_rest table

                           $sql = "SELECT * FROM food_rest";

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
                                 
                                   $id =$rows['id'];
                                   $title=$rows['title'];
                                   $image_name=$rows['image_name'];
                                   $rest_name=$rows['rest_name'];
                                   $rest_address=$rows['rest_address'];
                                   $rest_district=$rows['rest_district'];
                                   $rest_number=$rows['rest_number'];
                                   $price=$rows['price'];
                                   $featured=$rows['featured'];
                                   $active=$rows['active'];

                                   ?>
                                <tr>
                                   <td><?php echo $sn++; ?>.</td>
                                    <td><?php echo $title; ?></td>


                                   <td>

                                    <?php 
                                    
                                    //check whether the image name is availbale or not
                                    if($image_name!="")
                                    {
                                        
                                       //Display the image 
                                       ?>
                                            
                                          <img src="<?php echo SITEURL; ?>Front-end/images/food/<?php echo $image_name?>" width="100px" style="margin-right:5px">

                                       <?php


                                    }
                                    else
                                    {
                                       //Display the Message
                                        echo "<div class='error'>Image not Added    <strong>X</strong></div>";

                                    }
                                    ?>
                                 </td>


                                 <td>
                                         <span><?php echo "<div class='f-details1'>Restaurant name: ".$rest_name.",</div>"; ?></span><br>
                                         <span><?php echo "<div class='f-details2'>Restaurant address :<br><br> ".$rest_address."</div>"; ?><span><br>
                                          <span><?php echo "<div class='f-details3'>Restaurant district : ".$rest_district."</div>"; ?></span><br>
                                          <span><?php echo "<div class='f-4'>Restaurant Mobile number : ".$rest_number.".</div>"; ?></span><br>

                                 </td>
                                   <td><?php echo "₹".$price; ?></td>


                                   <td><?php echo $featured; ?></td>
                                   <td><?php echo $active; ?></td>
                                   <td>
                                    <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/update-food.php?id=<?php echo $id; ?>" class="btn-secondary1" style="margin-left:10px;">Update Food</a>
                                        <br>
                                        <br>
                                    <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/delete-food.php?id=<?php echo $id; ?>" class="btn-danger1" style="margin-left:10px;">  
                                    Delete Food</a>
                                   </td>
                                   </tr>

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
                          ?>


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