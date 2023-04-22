# A-Software-System-for-Integrated-Food-Ordering-and-Delivery
Foodies is an innovative and integrated web application that brings together all aspects of the food industry in one platform. Whether you're looking to order food from your favorite restaurants or talented home chefs, hire a personal chef for your next event, or learn how to cook like a pro .



## File Structure


```bash
    foodies
       |        
       |____Back-end
       |        |   
       |        |____config (DB Connection for Back end)
       |        | 
       |        |        
       |        |____Home-food
       |        |         |
       |        |         |
       |        |         |____admin
       |        |                 |  
       |        |                 |____partials
       |        |                 |        |
       |        |                 |        |______footer.php
       |        |                 |        |
       |        |                 |        |______login-check.php
       |        |                 |        |
       |        |                 |        |______menu.php
       |        |                 |        
       |        |                 |____add-admin.php  
       |        |                 |        
       |        |                 |____add-category.php              
       |        |                 |           
       |        |                 |____add-food.php
       |        |                 |
       |        |                 |____delete-admin.php
       |        |                 |
       |        |                 |____delete-category.php
       |        |                 |
       |        |                 |_____index.php
       |        |                 |
       |        |                 |_____login-home.php
       |        |                 |
       |        |                 |_____logout-home.php
       |        |                 |
       |        |                 |_____manage-admin.php
       |        |                 |
       |        |                 |_____manage-category.php
       |        |                 |
       |        |                 |_____manage-food.php
       |        |                 |
       |        |                 |_____manage-order.php
       |        |                 |
       |        |                 |_____update-admin.php
       |        |                 |
       |        |                 |_____update-category.php
       |        |                 |
       |        |                 |_____update-food.php
       |        |                 |
       |        |                 |______update-order.php
       |        |                 |
       |        |                 |______update-password.php
       |        |                 |
       |        |                 |
       |        |                 |_______css
       |        |                          |
       |        |                          |____admin.css
       |        | 
       |        | 
       |        |                         
       |        |____Restaurant-food
       |                  |
       |                  |
       |                  |____admin
       |                          |  
       |                          |____partials
       |                          |        |
       |                          |        |______footer.php
       |                          |        |
       |                          |        |______login-check.php
       |                          |        |
       |                          |        |______menu.php
       |                          |        
       |                          |____add-admin.php  
       |                          |        
       |                          |____add-category.php              
       |                          |           
       |                          |____add-food.php
       |                          |
       |                          |____delete-admin.php
       |                          |
       |                          |____delete-category.php
       |                          |
       |                          |_____index.php
       |                          |
       |                          |_____login-rest.php
       |                          |
       |                          |_____logout-rest.php
       |                          |
       |                          |_____manage-admin.php
       |                          |
       |                          |_____manage-category.php
       |                          |
       |                          |_____manage-food.php
       |                          |
       |                          |_____manage-order.php
       |                          |
       |                          |_____update-admin.php
       |                          |
       |                          |_____update-category.php
       |                          |
       |                          |_____update-food.php
       |                          |
       |                          |______update-order.php
       |                          |
       |                          |______update-password.php
       |                          |
       |                          |______update-reservation.php
       |                          |
       |                          |______update-train.php
       |                          |
       |                          |
       |                          |_______css
       |                                   |
       |                                   |____admin.css
       |                        
       |                         
       |_____Blog                         
       |       |                         
       |       |____add-books.php                         
       |       |                         
       |       |____add-podcast.php                         
       |       |                         
       |       |____add-receipies-eng.php                         
       |       |                         
       |       |____add-receipies-tam.php                          
       |       |                         
       |       |____update-receipies-eng.php                      
       |       |                         
       |       |____update-receipies-tam.php                          
       |
       |
       |
       |
       |
       |
       |
       |______Chef
       |        |
       |        |___partials                     
       |        |       |
       |        |       |____footer.php               
       |        |       |               
       |        |       |_____login-check.php
       |        |       |
       |        |       |_____menu.php
       |        |
       |        |
       |        |       
       |        |                       
       |        |                      
       |        |____hiring-details.php                       
       |        |
       |        |____index.php                       
       |        |                       
       |        |____login-chef.php
       |        |                                      
       |        |____logout-check.php                       
       |        |
       |        |____manage-notification.php                                       
       |        |                      
       |        |____register-chef.php 
       |                                             
       |                               
       |        
       |                                             
       |                                
       |                                
       |
       |
       |
       |
       |____Front-end
       |        |   
       |        |____about
       |        |      |____about.html (About page)
       |        | 
       |        |____css
       |        |      |____style.css (Css for all webpages)
       |        |    
       |        |____features
       |        |        |
       |        |        |_____Blog
       |        |        |
       |        |        |_____Chef
       |        |        |
       |        |        |_____Train-service
       |        | 
       |        |  
       |        |____food-types
       |        |        |
       |        |        |______Home-made
       |        |        |          |
       |        |        |          |______home-categories.php  (Categories page)
       |        |        |          |
       |        |        |          |______home-categories-foods.php
       |        |        |          |
       |        |        |          |______home-foods.php     (Food menu page)
       |        |        |          |
       |        |        |          |______home-food-search.php
       |        |        |          |
       |        |        |          |______home-made.php (Home page for Home made foods)
       |        |        |          |
       |        |        |          |______home-order.php
       |        |        |           
       |        |        |
       |        |        |______Restaurant
       |        |                   |
       |        |                   |______restaurant.php    (Home Page for Restaurant foods)
       |        |                   |
       |        |                   |______rest-categories.php   (Categories page)
       |        |                   |
       |        |                   |______rest-categories-foods.php
       |        |                   |
       |        |                   |______rest-foods.php     (Food menu page)
       |        |                   |
       |        |                   |______rest-food-search.php
       |        |                   |
       |        |                   |______rest-order.php     
       |        |        
       |        |____images(all images)
       |        |____pdf
       | 
       |
       |____Add-rest_home-made.php
       |
       |____index.php
       |
       |____Harversine-formula.txt
       |
       |____Remaining Train & chef main page
```
