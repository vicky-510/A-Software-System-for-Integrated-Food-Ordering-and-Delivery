<?php include('partials/menu.php'); ?>




<!--- main content section starts --->   
<div class="main-content ">
<div class="wrapper">


<div class="card1">
		<div class="card-image1">	
			<h2 class="card-heading1">
            Create an account for new Admin!
            <small></small>
			</h2>
		</div>
	   <form class="card-form1" action="" method="post">

			<div class="input">
                
				<input type="text" class="input-field" name="full_name"  required placeholder="Full name"/>
			</div>

			<div class="input">
                        <input type="text" class="input-field" name="username"  required placeholder="Username"/>
             </div>

            <div class="input">
            <input type="password" class="input-field" name="pwd"  required placeholder="Password"/>
			</div>

            <div class="action1">
				<button class="action-button1" type="submit" name="submit">Add Admin</button>
			</div>		
			</div>
			
		</form>
		
	</div>
</div>

      
   </div>
</div>


<?php include('partials/footer.php'); ?>

<?php
                                                          //DB Connection

//process the value from form and save it in database

//check whether the submit button is clicked or not


if(isset($_POST['submit']))
{
    // button clicked
  // echo "Button clicked";

  //get data from form

   $full_name = $_POST['full_name'];
   $username = $_POST['username'];
   $pwd = md5($_POST['pwd']);  ///password encryption with md5


   // sql query to sava the data into database
   $sql = "INSERT INTO admin_home SET
    
	      full_name = '$full_name',
		    username ='$username',
		    pwd ='$pwd' 
   ";

   //execute query and save data in to database
   $res = mysqli_query($conn,$sql) or die(mysqli_error());

   //check whether the data is inserted or not in db
   if($res==TRUE){
     //echo "inserted";
	 //create a session variable to display msg
	 $_SESSION['add'] = "<div class='success'>Admin Added Successfully   <strong>X</strong></div>";
	 
	 //redirect to manage admin
	 header("location:".SITEURL.'Back-end/Home-food/admin/manage-admin.php');

   }else{
     //echo "not inserted";
	 //create a session variable to display msg
	 $_SESSION['add'] = "<div class='error'>Failed to  Add Admin    <strong>X</strong></div>";
	 
	 //redirect to manage admin
	 header("location:".SITEURL.'Back-end/-food/admin/add-admin.php');

   }
}



?>