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
           <h2 style="color: #182C61; font-size:25px;">உங்கள் சமையல் குறிப்புகளை தமிழில் பதிவிடவும்
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
                     
                     ?> 
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

   




    

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-type1" >
        <div class="container ">
      

                 <div class="food-type-box3 ">
                
                    <div class="" style="color: black;  border-radius: 5px; ">
                        
                        <h4 id="head" class="text-center" style="color: rgb(255, 255, 255);  background-color:  rgb(255, 0, 81); height: 30px; padding:18px;">  உங்கள் சமையல் குறிப்புகளைச் சேர்க்கவும்</h4>
                        <br>  

                        
                        <form action="" method="post" enctype="multipart/form-data" >

                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">உணவின் பெயர்:</label><br><br>
                        
		                <input type="text"  name="title" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>


                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">தயாரிக்கும் முறைகள்:</label><br><br>
                        
                        <textarea  name="description" maxlength="240" required="" cols="30" rows="5" required="" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""  >
                        
                    </textarea>
                 

		                <br><br>
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">மீதமுள்ள பாதியைச் சேர்க்கவும்:</label><br><br>
                        
                        <textarea  name="rem_description" required="" cols="30" rows="5" required="" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value="" maxlength="240"  >
                       
                    </textarea>
                 

		                <br><br>

                        <label style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">படத்தை பதிவேற்றம் செய்யவும்(376 x 250):</label><br><br>

                        <input type="file" name="image" required="" style="width:80%;  padding:5px;  margin-left:36px; color: black;" required=""><br><br>
              
                      
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">உணவு வகை (ஆரோக்கியமான/சுவையான/<br>ஆரோக்கியமான & சுவையான) :</label><br><br>
                        
		                <input type="text"  name="type" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                        <label   style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">நேரம் (உணவை சமைக்க நிமிடம்/மணிநேரம் ஆகும்) :</label><br><br>
                        
		                <input type="text"  name="timing" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

		                         
                        <label style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">உணவு பரிமாறும் எண்ணிக்கை :</label><br><br>

                        <input type="text"  name="serving" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>

                         <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">தேவையான பொருட்கள் :</label><br><br>
		               
                         <textarea  name="ingredients" required="" cols="30" rows="5" required="" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value="" ></textarea>

                         <br><br>
		                <label   style="color: rgb(255, 255, 255); border-radius: 5px;  margin-left:35px; margin-right:56px; color: navy; font-weight:bold; ">பதிவிட்டவர் :</label><br><br>
		                <input type="text"  name="posted_by" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1;  color: black;" value=""><br><br>
                                                <br>
                                                <br>

		                <input type="submit" value="சமர்ப்பிக்கவும்" name="submit" class="button"  style=" background-color:  rgb(255, 0, 81);
                                                color: rgb(255, 255, 255); 
                                                padding: 12px 24px;
                                                border-radius: 5px; margin-left: 140px; font-weight:bold;">
                        

            	</form>

                     
                                           
                            

                        </div>  
                  
                </div> 
                <?php 

             

//check whether the submit button is clicked or not
if(isset($_POST['submit']))	 {
//echo"clicked";

//get the value from category form
   $title = $_POST['title'];
   $description =$_POST['description']; 
   $rem_description =$_POST['rem_description'];   
   $type = $_POST['type'];
   $timing = $_POST['timing'];
   $serving = $_POST['serving'];
   $ingredients = $_POST['ingredients'];
   $posted_by = $_POST['posted_by'];               
   $posted_on =date("Y-m-d h:i:sa");
  


   
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
           $destination_path ="../Front-end/blog/tam/".$image_name;

           //finally upload the image
           $upload = move_uploaded_file($source_path, $destination_path);

           //check whether the image is uplaoded or not
           //and if the not uploaded then will stop the process and redirect with error msg

           if($upload==false){

            //create a session variable to display msg
	         $_SESSION['upload'] = "<div class='error'>படத்தை பதிவேற்ற முடியவில்லை   <strong>X</strong></div>";
	 
	         //redirect to manage admin
	          header("location:".SITEURL.'Blog/add-recipies-tam.php');

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

   $sql2 = "INSERT INTO recipies_tamil SET 
            title = '$title',
            description = '$description',
            rem_description = '$rem_description',
            type='$type',
            timing='$timing',
            image_name='$image_name',
            serving='$serving',
            ingredients='$ingredients',
            posted_by='$posted_by',
            posted_on='$posted_on'
           
            

   ";

   //execute the query
   $res2 = mysqli_query($conn, $sql2);

   //check whether the query executed or not
   if($res2 = true)
   {
          
       //query executed successfully
       $_SESSION['add'] = "<div class='success'>செய்முறை வெற்றிகரமாக சேர்க்கப்பட்டது  <strong>X</strong></div>";
       header("location:".SITEURL.'Recipies-tam.php');


   }
   else
   {

       //query not executed 
       $_SESSION['add'] = "<div class='error'>ரெசிபியைச் சேர்க்க முடியவில்லை   <strong>X</strong></div>";
       header("location:".SITEURL.'Blog/add-recipies-tam.php');



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