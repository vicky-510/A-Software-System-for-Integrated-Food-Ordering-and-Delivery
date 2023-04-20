# Foodies: A Software System for Integrated Food Ordering and Delivery
<p align="center" float: left>
<img src="https://user-images.githubusercontent.com/103897625/228876935-367eba7e-d986-4a83-9212-a0654452c40e.gif"/>
</p> 


          
|      **Project Name**     | A Software System for Integrated Food Ordering and Delivery |
|:---------------------:|:------------------------------:|
|         **Domain**        |  Cloud Application Development |
|        **Website name**        |  foodies |


## __Team Size : 3__


|Role | Name | Linkedin Profile |
| ------------|---------------|---------------|
|Team Leader :| Vigneshwaran M| https://www.linkedin.com/in/vwaran |
|Team member 1 :| Vishnu chidambaram R| https://www.linkedin.com/in/vishnu-chidambaram-r|
|Team member 2 :| Balagi P | https://www.linkedin.com/in/balagi-parthasarathy-854b9916a |


## System Model Design

![architecture diagram](https://user-images.githubusercontent.com/103897625/233459918-1df51789-e437-4fd4-9d65-97572f6e4c68.png)


## Project Description:
An Integrated web application used to order restaurant and home made foods, hire chefs, learn to cook foods through blog, podcasts, etc. This system will makes the food industry very effective.



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
 
 
## 🔗 Links
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/vwaran)
[![twitter](https://img.shields.io/badge/twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white)](https://twitter.com/)


## Author

- [@Vigneshwaran M](https://www.github.com/vicky-510)


## Support

For support, email vignesh510510@gmail.com or join our Slack channel.



    
