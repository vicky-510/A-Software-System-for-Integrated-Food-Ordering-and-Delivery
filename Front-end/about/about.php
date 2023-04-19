<?php include('../config/constants.php'); ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="../images/foodies.gif" alt="Restaurant Logo" class="img-responsive" >
                </a>
                
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>" style="color: orange;">Home</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo SITEURL; ?>Add-rest_home-made.php">Add a restaurant</a>
                    </li>
                    <li>
                        <a href="#">Hire a Chef</a>
                    </li>
                    <li>
                        <a href="#">Train service</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    
                
                    <li>
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

     <!-- fOOD sEARCH Section Starts Here -->
     <section class="food-banner text-left">
        <div class="container">
            <h2 id="banner-h2">About us</h2>

            <h4 id="banner-pg">Foodies is an Indian Startup restaurant aggregator and food delivery company founded in 2022. It is developed by Team foody. It is the first platform to deliver a restaurant and home made foods to people. We also created a blog to help people for cooking foods in a traditional way.</h4>
            

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <section class="about text-left">
        <h2 style="text-align: center; color: white;">Team foody </h2>
    <div class="about-menu-box1">
    <div class="card-container">
        <span class="pro">Team Leader</span>
        <img class="round" src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/about%20images%2Fvignesh.jpg?alt=media&token=a33f5e4a-2490-4aaa-91fc-41e83c44bf2a" alt="user" />
        <h3>Vigneshwaran M</h3>
        <h6>Madurai, Tamilnadu</h6>
        <p>Certified Hacking Defender and<br/>Programmer</p>
        <div class="buttons" >
            <a href="https://www.linkedin.com/in/vwaran"><button class="primary" style="cursor: pointer;">
                View profile
            </button></a>
            <a href="https://www.linkedin.com/in/vwaran"><button class="primary ghost" style="cursor: pointer;">
                Connect+
            </button></a>
        </div>
        <div class="skills">
            <h6>Skills</h6>
            <ul>
                <li>C</li>
                <li>Java</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>Bootstrap</li>
                <li>Networking</li>
                <li>Android</li>
            </ul>
        </div>
    </div>
    </div>


    <div class="about-menu-box1">
    <div class="card-container">
        <span class="pro">Team member 1</span>
        <img class="round" src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/about%20images%2Fvishnu-pro.jpg?alt=media&token=27b6ef34-3680-498a-93eb-d9ac8318ae81" alt="user" />
        <h3>Vishnu chidambaram R</h3>
        <h6>Madurai, Tamilnadu</h6>
        <p>Web developer and <br/> Quick learner</p>
        <div class="buttons" >
            <a href="https://www.linkedin.com/in/vishnu-chidambaram-r/"><button class="primary" style="cursor: pointer;">
                View profile
            </button></a>
            <a href="https://www.linkedin.com/in/vishnu-chidambaram-r/"><button class="primary ghost" style="cursor: pointer;">
                Connect+
            </button></a>
        </div>
        <div class="skills">
            <h6>Skills</h6>
            <ul>
                <li>C</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Java</li>
                <li>Python</li>
            </ul>
        </div>
    </div>
    </div>

    <div class="about-menu-box1">
        <div class="card-container">
        <span class="pro">Team member 2</span>
        <img class="round" src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/about%20images%2Fbalaji-pro.jpg?alt=media&token=33db270d-83e5-4b24-b3a3-538bc7514433" alt="user" />
        <h3>Balagi P</h3>
        <h6>Madurai, Tamilnadu</h6>
        <p>Game developer and <br/> Coder</p>
        <div class="buttons" >
            <a href="https://www.linkedin.com/in/balagi-parthasarathy-854b9916a/"><button class="primary" style="cursor: pointer;">
                View profile
            </button></a>
            <a href="https://www.linkedin.com/in/balagi-parthasarathy-854b9916a/"><button class="primary ghost" style="cursor: pointer;">
                Connect+
            </button></a>
        </div>
        <div class="skills">
            <h6>Skills</h6>
            <ul>
                <li>C</li>
                <li>C#</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Python</li>
            </ul>
        </div>
    </div>
</div>
<div class="clearfix">

</div>

</section>


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