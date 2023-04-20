<?php include('partials/constants.php'); ?>


<div class="container">
  <div class="brand-logo"></div>
  <div class="brand-title">Home Delivery Login</div>
<?php 
    if(isset($_SESSION['login-delivery']))
    {
        echo $_SESSION['login-delivery'];
        unset($_SESSION['login-delivery']);
    }

    if(isset($_SESSION['no-login-message']))
    {
        echo $_SESSION['no-login-message'];
        unset($_SESSION['no-login-message']);
    }
?>
<form action="" method="POST" >

  <div class="inputs">
    <label>USERNAME</label>
    <input type="text"  name="username" placeholder="user123" />
    <label>PASSWORD</label>
    <input type="password" name="pwd" placeholder="Min 6 charaters long" />
    <button type="submit" name="submit">LOGIN</button>
  </div>
  </form>

  <br>
  <a href="<?php echo SITEURL;?>Delivery/Home-made/register-delivery.php">Don't have an account? Signup</a>
  <a href="<?php echo SITEURL;?>" id="back">Go Back?</a>

</div>




<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
         $username =  mysqli_real_escape_string($conn,$_POST['username']);
         $raw_pwd = md5($_POST['pwd']);
         $pwd =  mysqli_real_escape_string($conn,$raw_pwd);

        

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM delivery_home WHERE username='$username' AND pwd='$pwd'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login-delivery'] = "<div class='success'>Login Successful     <strong>X</Strong></div>";
            $_SESSION['delivery_home'] = $username ; //TO check whether the user is logged in or not and logout will unset it
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'Delivery/Home-made/index.php');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login-delivery'] = "<div class='error '>Username or Password did not match.    <strong>X</Strong></div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'Delivery/Home-made/login-home.php');
        }


    }

?>





<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

input {
  caret-color: red;
}

body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}

.container {
  position: relative;
  width: 350px;
  height: 580px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.brand-logo {
  height: 100px;
  width: 100px;
  background: url("../../Front-end/images/logo-logins.png");
  margin: auto;
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
}

.brand-title {
  margin-top: 10px;
  font-weight: 900;
  font-size: 1.4rem;
  color: navy;
  letter-spacing: 1px;
}

.inputs {
  text-align: left;
  margin-top: 30px;
}

label, input, button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

input::placeholder {
  color: gray;
}

input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

button {
  color: white;
  margin-top: 20px;
  background: navy;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

button:hover {
  box-shadow: none;
}

a {
  position: absolute;
  font-size: 12px;
  bottom: 20px;
  right: 135px;
  
  
  text-decoration: none;
  color: black;
  background: Orange;
  font-weight: 500;
  border-radius: 10px;
  padding: 7px;
}

#back{
  position: absolute;
  font-size: 12px;
  bottom: 20px;
  right: 35px;
  
  
  text-decoration: none;
  font-weight: 500;
  color: white;
  background: Navy;
  border-radius: 10px;
  padding: 7px;
}

h1 {
  position: absolute;
  top: 0;
  left: 0;
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