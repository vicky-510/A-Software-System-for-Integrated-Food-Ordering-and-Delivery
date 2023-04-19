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
                        <a href="<?php echo SITEURL; ?>Recipies.php" style="color: orange;">Recipies</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>Podcast.php" >Podcast</a>
                        </li>
                        <li>
                        <a href="<?php echo SITEURL; ?>Books.php" >Books</a>
                    </li>
                   
                    <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/login-rest.php"><button class="button" 
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
     <section class="food-search6 text-center">
        <div class="container">
           <h2 style="color: #182C61;">Add your Recipies in English 
           <br><br>

</h2>

        </div>
        
                  <?php

                       if(isset($_SESSION['update']))
                      {
                       echo $_SESSION['update'];//display msg
                       unset($_SESSION['update']);//remove msg
                     }
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
                   if(isset($_SESSION['no-category-found']))
                   {
                    echo $_SESSION['no-category-found'];//display msg
                    unset($_SESSION['no-category-found']);//remove msg
                  }
                     
                     ?> 
    </section>
    <!-- fOOD sEARCH Section Ends Here -->






    <?php
          if(isset($_GET['id']))
          {
          //get the id of selected admin
          $id = $_GET['id'];

          //create a sql query to get the details
          $sql = "SELECT * FROM recipies_eng WHERE id=$id";


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

                $title = $row['title'];
                $description = $row['description'];
                $rem_description=$row['rem_description'];
                $type=$row['type'];
                $timing=$row['timing'];
                $serving=$row['serving'];
                $ingredients=$row['ingredients'];
                $current_image = $row['image_name'];





            }else{

              $_SESSION['no-category-found'] = "<div class='error'>No Category found    <strong>X</strong></div>";

                //redirect to manage Admin page
                header('location:'.SITEURL.'Recipies.php');
            }

          }
        }
        else{
            //redirect to manage Admin page
            header('location:'.SITEURL.'Recipies.php');
        }
       ?>

   




    

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-type1" >
        <div class="container ">
      

                 <div class="food-type-box3 ">
                
                    <div class="" style="color: black;  border-radius: 5px; ">
                        
                        <h4 id="head" class="text-center" style="color: rgb(255, 255, 255);  background-color:  rgb(255, 0, 81); height: 30px; padding:8px;">  Enter your Recipies</h4>
                        <br>  

                        
                        <form action="" method="post" enctype="multipart/form-data" >

                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  "  >Food name: :</label><br><br>
                        
		                <input type="text"  name="title" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value="<?php echo $title; ?>" ><br><br>


                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  " >Preparing Methods (Enter the first half):</label><br><br>
                        
                        <textarea  name="description" maxlength="240"  cols="30" rows="5"  style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;"  >
                        <?php echo $description; ?> 
                    </textarea>
                 

		                <br><br>
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  " >Remaining Content (Enter the remaining half):</label><br><br>
                        
                        <textarea  name="rem_description"  cols="30" rows="5"  style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;"  maxlength="240"  >
                        <?php echo $rem_description; ?>
                    </textarea>
                 
                        <label style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Current image :</label><br><br>

		                <br><br>

                        <?php 
                      if($current_image !=""){

                        ?>
                        <img src="<?php echo SITEURL; ?>Front-end/blog/<?php echo $current_image?>" width="150px" style="margin-left:50px;">
                        <?php 
                       }
                       else{
                       echo "Image not available";
                       
                       }

                      ?><br><br>
                        <label style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">New image (376 x 250) :</label><br><br>

                        <input type="file" name="image" required="" style="width:80%;  padding:5px;  margin-left:36px; color: black;" value="<?php echo SITEURL; ?>Front-end/blog/<?php echo $current_image?>"><br><br>
                      
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Food type(Healthy/Tasty/Healthy & Tasty) :</label><br><br>
                        
		                <input type="text"  name="type"  style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value="<?php echo $type; ?>"><br><br>

                        <label   style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Timing (takes to cook food in Mins/hrs) :</label><br><br>
                        
		                <input type="text"  name="timing" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value="<?php echo $timing?>"><br><br>

		                         
                        <label style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Serving (people count like 4-6) :</label><br><br>

                        <input type="text"  name="serving"  style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value="<?php echo $serving?>"><br><br>

                         <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold; ">Ingredients :</label><br><br>
		               
                         <textarea  name="ingredients"  cols="30" rows="5"  style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" ><?php echo $ingredients?></textarea>

                         <br><br>
		                                        <br>
                                                <br>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
  
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
   $title =  mysqli_real_escape_string($conn,$_POST['title']);
   $description = mysqli_real_escape_string($conn,$_POST['description']); 
   $rem_description = mysqli_real_escape_string($conn,$_POST['rem_description']);   
   $type =  mysqli_real_escape_string($conn,$_POST['type']);
   $timing =  mysqli_real_escape_string($conn,$_POST['timing']);
   $serving =  mysqli_real_escape_string($conn,$_POST['serving']);
   $ingredients =  mysqli_real_escape_string($conn,$_POST['ingredients']);
   $current_image = $_POST['current_image'];



   
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
           $image_name = "Food-Blog-".rand(0000,9999).'.'.$ext;

           $source_path = $_FILES['image']['tmp_name'];
           $destination_path ="../Front-end/blog/".$image_name;

           //finally upload the image
           $upload = move_uploaded_file($source_path, $destination_path);

           //check whether the image is uplaoded or not
           //and if the not uploaded then will stop the process and redirect with error msg

           if($upload==false){

            //create a session variable to display msg
	         $_SESSION['upload'] = "<div class='error'>Failed to  upload image    <strong>X</strong></div>";
	 
	         //redirect to manage admin
	          header("location:".SITEURL.'Blog/add-recipies-eng.php');

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

   $sql2 = "UPDATE recipies_eng SET 
            title = '$title',
            description = '$description',
            rem_description = '$rem_description',
            type='$type',
            timing='$timing',
            image_name='$image_name',
            serving='$serving',
            ingredients='$ingredients' WHERE id =$id
           
            

   ";

   //execute the query
   $res2 = mysqli_query($conn, $sql2);

   //check whether the query executed or not
   if($res2 == true)
   {
          
       //query executed successfully
       $_SESSION['update'] = "<div class='success'>Recipie Updated Successfully  <strong>X</strong></div>";
       header("location:".SITEURL.'Recipies.php');


   }
   else
   {

       //query not executed 
       $_SESSION['update'] = "<div class='error'>failed to Update Recipie   <strong>X</strong></div>";
       header("location:".SITEURL.'Blog/add-recipies-eng.php');



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