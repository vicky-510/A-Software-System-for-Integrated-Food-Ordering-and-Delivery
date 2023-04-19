<?php 

      include('../Front-end/config/constants.php'); 
      //include('partials/login-check.php');
     ob_start();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - chef Dashboard</title>
    <link rel="stylesheet" href="<?php echo SITEURL; ?>Back-end/Restaurant-food/css/admin.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
    rel="stylesheet">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"
    rel="javascript"> 
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    rel="javascript">
   


</head>

<body>

<!--- menu section starts --->
<div class="menu">
   <div class="wrapper">
    <ul>
     <li><a href="<?php echo SITEURL; ?>" style="color:orange; margin-right:220px;; font-size:19px">Chef Dashboard</a></li>
  
        <li><a href="<?php echo SITEURL; ?>chef/">Profile</a></li>
        <li><a href="<?php echo SITEURL; ?>chef/manage-notification.php">Work Notification</a></li>
        <li><a href="<?php echo SITEURL; ?>chef/logout-chef.php">Logout</a></li>


    </ul>
   </div>

 
</div>
<!--- menu section ends --->

<!--- main content section starts --->

<div class="main-content ">

<div class="wrapper">
<br>
<br>

<?php
if(isset($_SESSION['login-chef']))
      {
         echo $_SESSION['login-chef'];
         unset($_SESSION['login-chef']);
      }
      if(isset($_SESSION['upload']))
      {
       echo $_SESSION['upload'];//display msg
       unset($_SESSION['upload']);//remove msg
     }
     if(isset($_SESSION['update']))
     {
      echo $_SESSION['update'];//display msg
      unset($_SESSION['update']);//remove msg
    }
       
  ?>



  
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">

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
                 $sql = "SELECT * FROM chef_hire WHERE username='$username'";                 

                 //Execute the query
                 $res = mysqli_query($conn, $sql);                 

                 //Check whether the query was successful
                 if($res)
                 {
                     //Query executed successfully, fetch the user details
                     $row = mysqli_fetch_assoc($res);
                     $id=$row['id'];
                     $username = $row['username'];
                     $pwd = $row['pwd'];
                     $name=$row['name'];
                     $age=$row['age'];
                     $image_name=$row['image_name'];
                     $salary_work=$row['salary_work'];
                     $salary_function=$row['salary_function'];
                     $skills=$row['skills'];
                     $current_image = $row['image_name'];
                     $experience = $row['experience'];
                     $contact = $row['contact'];
                     $email = $row['email'];
                     $address = $row['address'];
                 }
                                

        
        else{
            //redirect to manage Admin page
            header('location:'.SITEURL.'chef/login-chef.php');
        }

       ?>

           <form action="" method="post" enctype="multipart/form-data" >

            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                
            <img class="rounded-circle mt-5" width="150px" src="<?php echo SITEURL; ?>Front-end/chef/<?php echo $current_image?>"><br>
            <input type="file" name="image" class="form-control"value="<img src='<?php echo SITEURL; ?>Front-end/chef/<?php echo $current_image?>'>" required>
            <span class="font-weight-bold"><?php echo $name; ?></span>
            <span class="text-black-50"><?php echo $email; ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile details</h4>
                </div>


                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" name="name" value="<?php echo $name; ?>"></div>
                    <div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" name="age" value="<?php echo $age; ?>"></div>
                    <div class="col-md-12"><label class="labels">Skills</label><input type="text" class="form-control" name="skills" value="<?php echo $skills; ?>"></div>
                    <div class="col-md-12"><label class="labels">Experience (in years)</label><input type="text" class="form-control" name="experience" value="<?php echo $experience; ?>"></div>
                    <div class="col-md-12"><label class="labels">Contact</label><input type="text" class="form-control" name="contact"  value="<?php echo $contact; ?>"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" name="email" value="<?php echo $email; ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" name="address" value="<?php echo $address; ?>"></div>
                    </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Expected salary(in month)</label><input type="text" class="form-control" name="salary_work" value="<?php echo $salary_work; ?>"></div>
                    <div class="col-md-6"><label class="labels">Function order(single day)</label><input type="text" class="form-control" name="salary_function" value="<?php echo $salary_function; ?>"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span></span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Account details</span></div><br>
                <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="experience" name="username" value="<?php echo $username; ?>"></div> <br>
                <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="" name="pwd1" >
                <br>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
           
                <br>
                <div class="col-md-12"> <input type="submit" value="Update" name="submit" class="button"  style=" background-color: #8e44ad;
                                                color: rgb(255, 255, 255); 
                                                padding: 4px 8px;
                                                border-radius: 5px; margin-left: 5px; font-weight:300;"></div>
            </div>
             </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</form>






