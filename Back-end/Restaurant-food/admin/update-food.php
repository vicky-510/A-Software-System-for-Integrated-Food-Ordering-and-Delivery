

<?php 

      include('../../config/constants.php'); 
      include('partials/login-check.php');

?>
<br>
<br>
<br>
<div class="login-box">
  <h2>Update Food</h2>
  <br>

       <?php
          if(isset($_GET['id']))
          {
          //get the id of selected admin
          $id = $_GET['id'];

          //create a sql query to get the details
          $sql = "SELECT * FROM food_rest WHERE id=$id";


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
                $rest_name=$row['rest_name'];
                $rest_address=$row['rest_address'];
                $rest_district=$row['rest_district'];
                $rest_number=$row['rest_number'];
                $price=$row['price'];
                $current_category=$row['category_id'];
                $current_image = $row['image_name'];
                $featured = $row['featured'];
                $active = $row['active'];





            }else{

              $_SESSION['no-category-found'] = "<div class='error'>No Category found    <strong>X</strong></div>";

                //redirect to manage Admin page
                header('location:'.SITEURL.'Back-end/Restaurant-food/admin/manage-food.php');
            }

          }
        }
        else{
            //redirect to manage Admin page
            header('location:'.SITEURL.'Back-end/Restaurant-food/admin/manage-food.php');
        }
       ?>





	   
<form action="" method="post" enctype="multipart/form-data">
  
  <div class="user-box">
    <input type="text" name="title" required="" value="<?php echo $title; ?>">
    <label>Food title</label>
  </div>

  <div class="user-box ">
    <br>
    <br>

  <textarea  name="description" required="" cols="30" rows="5" required=""><?php echo $description; ?></textarea>
    <label>Description :</label>
  </div>
  <br>
  <div class="user-box">
    <input type="text" name="rest_name" required=""value="<?php echo $rest_name; ?>" >
    <label>Restaurant name</label>
  </div>
  <div class="user-box">
    <input type="text" name="rest_address" required="" value="<?php echo $rest_address; ?>">
    <label>Restaurant address</label>
  </div>
  <div class="user-box">
    <input type="text" name="rest_district" required="" value="<?php echo $rest_district; ?>">
    <label>Restaurant district</label>
    <div class="user-box">
    <input type="number" name="rest_number" required="" value="<?php echo $rest_number; ?>">
    <label>Restaurant Mobile Number</label>
  </div>
  </div>
  <div class="user-box">
    <input type="number" name="price" required="" value="<?php echo $price; ?>">
    <label>Price</label>
  </div>

<div class="img" >
  <label>Current Image :</label>
<br>
<br>
<?php 
if($current_image !=""){

  ?>
  <img src="<?php echo SITEURL; ?>Front-end/images/food/<?php echo $current_image?>" width="150px">
  <?php
}
else{
  echo "Image not available";

}

?>
  </div>
  <br>
  <div class="img" >
  <label>New Image :</label>
<br>
<br>
    <input type="file" name="image" value="<img src='<?php echo SITEURL; ?>Front-end/images/food/<?php echo $current_image?>'>" required="">

  </div>
  <br>
<br>
<div class="feature">
   <label>Featured :</label> 
    <br><br>
    <input   <?php if($featured=="Yes"){echo "checked";} ?>       type="radio" id="Yes" name="featured" value="Yes">
    <label for="Yes">Yes</label><br>
    <input   <?php if($featured=="No"){echo "checked";} ?>     type="radio" id="No" name="featured"    value="No">
     <label for="No">No</label>
  </div>
   <br>
  
  <div class="active">
   <label>Active :</label>  
    <br><br>
    <input    <?php if($featured=="Yes"){echo "checked";} ?>  type="radio" id="Yes" name="active"   value="Yes">
    <label for="Yes">Yes</label><br>
    <input  <?php if($featured=="No"){echo "checked";} ?>   type="radio" id="No" name="active"     value="No">
     <label for="No">No</label>

  </div>
	<br>

<div class="user-box">
<label>Category</label>
<br>
<br>
    <select type="number" name="category" required="">

       <?php
           
           //create php code to display categories from database
           //create sql query to get all active categories from database
           $sql1 = "SELECT * FROM category_rest WHERE active='Yes' ";

           //executing the query
           $res1 = mysqli_query($conn, $sql1);
          
           //count rows to check whether we have categories or not
           $count = mysqli_num_rows($res1);

           //if count is greater than zero we have categories else we do not have categories
           if($count>0)
           {
                //we have categories

                while($row1=mysqli_fetch_assoc($res1))
                {
                    //get the details of categories  
                    
                    $category_title=$row1['title'];
                    $category_id =$row1['id'];
                  
                    ?>
                    <option  <?php if($current_category==$category_id){echo "selected";} ?>  value="<?php echo $category_id; ?>"> <?php echo $category_title; ?> </option>
        

                    <?php
                }
           }
           else
           {
            //we don't have categories

            ?>
            <option value="0">No category found</option>
            <?php

           }

        ?>




        
