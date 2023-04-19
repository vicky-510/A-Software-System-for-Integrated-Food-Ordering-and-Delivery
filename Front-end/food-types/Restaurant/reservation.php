

<?php 

      include('../../config/constants.php'); 
    
      include('login_rest/login-check.php'); 

?>

    <!-- Navbar Section Ends Here -->
    

<div class="login-box">
  <h2>Reservation</h2>
  <br>  <br>

  <?php
           
            if(isset($_SESSION['reserve']))
            {
                   echo $_SESSION['reserve'];//display msg
                   unset($_SESSION['reserve']);//remove msg
            }

      ?>
      <br>
      <br>

  <form action="" method="post" >
  <div class="user-box">
    <input type="text" name="title" required="">
    <label>Food title: </label>
  </div>
  <br>

  <div class="user-box">
<label>Restaurant name:</label>
<br>
<br>
    <select type="text" name="rest_name" required="">

       <?php
           
           //create php code to display categories from database
           //create sql query to get all active categories from database
           $sql = "SELECT * FROM food_rest ";

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
                    $rest_name=$row['rest_name'];
                    ?>
                    <option value="<?php echo $rest_name; ?>"> <?php echo $rest_name; ?> </option>
        

                    <?php
                }
           }
           else
           {
            //we don't have categories

            ?>
            <option value="<?php echo 'NA'; ?>">No Restaurant found</option>
            <?php

           }

        ?>




        
</select>

  </div>

  
 
 
  <br>
  

  <div class="user-box">
    <input type="number" name="table_count" required="">
    <label>No.of.tables: </label>
  </div>
  <div class="user-box">
  <label>Reservation Time/Date: </label>
<br><br>

    <input type="datetime-local" name="time_date" required="">
  </div>
  <div class="user-box">
    <input type="number" name="person_count" required="">
    <label>No.of.person:</label>
  </div>
  <div class="user-box">
    <input type="text" name="cust_name" required="">
    <label>Name: </label>
  </div>
  <div class="user-box">
    <input type="email" name="cust_email" required="">
    <label>Email: </label>
  </div>
  <div class="user-box">
    <input type="number" name="cust_number" required="">
    <label>Phone number: </label>
  </div>






  <br>
<br>

  <button class="btn-primary1" type="submit" name="submit">SUBMIT</button>

  <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/restaurant.php" style="margin-left:93px;">

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

                        $title=$_POST['title'];
                        $rest_name = $_POST['rest_name'];
                        $table_count = $_POST['table_count'];
                        $time_date = $_POST['time_date'];
                        $person_count = $_POST['person_count'];
                        $cust_name=$_POST['cust_name'];
                        $cust_email=$_POST['cust_email'];
                        $cust_number=$_POST['cust_number'];
                        $status="Accepted"; //ordered, undelivery cancelled 

  
                       
          


        //create a sql to insert category into database
       //for numerical value , we do not single quotes 

        $sql2="INSERT INTO reservation SET 
		
          title='$title',
          rest_name = '$rest_name',
          table_count='$table_count',
          time_date='$time_date',
          person_count ='$person_count',
          cust_name ='$cust_name',
          cust_email='$cust_email',
          cust_number='$cust_number',
          status='$status'
          
       ";

   //execute the query and save in database
   $res2 = mysqli_query($conn, $sql2);

   //check whether the query is executed or not

   if($res2==true){

     //query execute and category added
      //echo "inserted";
     //create a session variable to display msg
     $_SESSION['reserve'] = "<div class='success'>Details sent Successfully    <strong>X</strong></div>";

      //redirect to manage admin
      header("location:".SITEURL.'Front-end/food-types/Restaurant/reservation.php');

      }else{
      //echo "not inserted";
      //create a session variable to display msg
      $_SESSION['reserve'] = "<div class='error'>Failed to  reserve details    <strong>X</strong></div>";

      //redirect to manage admin
      header("location:".SITEURL.'Front-end/food-types/Restaurant/reservation.php');

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
  height: 150vh;
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
  top: 75%;
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


.success{
    padding: 15px;
    background-color: #44ff00;
    width:fit-content;
    color: black;

}

.error{
        padding: 15px;
        background-color: #ff2600;
        width:fit-content;

        color: rgb(255, 255, 255);
}
</style>
