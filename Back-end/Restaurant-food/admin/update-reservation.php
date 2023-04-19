<?php 

      include('../../config/constants.php'); 
      include('partials/login-check.php');

?>
<br>
<br>
<br>
<div class="login-box">
  <h2>Update Reservation</h2>
  <br>
  <?php
          if(isset($_GET['id']))
          {
          //get the id of selected admin
          $id = $_GET['id'];

          //create a sql query to get the details
          $sql = "SELECT * FROM reservation WHERE id=$id";


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
                $id=$row['id'];
                $title = $row['title'];                
                $status=$row['status'];

            }else{

              $_SESSION['no-category-found'] = "<div class='error'>No Order found    <strong>X</strong></div>";

                //redirect to manage Admin page
                header('location:'.SITEURL.'Back-end/Restaurant-food/admin/manage-order.php');
            }

          }
        }
        else{
            //redirect to manage Admin page
            header('location:'.SITEURL.'Back-end/Restaurant-food/admin/manage-order.php');
        }
       ?>


  	   
<form action="" method="post" >
  
  <div class="user-box">
  <input type="text" name="title" value="<?php echo $title?>">
    <label>Food :</label>
  </div>

<div class="user-box">
  <label>Status:</label>
  <br>
  <br>

  <select name="status">

  <option <?php if($status=="Accepted"){echo "selected";} ?> value="Accepted">Accepted</option>
  <option <?php if($status=="Rejected"){echo "selected";} ?>value="Rejected">Rejected</option>
 
</select>
  </div>

 
 
  <br>
<br>
<input type="hidden" name="id" value="<?php echo $id; ?>">
  <button class="btn-primary1" type="submit" name="submit">SUBMIT</button>

  <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/manage-reservation.php" style="margin-left:93px;">

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
		        $id =  mysqli_real_escape_string($conn,$_POST['id']);
                $title =  mysqli_real_escape_string($conn,$_POST['title']);
                $status =  mysqli_real_escape_string($conn,$_POST['status']);
                
    

		//create a sql to insert category into database
		      $sql2="UPDATE reservation SET 
		
                    title='$title',
                    status='$status' WHERE id ='$id'
		          ";

          //execute the query and save in database
          $res2 = mysqli_query($conn, $sql2);

		  //check whether the query is executed or not

		  if($res2==true){

			//query execute and category added
			 //echo "inserted";
	        //create a session variable to display msg
	        $_SESSION['update'] = "<div class='success'>Reservation Updated Successfully   <strong>X</strong></div>";
	 
	         //redirect to manage admin
	         header("location:".SITEURL.'Back-end/Restaurant-food/admin/manage-reservation.php');

             }else{
             //echo "not inserted";
	         //create a session variable to display msg
	         $_SESSION['update'] = "<div class='error'>Failed to  Update Reservation    <strong>X</strong></div>";
	 
	         //redirect to manage admin
	          header("location:".SITEURL.'Back-end/Restaurant-food/admin/manage-reservation.php');

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
  height: 100vh;
}
body {
  margin:0;
  margin-top:0px;
  padding:0;
  font-family: sans-serif;
  background: GREY;


}

.login-box {
  position: absolute;
  top: 50%;
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
