<?php include('partials/menu.php'); ?>



<!--- main content section starts --->   
<div class="main-content ">
<div class="wrapper">


<div class="card1">
		<div class="card-image1">	
			<h2 class="card-heading1">
            Update your Password!
            <small></small>
			</h2>
		</div>

        <?php
        if(isset($_GET['id']))
        {
              $id = $_GET['id'];
        }
        
        ?>








        <form class="card-form1" action="" method="post">

<div class="input">
    
    <input type="password" class="input-field" name="current_password"  required placeholder="Old Password"/>
</div>

<div class="input">
            <input type="password" class="input-field" name="new_password"   required placeholder="New Password"/>
 </div>

 
<div class="input">
            <input type="password" class="input-field" name="confirm_password"   required placeholder="Confirm Password"/>
 </div>
 <div class="input">
            <input type="hidden" class="input-field" name="id" value="<?php echo $id; ?>"/>
 </div>


<div class="action1">
    <button class="action-button1" type="submit" name="submit">Update</button>
</div>	
<br>

</div>

</form>

</div>
</div>


</div>
</div>

        <?php

           //check whether the submit button is clicked or not
                                              
           if(isset($_POST['submit']))
            {
               // button clicked
               // echo "Button clicked";
               
               //get data from form
               $id=$_POST['id'];
               $current_password = md5($_POST['current_password']);
               $new_password = md5($_POST['new_password']);
               $confirm_password = md5($_POST['confirm_password']);

               //check whether the user with current id and current password exists or not

               $sql = "SELECT * FROM admin_home 
               WHERE id=$id AND pwd='$current_password'

               ";

               //execute the query
               $res = mysqli_query($conn, $sql);

               if($res==true)
               {
                    //check whether the data is available or not

                    $count = mysqli_num_rows($res);

                    if($count==1){

                             //user exists and password canbe changed
                             if($new_password==$confirm_password)
                             {

                                $sql2 = "UPDATE admin_home SET
                                pwd='$new_password' WHERE id=$id
                                ";
                              //execute the query
                              $res2 = mysqli_query($conn,$sql2);
                             
                       //check whether the query is executed or not
                       if($res==true)
                       {        
                        //user not exists and so password can't be changed
                        $_SESSION['change-pwd'] = "<div class='success'>Password changed Successfully   <strong>X</strong></div>";
                        //redirect the user
                        header("location:".SITEURL.'Back-end/Home-food/admin/manage-admin.php');

                       }
                       else
                       {

                        //user not exists and so password can't be changed
                        $_SESSION['change-pwd'] = "<div class='error'>Failed to change password. try again later <strong>X</strong></div>";
                        //redirect the user
                        header("location:".SITEURL.'Back-end/Home-food/admin/manage-admin.php');

                       }


                 }
                             else{
                                    //user not exists and so password can't be changed
                                  $_SESSION['pwd-not-match'] = "<div class='error'>Password did not match   <strong>X</strong></div>";
                                    //redirect the user
                                    header("location:".SITEURL.'Back-end/Home-food/admin/manage-admin.php');

                             }


                    }
                    else{

                             //user not exists and so password can't be changed
                             $_SESSION['user-not-found'] = "<div class='error'>User Not Found   <strong>X</strong></div>";
                             //redirect the user
                             header("location:".SITEURL.'Back-end/Home-food/admin/manage-admin.php');


                    }

               }

               //check whether the new password and confirm password are same

               //change password if all above is true



            }


         ?>


<?php include('partials/footer.php'); ?>