<?php 


     //check whether the submit button is clicked or not
	 if(isset($_POST['submit']))	 {
		//echo"clicked";
            
		//get the value from category form
        $username =  mysqli_real_escape_string($conn,$_POST['username']);
        $raw_pwd1 = md5($_POST['pwd1']);  ///password encryption with md5
        $pwd1 = mysqli_real_escape_string($conn,$_POST['raw_pwd1']);  ///password encryption with md5
        $name =  mysqli_real_escape_string($conn,$_POST['name']);
        $age =  mysqli_real_escape_string($conn,$_POST['age']);
        $salary_work =  mysqli_real_escape_string($conn,$_POST['salary_work']);
        $salary_function =  mysqli_real_escape_string($conn,$_POST['salary_function']);
        $skills =  mysqli_real_escape_string($conn,$_POST['skills']);               
        $experience =  mysqli_real_escape_string($conn,$_POST['experience']);
        $contact =  mysqli_real_escape_string($conn,$_POST['contact']);
        $email =  mysqli_real_escape_string($conn,$_POST['email']);
        $address =  mysqli_real_escape_string($conn,$_POST['address']);


		

    		  //check whether the image is selected or not
        //print_r($_FILES['img']);
        //die();//break the code here
        if(isset($_FILES['image']['name']))
        {
          //upload the file
          //get the value from form

          //to upload image and set the image_name,source path and destination path
           $image_name  = $_FILES['image']['name'];

           //auto rename our image
           //ge the extension of our image (jpg,jpeg,png,gif,etc) e.g foodiesfood1.jpg

           $ext = end(explode('.',$image_name));
            
           //
           $image_name = "Food_Category_".rand(00000,99999).'.'.$ext;

           $source_path = $_FILES['image']['tmp_name'];
           $destination_path ="../Front-end/chef/".$image_name;

           //finally upload the image
           $upload = move_uploaded_file($source_path, $destination_path);

           //check whether the image is uplaoded or not
           //and if the not uploaded then will stop the process and redirect with error msg

           if($upload==false){

            //create a session variable to display msg
	         $_SESSION['upload'] = "<div class='error'>Failed to  upload image    <strong>X</strong></div>";
	 
	         //redirect to manage admin
	          header("location:".SITEURL.'chef/index.php');

            //stop the process
            die();
           }
        
        }
        else{
          //set the default value (or) don't upload image and set the image_name as blank
          $image_name  = "";
    
        }
    
         
    

		//create a sql to insert category into database
		      $sql2="UPDATE chef_hire SET 
		
            username = '$username',
            pwd = '$pwd1',
            name='$name',
            age='$age',
            image_name='$image_name',
            salary_work='$salary_work',
            salary_function='$salary_function',
            skills='$skills',
            experience='$experience',
            contact='$contact',
            email='$email',
            address='$address' WHERE id ='$id'
		      ";

          //execute the query and save in database
          $res2 = mysqli_query($conn, $sql2);

		  //check whether the query is executed or not

		  if($res2==true){

			//query execute and category added
			 //echo "inserted";
	        //create a session variable to display msg
	        $_SESSION['update'] = "<div class='success'>Details Updated Successfully   <strong>X</strong></div>";
	 
	         //redirect to manage admin
	         header("location:".SITEURL.'chef/index.php');

             }else{
             //echo "not inserted";
	         //create a session variable to display msg
	         $_SESSION['update'] = "<div class='error'>Failed to  Update details    <strong>X</strong></div>";
	 
	         //redirect to manage admin
	          header("location:".SITEURL.'chef/index.php');

             }

	 } 
	 else{

		//echo"not clicked";
	 }

  ?>




<style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

.main-content{
    background-color:#95afc0;

}

.wrapper{
    padding: 1%;
    width:80%;
    margin: 0 auto;
}
    </style>



<?php include('partials/footer.php'); ?>