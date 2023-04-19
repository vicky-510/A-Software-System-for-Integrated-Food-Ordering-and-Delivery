<?php include('partials/menu.php'); ?>




<!--- main content section starts --->   
    <div class="main-content ">
<div class="wrapper">
   </div>
</div>

   <div class="main-content ">
    <div class="wrapper">
    <h2 style="margin-left:0px; color:navy; font-weight:bold; margin-bottom:10px;">Manage Admin</h2>
              
         <br/>  
             
         <?php
            if(isset($_SESSION['add']))
            {
                   echo $_SESSION['add'];//display msg
                   unset($_SESSION['add']);//remove msg
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
            if(isset($_SESSION['user-not-found']))
            {
                  echo $_SESSION['user-not-found'];//display msg
                  unset($_SESSION['user-not-found']);//remove msg
            }
             if(isset($_SESSION['pwd-not-match']))
             {
                  echo $_SESSION['pwd-not-match'];//display msg
                  unset($_SESSION['pwd-not-match']);//remove msg
             }
             if(isset($_SESSION['change-pwd']))
              {
                   echo $_SESSION['change-pwd'];//display msg
                  unset($_SESSION['change-pwd']);//remove msg
              }
         
         ?>

                  <!-- Button to add admin-->
                  <a href="<?php echo SITEURL; ?>Back-end/Home-food/admin/add-admin.php" class="btn-primary"> Add Admin</a>
                  </br>
                  </br>
                    <table class="tbl-full">
                        <tr>
                          <th>S.No</th>
                          <th>Full name</th>
                          <th>Username</th>
                          <th>Actions</th>
                        </tr>
                                  
                        <?php 
                             //query to call all admin
                             $sql = "SELECT * FROM admin_home";
                             // execute the query
                             $res = mysqli_query($conn,$sql);

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
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    ?>
                                 <tr>
                                    <td><?php echo $sn++; ?>.</td>
                                     <td><?php echo $full_name; ?></td>
                                    <td><?php echo $username; ?></td>
                                    <td>
                                     <a href="<?php echo SITEURL; ?>Back-end/Home-food/admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary1"> Change Password</a>
                                     <a href="<?php echo SITEURL; ?>Back-end/Home-food/admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">  Update Admin</a>
                                     <a href="<?php echo SITEURL; ?>Back-end/Home-food/admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">  Delete Admin</a>
                                    </td>
                                    </tr>

                                    

                                    <?php


                                 }
  

                              } else{
                                      // we don't hava data in database

                                      ?>

                                      <tr>
                                        <td>  <div class="error">No Admin Added    <strong>X</strong></div></td>
                                      </tr>
       
                                     <?php
       

                              }

                             }

                        ?>


                    </table>
                     <!-- Button to add admin-->
                  </br>
                  </br>
                  </br>
                  </br>

                  <h2 style="margin-left:0px; color:navy; font-weight:bold; margin-bottom:10px;">Home Made Details for Verification:</h2>

                    <table class="tbl-full">
                        <tr>
                          <th>Title</th>
                          <th>Home Made Registration Information</th>

                        </tr>


                       
                                <tr>
                                   <td style="padding:1%;">  </td>
                                    <td style="color:#32ff7e; font-weight:500;">Link: <a href="https://docs.google.com/spreadsheets/d/14xiDI9c757JdECcwvkvYN31DYG7-7KWaKL3bkV75Dfk/edit?usp=sharing" style="color:orange;">https://docs.google.com/spreadsheets/d/14xiDI9c757JdECcwvkvYN31DYG7-7KWaKL3bkV75Dfk/edit?usp=sharing</a></td>
                                   <tr>

                                   


                    </table>
                    </br>
                  </br>


                                   


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