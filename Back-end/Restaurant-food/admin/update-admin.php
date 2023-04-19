<?php include('partials/menu.php'); ?>



<!--- main content section starts --->   
<div class="main-content ">
<div class="wrapper">


<div class="card1">
		<div class="card-image1">	
			<h2 class="card-heading1">
            Update Admin details!
            <small></small>
			</h2>
		</div>

       <?php

          //get the id of selected admin
          $id = $_GET['id'];

          //create a sql query to get the details
          $sql = "SELECT * FROM admin_rest WHERE id=$id";


          //execute the query
          $res = mysqli_query($conn,$sql);

          //check whether the query is executed or not
          if($res==true)
          {

            //check whether the data isavailable or not
            $count =mysqli_num_rows($res);
            
            //check whether we have admin data or not
            if($count==1){

                //get the details
                $row = mysqli_fetch_assoc($res);

                $full_name = $row['full_name'];
                $username = $row['username'];


            }
            else
            {

                //redirect to manage Admin page
                header('location:'.SITEURL.'Back-end/Restaurant-food/admin/manage-admin.php');
            }

          }

       ?>





	   <form class="card-form1" action="" method="post">

			<div class="input">
                
				<input type="text" class="input-field" name="full_name" value="<?php echo $full_name?>" required placeholder="Full name"/>
			</div>

			<div class="input">
                        <input type="text" class="input-field" name="username"  value="<?php echo $username?>" required placeholder="Username"/>
             </div>


            <div class="action1">
				<button class="action-button1" type="submit" name="submit">Update Admin</button>
			</div>		
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

   $full_name = mysqli_real_escape_string($conn,$_POST['full_name']);
   $username =mysqli_real_escape_string($conn,$_POST['username']);


   // sql query to sava the data into database
   $sql = "UPDATE admin_rest SET 
    
	      full_name = '$full_name',
		    username ='$username' WHERE id ='$id'
   ";

   //execute query and save data in to database
   $res = mysqli_query($conn,$sql) or die(mysqli_error());

   //check whether the data is inserted or not in db
   if($res==TRUE){
     //echo "inserted";
	 //create a session variable to display msg
	 $_SESSION['update'] = "<div class='success'>Admin details Updated Successfully   <strong>X</strong></div>";
	 
	 //redirect to manage admin
	 header("location:".SITEURL.'Back-end/Restaurant-food/admin/manage-admin.php');

   }else{
     //echo "not inserted";
	 //create a session variable to display msg
	 $_SESSION['update'] = "<div class='error'>Failed to update Admin details    <strong>X</strong></div>";
	 
	 //redirect to manage admin
	 header("location:".SITEURL.'Back-end/Restaurant-food/admin/manage-admin.php');

   }
}



?>


<?php include('partials/footer.php'); ?>