</select>

  </div>


  <br>
<br>
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
  <button class="btn-primary1" type="submit" name="submit">SUBMIT</button>

  <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/manage-food.php" style="margin-left:93px;">

    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Go Back
  </a>
</form>
</div>



<?php 


     //check whether the submit button is clicked or not
	 if(isset($_POST['submit']))	 {
		//echo"clicked";
            
		//get the value from category form
		            $id = mysqli_real_escape_string($conn,$_POST['id']);
                $title = mysqli_real_escape_string($conn,$_POST['title']);
                $description = mysqli_real_escape_string($conn,$_POST['description']);
                $rest_name = mysqli_real_escape_string($conn,$_POST['rest_name']);
                $rest_address = mysqli_real_escape_string($conn,$_POST['rest_address']);
                $rest_district = mysqli_real_escape_string($conn,$_POST['rest_district']);
                $rest_number = mysqli_real_escape_string($conn,$_POST['rest_number']);
                $price = mysqli_real_escape_string($conn,$_POST['price']);
                $current_image = mysqli_real_escape_string($conn,$_POST['current_image']);
                $category = mysqli_real_escape_string($conn,$_POST['category']);
                $featured = mysqli_real_escape_string($conn,$_POST['featured']);
                $active = mysqli_real_escape_string($conn,$_POST['active']);


		

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
           $destination_path ="../../../Front-end/images/food/".$image_name;

           //finally upload the image
           $upload = move_uploaded_file($source_path, $destination_path);

           //check whether the image is uplaoded or not
           //and if the not uploaded then will stop the process and redirect with error msg

           if($upload==false){

            //create a session variable to display msg
	         $_SESSION['upload'] = "<div class='error'>Failed to  upload image    <strong>X</strong></div>";
	 
	         //redirect to manage admin
	          header("location:".SITEURL.'Back-end/Restaurant-food/admin/manage-food.php');

            //stop the process
            die();
           }
        
        }
        else{
          //set the default value (or) don't upload image and set the image_name as blank
          $image_name  = "";
    
        }
    
         
    

		//create a sql to insert category into database
		      $sql2="UPDATE food_rest SET 
		
		       title='$title',
           description='$description',
           rest_name='$rest_name',
           rest_address='$rest_address',
           rest_district='$rest_district',
           rest_number='$rest_number',
           price='$price',
           category_id='$category',
           image_name='$image_name',
		       featured='$featured',
		      active='$active' WHERE id ='$id'
		      ";

          //execute the query and save in database
          $res2 = mysqli_query($conn, $sql2);

		  //check whether the query is executed or not

		  if($res2==true){

			//query execute and category added
			 //echo "inserted";
	        //create a session variable to display msg
	        $_SESSION['update'] = "<div class='success'>Food Updated Successfully   <strong>X</strong></div>";
	 
	         //redirect to manage admin
	         header("location:".SITEURL.'Back-end/Restaurant-food/admin/manage-food.php');

             }else{
             //echo "not inserted";
	         //create a session variable to display msg
	         $_SESSION['update'] = "<div class='error'>Failed to  Update Food    <strong>X</strong></div>";
	 
	         //redirect to manage admin
	          header("location:".SITEURL.'Back-end/Restaurant-food/admin/manage-food.php');

             }

	 } 
	 else{

		//echo"not clicked";
	 }

  ?>



<style>

	.btn-primary1{
	background-color: #1B9CFC;
    padding: 4% 9%;
	border-radius:5px;
    color:rgb(255, 255, 255);
    font-weight: 500;
	font-size:16px;
	margin-left:90px;
    text-decoration: none;
	font-family: sans-serif;
	letter-spacing: 4px



	} 
	
	html {
  height: 200vh;
}
body {
  margin:0;
  margin-top:50px;
  padding:0;
  font-family: sans-serif;
  background: GREY;


}

.login-box {
  position: absolute;
  top: 100%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  margin-top: 30px;
  transition: .5s;
  letter-spacing: 4px
}


.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}


.feature{
  color:white;
  font-family: sans-serif;
}
#Yes{

  margin-left:14px;}
.active{
  color:white;
  font-family: sans-serif;
}	
.img{
  color:white;
  font-family: sans-serif;
}
</style>
