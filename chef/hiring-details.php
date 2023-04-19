<?php include('../Back-end/config/constants.php');
ob_start();

 ?>





<?php

  //get the id whether food is set or not

  if(isset($_GET['chef_id']))
  {

    //GET THE FOOD ID AND DETAILS OF THE SELECTED FOOD
    $chef_id = $_GET['chef_id'];
    


    //get the details of the selected food

    $sql = "SELECT * FROM chef_hire WHERE id=$chef_id";

        //execute the query

    $res = mysqli_query($conn, $sql);

    //count the rows
    $count = mysqli_num_rows($res);

    if($count == 1)
    {

        // we have data
        // GET THE DATA FROM DATABASE
        $row = mysqli_fetch_assoc($res);
             
        
        
        $new_id = $row['id'];
             
    }
   


  }
 

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
                    
                
                    <a href="<?php echo SITEURL; ?>chef/login-chef.php"><button class="button" 
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
           <h2 style="color: #182C61;">Hire /Book a Chef<br><br> 
</h2>

        </div>
        
                  <?php

                       if(isset($_SESSION['update']))
                      {
                       echo $_SESSION['update'];//display msg
                       unset($_SESSION['update']);//remove msg
                     }
                     if(isset($_SESSION['hire']))
                     {
                      echo $_SESSION['hire'];//display msg
                      unset($_SESSION['hire']);//remove msg
                    }
                   
                     
                     ?> 
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

   




    

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-type1" >
        <div class="container ">
      

                 <div class="food-type-box3 ">
                
                    <div class="" style="color: black;  border-radius: 5px; ">
                        
                        <h4 id="head" class="text-center" style="color: rgb(255, 255, 255);  background-color:  rgb(255, 0, 81); height: 30px; padding:8px;">Enter your details</h4>
                        <br>  

                        
                        <form action="" method="post" >

                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Name :</label><br><br>
                        
		                <input type="text"  name="name" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Restaurant name(if any) :</label><br><br>
                        
		                <input type="text"  name="rest_name" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                      
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Email :</label><br><br>
                        
		                <input type="email"  name="email" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                        <label   style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Phone number :</label><br><br>
                        
		                <input type="number"  name="phone" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>
                        
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Address :</label><br><br>
                        
		                <input type="text"  name="address" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                        
		                <label   style="color: rgb(255, 255, 255); border-radius: 5px;  margin-left:35px; margin-right:56px; color: navy; font-weight:bold; ">Hiring type (work/function) :</label><br><br>

		                <input type="text"  name="hire_type" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>
                       
                        <label style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Salary for work (per month/NA) :</label><br><br>

                        <input type="text"  name="salary_work" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                         <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Salary for single function(per day/NA) :</label><br><br>
		               
                         <input type="text"  name="salary_function" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>


		                <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:26px; color:  #1B1464; margin-left:36px; font-weight:bold;">No.of.days of function (else NA) :</label><br><br>
		                <input type="text"  name="no_of_days_function" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>

                      <label   style="color: rgb(255, 255, 255); border-radius: 5px;  margin-left:35px; margin-right:56px; color: navy; font-weight:bold; ">Function date :</label><br><br>
                      <input type="text" name="function_date" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>

                      

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
   $name =  mysqli_real_escape_string($conn,$_POST['name']);
   $rest_name =  mysqli_real_escape_string($conn,$_POST['rest_name']);
   $email =  mysqli_real_escape_string($conn,$_POST['email']);
   $phone =  mysqli_real_escape_string($conn,$_POST['phone']);
   $address =  mysqli_real_escape_string($conn,$_POST['address']);
   $salary_work =  mysqli_real_escape_string($conn,$_POST['salary_work']);
   $salary_function =  mysqli_real_escape_string($conn,$_POST['salary_function']);
   $hire_type =  mysqli_real_escape_string($conn,$_POST['hire_type']);               
   $no_of_days_function =  mysqli_real_escape_string($conn,$_POST['no_of_days_function']);
   $function_date =  mysqli_real_escape_string($conn,$_POST['function_date']);
   $chef_id=$new_id;
  


   //create sql to store data

   $sql2 = "INSERT INTO hire_details SET 
            name = '$name',
            rest_name = '$rest_name',
            email='$email',
            phone='$phone',
            address='$address',
            salary_work='$salary_work',
            salary_function='$salary_function',
            hire_type='$hire_type',
            no_of_days_function='$no_of_days_function',
            function_date='$function_date',
            chef_id=$chef_id
            

   ";

   //execute the query
   $res2 = mysqli_query($conn, $sql2);

   //check whether the query executed or not
   if($res2 == true)
   {
          
       //query executed successfully
       $_SESSION['hire'] = "<div class='success'>your response submitted Successfully  <strong>X</strong></div>";
       header("location:".SITEURL.'hire-chef.php');


   }
   else
   {

       //query not executed 
       $_SESSION['hire'] = "<div class='error'>failed to submit response   <strong>X</strong></div>";
       header("location:".SITEURL.'chef/hiring-details.php');



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