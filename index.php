<?php include('Back-end/config/constants.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="Front-end/css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="Front-end/images/foodies.gif" alt="Restaurant Logo" class="img-responsive" >
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
                    <a href="<?php echo SITEURL; ?>hire-chef.php" >Hire a Chef</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL; ?>train-service.php">Train service</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>Recipies.php">Blog</a>
                    </li>
                    
                
                    <li>
                        <a href="<?php echo SITEURL; ?>Back-end/Restaurant-food/admin/login-rest.php"><button class="button" 
                        style=" background-color: #182C61; 
                            color: rgb(255, 255, 255); 
                            padding: 12px 24px;
                            border-radius: 5px; margin-left: 20px;">Admin Login</button></a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
    

     <!-- fOOD sEARCH Section Starts Here -->
     <section class="food-search text-center">
        <div class="container">
            <form action="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/rest-food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required id="search-bar">
                <input type="submit" name="submit" value="Search" class="btn btn-primary" id="search-btn">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-type">
        <div class="container">
            <h2 class="text-center text-white">Select your food type</h2>

            <a href="<?php echo SITEURL; ?>Front-end/food-types/Restaurant/login_rest/login_user_rest.php" class="btn2 btn-primary">
                 <div class="food-type-box1">
                
                    <div class="text-center">
                       <h4 id="head" > Restaurant Food</h4>  
                        </div>   
                  
                </div> </a>

                <a href="<?php echo SITEURL; ?>Front-end/food-types/Home-made/login_rest/login_user_rest.php" class="btn2 btn-primary">
                <div class="food-type-box1">
                   
                        <div class="text-center">
                           <h4 id="head" > Home Made Food</h4>  
                            </div>   
                    
                    </div>   </a>
          

           
            <div class="clearfix"></div>
        </div>
           
    </section>
    <!-- Categories Section Ends Here -->

      


             <!---  food service -->
                <section class="food-service">
                     
                    <h2 class="text-center">What we offer</h2>
                   
                        <div class="food-service-box2"> 
                        
                            <div class="card-big-shadow">
                                <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                                    <div class="content">
                                       
                                        <h4 class="title"><a href="#">Hygienic package</a></h4>
                                        <p class="description">Hygienic process is followed, before and after packaging food. </p>
                                    </div>
                                </div> <!-- end card -->
                            </div>
                        </div>
                    </div>

                    <div class="food-service-box2"> 
                       
                            <div class="card-big-shadow">
                                <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                                    <div class="content">
                                       
                                        <h4 class="title"><a href="#">Fast delivery</a></h4>
                                        <p class="description">Based on the location, Customer get food within 20-30 minutes after ordering.  </p>
                                    </div>
                                </div> <!-- end card -->
                            </div>
                        </div>
                    </div>
                        
                    <div class="food-service-box2"> 
                          
                                <div class="card-big-shadow">
                                    <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                                        <div class="content">
                                         
                                            <h4 class="title"><a href="#">Customer friendly</a></h4>
                                            <p class="description">Our UI is designed to be customer friendly and we provide 24*7 customer support </p>
                                        </div>
                                    </div> <!-- end card -->
                                </div>
                            </div>
                        </div>
                         
                        <div class="food-service-box2"> 
                          
                            <div class="card-big-shadow">
                                <div class="card card-just-text" data-background="color" data-color="rose" data-radius="none">
                                    <div class="content">
                                        
                                        <h4 class="title"><a href="#">Affordable cost</a></h4>
                                        <p class="description">Customer can buy food at affordable cost without extra-charge. </p>
                                    </div>
                                </div> <!-- end card -->
                            </div>
                        </div>
                    </div>
                        
                        </div>
                        <div class="clearfix"></div>
        </div>
                 
                    </div>
                    </section>
                     <!-- home blog  Starts Here -->

                    <section class="blog-food">
                    <div class="container">  
                     <div class="hero-image img-responsive" >
                        <div class="blog-text1"> <h1>Food Blog</h1></div>
                       
                        
                        <div class="blog-text2 ">
                          <h4>Learn to cook foods through our blog, here you will find traditional to trending foods in India.</h4>
                        </div>

                        <div class="blog-btn ">
                       
                            <a href="<?php echo SITEURL; ?>Recipies.php"><button class="button button2">Learn more</button></a>
                       

                        </div>

                      </div>
                      
                      <div class="clearfix"></div>
                    </div>

                    </div>
                    </section>
                   
                    <section class="food-testimonal">
                     
                    <h2 class="text-center" >Testimonials</h2>
                       
                    <div class="food-menu-box3"> 
                                
                    <figure class="snip1390">
                        <img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ftestimonals%2Fnafees-testimonals.jpg?alt=media&token=34289cf0-1215-4eb0-bc2b-f3b3ba8bb998" alt="profile-sample3" class="profile" />
                        <figcaption>
                          <h2>Nafees</h2>
                          <h4>UX Designer</h4>
                          <blockquote>The Customer support and food service is awesome. I got my delivery within 20 mins.</blockquote>
                        </figcaption>
                      </figure> 
                    </div>

                    <div class="food-menu-box3"> 
                      <figure class="snip1390 hover">
                        <img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ftestimonals%2Fkarthi-testimonals.jpg?alt=media&token=02f20d26-eae3-4a51-be92-97030bbd800c" alt="profile-sample5" class="profile" />
                        <figcaption>
                          <h2>Karthikeyan</h2>
                          <h4>Software Engineer</h4>
                          <blockquote>It is the best food service platform. Their UI is pretty good, also i got my food on-time. </blockquote>
                        </figcaption>
                      </figure>
                    </div>

                    <div class="food-menu-box3"> 
                      <figure class="snip1390">
                        <img src="https://firebasestorage.googleapis.com/v0/b/food-order-7a907.appspot.com/o/images%2Ftestimonals%2Fphoto3.jpg?alt=media&token=c3b611c6-9059-48c4-a023-977da42bc789" alt="profile-sample6" class="profile" />
                        <figcaption>
                          <h2>Solomon</h2>
                          <h4>Civil Engineer</h4>
                          <blockquote>I am using these platform for more than a year. Excellent service and support.</blockquote>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                    
                    </section>

     <!-- banner Section Starts Here -->
     <section class="home-banner text-left">
        <div class="container">
            <h2 id="banner-h2-home">About us</h2>

            <h4 id="banner-pg-home">Foodies is an Indian Startup restaurant aggregator and food delivery company founded in 2022. It is developed by Team foody.</h4>
            <br>
            <a href="<?php echo SITEURL; ?>Front-end/about/about.php">
            <button class="button button2" style="margin-top: 10px; ">Know more</button>
            </a>

                       

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

                    

     
<section class="faq-section">
    <div class="container">
      <div class="row">
                        <!-- ***** FAQ Start ***** -->
                        <div class="col-md-6 offset-md-3">
    
                            <div class="faq-title text-center pb-3">
                                <h2>FAQ</h2>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-3">
                            <div class="faq" id="accordion">
                                <div class="card">
                                    <div class="card-header" id="faqHeading-1">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                                <span class="badge">1</span>Who is Foodies?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Foodies is an Indian Startup restaurant aggregator and food delivery company founded  in 2022.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-header" id="faqHeading-3">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                                <span class="badge">2</span>Which is most ordered on Foodies?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                Speaking of the most ordered food item, foodies revealed that the most ordered food item of the year was biryani. According to foodies, 186 biryanis were delivered every minute in the year of 2022.</p>
                                        </div>
                                    </div>
                                </div>
                              
                               
                                <div class="card">
                                    <div class="card-header" id="faqHeading-6">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                                <span class="badge">3</span> Which is the highest selling food online?
    
                                            </h5>
                                        </div>
                                    </div>
                                    
                                    <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>According to foodies 2022 stats, chicken biryani continues to be consumer favourite in India, sixth year in a row as it became the most-ordered food item on the delivery app, with pav bhaji, gulab jamun taking the second spot on the list.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                   <br>
                   <br>
                   <br>
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