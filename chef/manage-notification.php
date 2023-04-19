<?php include('partials/menu.php'); ?>
<!--- main content section starts --->   
<div class="main-content ">
<div class="wrapper">
   </div>
</div>

   <div class="main-content ">
    <div class="wrapper2">
    <h2 style="margin-left:0px; color:navy; font-weight:bold; margin-bottom:10px;">Manage Notification</h2>
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

<?php 
                 //Check whether the user is logged in
                 if(!isset($_SESSION['user']))
                 {
                     //User not logged in, redirect to login page
                     header('location:'.SITEURL.'chef/login-chef.php');
                 }                 

                 //Get the username of the logged-in user
                 $username = $_SESSION['user']; 
                

                 //SQL query to fetch the user details from the database
                 $sql1 = "SELECT * FROM chef_hire WHERE username='$username'";                 

                 //Execute the query
                 $res1 = mysqli_query($conn, $sql1);                 

                 //Check whether the query was successful
                 if($res1)
                 {
                     //Query executed successfully, fetch the user details
                     $row1 = mysqli_fetch_assoc($res1);
                     $id=$row1['id'];
                    
                 }
                                

        
        else{
            //redirect to manage Admin page
            header('location:'.SITEURL.'chef/login-chef.php');
        }

       ?>

    <!-- Button to add admin-->
                  </br>
                  </br>
                    <table class="tbl-full">
                        <tr>
                          <th>S.No</th>
                          <th>Hiring person<br> details</th>
                          <th>Work <br>details</th>
                          <th>Function<br>details</th>
                        </tr>

                        <?php
                            
                            //Query to get all the data in category_rest table

                           $sql = "SELECT * FROM chef_hire
                           LEFT OUTER JOIN hire_details
                           ON chef_hire.id = hire_details.chef_id
                           WHERE chef_hire.id=$id

                           ";

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
                                 
                                   $name =$rows['name'];
                                   $rest_name=$rows['rest_name'];
                                   $email=$rows['email'];
                                   $phone=$rows['phone'];
                                   $address=$rows['address'];
                                   $salary_work=$rows['salary_work'];
                                   $salary_function=$rows['salary_function'];
                                   $hire_type=$rows['hire_type'];
                                   $no_of_days_function=$rows['no_of_days_function'];
                                   $function_date=$rows['function_date'];
                                 
                                   ?>

                               
<tr>
                                   <td><?php echo $sn++; ?>.</td>


                                 <td>
                                         <span><?php echo "<div class='f-details1'>Name: ".$name.",</div>"; ?></span><br>
                                         <a href="mailto:<?php echo $email;?>"> <span><?php echo "<div class='f-details2'>Email :<br> ".$email.",</div>"; ?><span><br></a>
                                          <span><?php echo "<div class='f-details3'>Phone no : ".$phone.",</div>"; ?></span><br>
                                          <span><?php echo "<div class='f-4'>Type : ".$hire_type.".</div>"; ?></span><br>

                                 </td>

                                 <td>
                                         <span><?php echo "<div class='f-details3'>Restaurant name: ".$rest_name.",</div>"; ?></span><br>
                                         <span><?php echo "<div class='f-details2'>Salary Per month for work  : ".$salary_work."</div>"; ?><span><br>
                                         
                                 </td>

                                 <td>
                                         <span><?php echo "<div class='f-details1'>Salary for function  : ".$salary_function.",</div>"; ?><span><br>
                                         <span><?php echo "<div class='f-details3'>No.of.Days function: ".$no_of_days_function.",</div>"; ?></span><br>
                                         <span><?php echo "<div class='f-4'>Function date: ".$function_date.".</div>"; ?></span><br>

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
                                 <td>  <div class="error">No Notification Received from Hiring Person    <strong>X</strong></div></td>
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


<!--- dummy section ends--->




<?php include('partials/footer.php'); ?>