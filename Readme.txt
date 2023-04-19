


food-integration
       |        
       |____Back-end
       |        |   
       |        |____Home-food
       |        | 
       |        |____Restaurant-food
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
       |        |        |          |______home-categories.html  (Categories page)
       |        |        |          |
       |        |        |          |______home-categories-foods.html
       |        |        |          |
       |        |        |          |______home-foods.html     (Food menu page)
       |        |        |          |
       |        |        |          |______home-food-search.html
       |        |        |          |
       |        |        |          |______home-made.html  (Home page for Home made foods)
       |        |        |          |
       |        |        |          |______home-order.html
       |        |        |           
       |        |        |
       |        |        |______Restaurant
       |        |                   |
       |        |                   |______restaurant.html    (Home Page for Restaurant foods)
       |        |                   |
       |        |                   |______rest-categories.html   (Categories page)
       |        |                   |
       |        |                   |______rest-categories-foods.html
       |        |                   |
       |        |                   |______rest-foods.html     (Food menu page)
       |        |                   |
       |        |                   |______rest-food-search.html
       |        |                   |
       |        |                   |______rest-order.html     
       |        |        
       |        |____images
       |        |____pdf
       |  
       |____Add-rest_home-made.html (Registration Page)
       |      
       |____index.html
       |
       |____Readme.txt


    

    The formula used in the code is the Haversine formula, which is a formula that calculates the great-circle distance between two points on a sphere (such as the Earth). The Haversine formula takes into account the curvature of the Earth's surface, making it more accurate than simpler methods that assume a flat Earth.

The formula is as follows:

a = sin²(Δlat/2) + cos(lat1) * cos(lat2) * sin²(Δlon/2)
c = 2 * atan2( √a, √(1−a) )
d = R * c

Where:

lat1 and lon1 are the latitude and longitude of the train location, in radians.
lat2 and lon2 are the latitude and longitude of the restaurant location, in radians.
Δlat = lat2 - lat1
Δlon = lon2 - lon1
R is the radius of the Earth (in this case, 6373.0 km, which is the average radius of the Earth).
d is the distance between the two points, in kilometers.
The formula calculates the distance between two points on a sphere using the angle between them (in this case, the angle between the two points on the Earth's surface). The formula uses the trigonometric functions sin and cos to calculate this angle, and the inverse tangent function atan2 to convert the angle to a distance.