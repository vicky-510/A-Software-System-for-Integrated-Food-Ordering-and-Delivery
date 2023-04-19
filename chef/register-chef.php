<?php include('../Back-end/config/constants.php');
ob_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../Front-end/css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="../Front-end/images/foodies.gif" alt="Restaurant Logo" class="img-responsive" >
                </a>
                
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>" >Home</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo SITEURL; ?>Add-rest_home-made.php" >Add a restaurant</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>hire-chef.php" style="color: orange;">Hire a Chef</a>
                        </li>
                        <li>
                        <a href="<?php echo SITEURL; ?>train-service.php" >Train service</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    
                
                    <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/login_rest/login_user_rest.php"><button class="button" 
                        style=" background-color: #182C61; 
                            color: rgb(255, 255, 255); 
                            padding: 12px 24px;
                            border-radius: 5px; margin-left: 20px;">Login</button></a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
    

     <!-- fOOD sEARCH Section Starts Here -->
     <section class="food-search5 text-center">
        <div class="container">
           <h2 style="color: #182C61;">Chef Registration<br><br> 
</h2>

        </div>
        
                  <?php

                       if(isset($_SESSION['update']))
                      {
                       echo $_SESSION['update'];//display msg
                       unset($_SESSION['update']);//remove msg
                     }
                     if(isset($_SESSION['register']))
                     {
                      echo $_SESSION['register'];//display msg
                      unset($_SESSION['register']);//remove msg
                    }
                    if(isset($_SESSION['upload']))
                    {
                     echo $_SESSION['upload'];//display msg
                     unset($_SESSION['upload']);//remove msg
                   }
                     
                     ?> 
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

   




    

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-type1" >
        <div class="container ">
      

                 <div class="food-type-box3 ">
                
                    <div class="" style="color: black;  border-radius: 5px; ">
                        
                        <h4 id="head" class="text-center" style="color: rgb(255, 255, 255);  background-color:  rgb(255, 0, 81); height: 30px; padding:8px;">  Enter your details</h4>
                        <br>  

                        
                        <form action="" method="post" enctype="multipart/form-data" >

                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Username :</label><br><br>
                        
		                <input type="text"  name="username" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Password :</label><br><br>
                        
		                <input type="text"  name="pwd" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                      
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Chef name :</label><br><br>
                        
		                <input type="text"  name="name" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                        <label   style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Chef age :</label><br><br>
                        
		                <input type="number"  name="age" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

		                <label style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Upload image :</label><br><br>

                        <input type="file" name="image" required="" style="width:80%;  padding:5px;  margin-left:36px; color: black;" required=""><br><br>
                       
                        <label style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Expected salary for work (per month) :</label><br><br>

                        <input type="number"  name="salary_work" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                         <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Expected salary for single function :</label><br><br>
		               
                         <input type="number"  name="salary_function" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

		                <label   style="color: rgb(255, 255, 255); border-radius: 5px;  margin-left:35px; margin-right:56px; color: navy; font-weight:bold; ">Skills :</label><br><br>
		                <input type="text"  name="skills" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>

		                <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:26px; color:  #1B1464; margin-left:36px; font-weight:bold;">Experience (in years) :</label><br><br>
		                <input type="text"  name="experience" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>



                      <label   style="color: rgb(255, 255, 255); border-radius: 5px;  margin-left:35px; margin-right:56px; color: navy; font-weight:bold; ">Phone number :</label><br><br>
                      <input type="number" name="contact" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>

                      <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:26px; color:  #1B1464; margin-left:36px; font-weight:bold;">Email :</label><br><br>
                      <input type="text" name="email" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:35px;  background-color:  #ecf0f1;  color: black;" value=""><br><br>

                      <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:8px; margin-left:30px; color: navy; padding:5px; font-weight:bold;">Address :</label><br><br>
                      <input type="text"  name="address" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:35px;  background-color:  #ecf0f1;  color: black; " value=""><br><br>

                                                <br>
                                                <br>

		                <input type="submit" value="Submit" name="submit" class="button"  style=" background-color:  rgb(255, 0, 81);
                                                color: rgb(255, 255, 255); 
                                                padding: 12px 24px;
                                                border-radius: 5px; margin-left: 200px; font-weight:bold;">
                        

            	</form>

                     
                                           
                            

                        </div>  
                  
                </div> 
                <?php 

             

//check whether the submit button is clicked or not
if(isset($_POST['submit']))	 {
//echo"clicked";

//get the value from category form
   $username =  mysqli_real_escape_string($conn,$_POST['username']);
   $raw_pwd = md5($_POST['pwd']);  ///password encryption with md5
   $pwd =    mysqli_real_escape_string($conn,$raw_pwd);  ///password encryption with md5
   $name =  mysqli_real_escape_string($conn,$_POST['name']);
   $age =  mysqli_real_escape_string($conn,$_POST['age']);
   $salary_work =  mysqli_real_escape_string($conn,$_POST['salary_work']);
   $salary_function =  mysqli_real_escape_string($conn,$_POST['salary_function']);
   $skills =  mysqli_real_escape_string($conn,$_POST['skills']);               
   $experience =  mysqli_real_escape_string($conn,$_POST['experience']);
   $register_date =date("Y-m-d h:i:sa");
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

          if($image_name !=""){

           $ext = end(explode('.',$image_name));
            
           //
           $image_name = "Food-chef-".rand(0000,9999).'.'.$ext;

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
	          header("location:".SITEURL.'chef/register-chef.php');

            //stop the process
            die();
           }
          }
        }
        else{
          //set the default value (or) don't upload image and set the image_name as blank
          $image_name  = "";
    
        }
  
  

   //create sql to store data

   $sql2 = "INSERT INTO chef_hire SET 
            username = '$username',
            pwd = '$pwd',
            name='$name',
            age='$age',
            image_name='$image_name',
            salary_work='$salary_work',
            salary_function='$salary_function',
            skills='$skills',
            experience='$experience',
            register_date='$register_date',
            contact='$contact',
            email='$email',
            address='$address'
            

   ";

   //execute the query
   $res2 = mysqli_query($conn, $sql2);

   //check whether the query executed or not
   if($res2 = true)
   {
          
       //query executed successfully
       $_SESSION['register'] = "<div class='success'>Registration Successful  <strong>X</strong></div>";
       header("location:".SITEURL.'hire-chef.php');


   }
   else
   {

       //query not executed 
       $_SESSION['register'] = "<div class='error'>failed to register   <strong>X</strong></div>";
       header("location:".SITEURL.'chef/register-chef.php');



   }
   
}
else{
    

}
ob_end_flush();


?>
                


           
            <div class="clearfix"></div>
        </div>

           
    </section>
    <!-- Categories Section Ends Here -->
    <br>
    <br>




             

                   
             
             <br>
             <br>


    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">vignesh</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>