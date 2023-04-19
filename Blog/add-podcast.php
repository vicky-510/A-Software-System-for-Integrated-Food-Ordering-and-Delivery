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
                        <a href="<?php echo SITEURL; ?>Recipies.php" >Recipies</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>Podcast.php" style="color: orange;">Podcast</a>
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
           <h2 style="color: #182C61;">Add your Recipie Podcast 
           <br><br>

</h2>

        </div>
        
                  <?php

                       if(isset($_SESSION['update']))
                      {
                       echo $_SESSION['update'];//display msg
                       unset($_SESSION['update']);//remove msg
                     }
                     if(isset($_SESSION['audio']))
                     {
                      echo $_SESSION['audio'];//display msg
                      unset($_SESSION['audio']);//remove msg
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
                        
                        <h4 id="head" class="text-center" style="color: rgb(255, 255, 255);  background-color:  rgb(255, 0, 81); height: 30px; padding:8px;">  Upload Recipies only in Audio Format</h4>
                        <br>  

                        
                        <form name="audio_form" id="audio_form" action="" method="post" enctype="multipart/form-data">

                        <fieldset>
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Audio/Recipie name :</label><br><br>
                        <input type="text"  name="title" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Upload Audio :</label><br><br>
                        <input name="audio_file" id="audio_file" type="file" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;"/><br><br>
                        <label  style="color: rgb(255, 255, 255); border-radius: 5px; margin-right:70px; color: navy; margin-left:35px; font-weight:bold;  ">Posted by :</label><br><br>
                        <input type="text"  name="posted_by" style="width:80%;  padding:5px;  border: 2px solid black; margin-left:36px; background-color:  #ecf0f1; color: black;" value=""><br><br>
                        <br><br>
                        <input type="submit" value="Submit" name="submit"  id="Submit" class="button"  style=" background-color:  rgb(255, 0, 81);
                                                color: rgb(255, 255, 255); 
                                                padding: 12px 24px;
                                                border-radius: 5px; margin-left: 150px; font-weight:bold;">
                        </fieldset>
                        </form>

                       
                       
                        
                        
                        
                        
                        
                       
                     
                                           
                            

                        </div>  
                  
                </div> 
                <?php 

             

//check whether the submit button is clicked or not
if(isset($_POST['submit']))	 {
//echo"clicked";

//get the value from category form
   $title = $_POST['title'];
   $posted_by = $_POST['posted_by'];               
   $posted_on =date("Y-m-d h:i:sa");
  


   
 if(isset($_FILES['audio_file']['name'])){
   
   if($_FILES['audio_file']['type']=='audio/mpeg' || $_FILES['audio_file']['type']=='audio/mpeg3' || $_FILES['audio_file']['type']=='audio/x-mpeg3' || $_FILES['audio_file']['type']=='audio/mp3' || $_FILES['audio_file']['type']=='audio/x-wav' || $_FILES['audio_file']['type']=='audio/wav')
   { 
    $new_file_name=$_FILES['audio_file']['name'];
   
    // Where the file is going to be placed
    $target_path = "../Front-end/audio/Podcast-".$new_file_name;
    
    //target path where u want to store file.
   
    //following function will move uploaded file to audios folder. 
   if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path)) {
   
    //insert query if u want to insert file
   }
   }
   }
   
   
  

   //create sql to store data

   $sql2 = "INSERT INTO podcast SET 
            title = '$title',
            new_file_name='$new_file_name',
            posted_by='$posted_by',
            posted_on='$posted_on'
           
            

   ";

   //execute the query
   $res2 = mysqli_query($conn, $sql2);

   //check whether the query executed or not
   if($res2 = true)
   {
          
       //query executed successfully
       $_SESSION['audio'] = "<div class='success'>Podcast Added Successfully  <strong>X</strong></div>";
       header("location:".SITEURL.'Podcast.php');


   }
   else
   {

       //query not executed 
       $_SESSION['audio'] = "<div class='error'>failed to add P0dcast   <strong>X</strong></div>";
       header("location:".SITEURL.'Blog/add-podcast.php');



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