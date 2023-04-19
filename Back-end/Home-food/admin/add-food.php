

<?php 

      include('../../config/constants.php'); 
      include('partials/login-check.php');

?>

<div class="login-box">
  <h2>Add Food</h2>
  <br>
  <?php
           
            if(isset($_SESSION['upload']))
            {
                   echo $_SESSION['upload'];//display msg
                   unset($_SESSION['upload']);//remove msg
            }

      ?>
      <br>
      <br>

  <form action="" method="post" enctype="multipart/form-data">
  
  <div class="user-box">
    <input type="text" name="title" required="">
    <label>Food title</label>
  </div>

  <div class="user-box ">
    <br>
    <br>

  <textarea  name="description" required="" cols="30" rows="5" required="" placeholder="Description of the Food."></textarea>
    <label>Description :</label>
  </div>
  <br>
  <div class="user-box">
    <input type="text" name="rest_name" required="">
    <label>Home chef name</label>
  </div>
  <div class="user-box">
    <input type="text" name="rest_address" required="">
    <label>Home chef address</label>
  </div>
  <div class="user-box">
    <input type="text" name="rest_district" required="">
    <label>Home chef district</label>
  </div>
  <div class="user-box">
    <input type="number" name="rest_number" required="">
    <label>Home chef Mobile Number</label>
  </div>
  <div class="user-box">
    <input type="number" name="price" required="">
    <label>Price</label>
  </div>
  <br>
<br>
  
  <div class="img" >
  <label>Upload Image :</label>
<br>
<br>
    <input type="file" name="image" required="">

  </div>
  <br>
  <br>
  <div class="feature">
     <label>Featured :</label> 
      <br><br>
      <input type="radio" id="Yes" name="featured"  value="Yes">
    <label for="Yes">Yes</label><br>
    <input type="radio" id="No" name="featured"     value="No">
     <label for="No">No</label>
    </div>
     <br>
    
    <div class="active">
     <label>Active :</label>  
      <br><br>
      <input type="radio" id="Yes" name="active"   value="Yes">
    <label for="Yes">Yes</label><br>
    <input type="radio" id="No" name="active"      value="No">
     <label for="No">No</label>

    </div>
	<br>
<br>

<div class="user-box">
<label>Category</label>
<br>
<br>
    <select type="number" name="category_id" required="">

       <?php
           
           //create php code to display categories from database
           //create sql query to get all active categories from database
           $sql = "SELECT * FROM category_home WHERE active='Yes' ";

           //executing the query
           $res = mysqli_query($conn, $sql);
          
           //count rows to check whether we have categories or not
           $count = mysqli_num_rows($res);

           //if count is greater than zero we have categories else we do not have categories
           if($count>0)
           {
                //we have categories

                while($row=mysqli_fetch_assoc($res))
                {
                    //get the details of categories
                    $id =$row['id'];
                    $title=$row['title'];
                    ?>
                    <option value="<?php echo $id; ?>"> <?php echo $title; ?> </option>
        

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

  <button class="btn-primary1" type="submit" name="submit">SUBMIT</button>

  <a href="manage-food.php" style="margin-left:93px;">

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
          	 if(isset($_POST['submit']))
             {

                		//get the value from form

                        $title= mysqli_real_escape_string($conn,$_POST['title']);
                        $description =  mysqli_real_escape_string($conn,$_POST['description']);
                        $home_name= mysqli_real_escape_string($conn,$_POST['rest_name']);
                        $home_address= mysqli_real_escape_string($conn,$_POST['rest_address']);
                        $home_district= mysqli_real_escape_string($conn,$_POST['rest_district']);
                        $home_number= mysqli_real_escape_string($conn,$_POST['rest_number']);
                        $price= mysqli_real_escape_string($conn,$_POST['price']);
                        $category_id= mysqli_real_escape_string($conn,$_POST['category_id']);
                        

         //featured

		//for radio input is checked or not
		if(isset($_POST['featured'])){

			//get the value from form
			$featured =  mysqli_real_escape_string($conn,$_POST['featured']);
		}
		else{
			//set the default value
			$featured = "No";

		}

		//active

		//for radio input is checked or not
		if(isset($_POST['active'])){

			//get the value from form
			$active =  mysqli_real_escape_string($conn,$_POST['active']);
		}
		else{
			//set the default value
			$active  = "No";

		}
   

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
           $image_name = "Food-Name-".rand(00000,99999).'.'.$ext;

           $source_path = $_FILES['image']['tmp_name'];
           $destination_path ="../../../Front-end/img/food/".$image_name;

           //finally upload the image
           $upload = move_uploaded_file($source_path, $destination_path);

           //check whether the image is uplaoded or not
           //and if the not uploaded then will stop the process and redirect with error msg

           if($upload==false){

            //create a session variable to display msg
	         $_SESSION['upload'] = "<div class='error'>Failed to  upload image    <strong>X</strong></div>";
	 
	         //redirect to manage admin
	          header("location:".SITEURL.'Back-end/Home-food/admin/add-food.php');

            //stop the process
            die();
           }
          }
        }
        else{
          //set the default value (or) don't upload image and set the image_name as blank
          $image_name  = "";
    
        }
  
                       
          


        //create a sql to insert category into database
       //for numerical value , we do not single quotes 

        $sql2="INSERT INTO food_home SET 
		
          title='$title',
          description = '$description',
          home_name='$home_name',
          home_address='$home_address',
          home_district ='$home_district',
          home_number ='$home_number',
          price=$price,
          image_name='$image_name',
          category_id=$category_id,
          featured = '$featured',
          active = '$active'
       ";

   //execute the query and save in database
   $res2 = mysqli_query($conn, $sql2);

   //check whether the query is executed or not

   if($res2==true){

     //query execute and category added
      //echo "inserted";
     //create a session variable to display msg
     $_SESSION['add'] = "<div class='success'>Food Added Successfully   <strong>X</strong></div>";

      //redirect to manage admin
      header("location:".SITEURL.'Back-end/Home-food/admin/manage-food.php');

      }else{
      //echo "not inserted";
      //create a session variable to display msg
      $_SESSION['add'] = "<div class='error'>Failed to  Add Food    <strong>X</strong></div>";

      //redirect to manage admin
       header("location:".SITEURL.'Back-end/Home-food/admin/add-food.php');

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
  height: 170vh;
}
body {
  margin:0;
  margin-top:5px;
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
