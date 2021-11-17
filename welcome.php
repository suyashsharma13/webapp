<?php

session_start();

if (!isset($_SESSION['Customer_ID'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class = "products">
            <div class = "container">
                <h1 class = "lg-title">Our Products</h1>
                <p class = "text-light">We really listen what our users want , both qualitative listenint to words they say and quantitative looking at the behaviour they take</p>

                <div class = "product-items">
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/pic1.jpg" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart">
                                    <span><i class = "fas fa-plus"></i></span>
                                    <a href="ratings.html"> Give Feedback</a>
                                </button>

                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <p>Available in nearby stores - 121001</p><br><br>
                            </div>
                            <a href = "#" class = "product-name">Paper Craft Little Birdie</a>
                            <p class = "product-price">$ 2.08</p>
                            <p class = "product-price">$ 1.56</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "sm-title">25% off</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/pic2.jpg" alt = "product image">
                            </div>
                            <div class = "product-btns">
                            <button type = "button" class = "btn-cart">
                                    <span><i class = "fas fa-plus"></i></span>
                                    <a href="ratings.html"> Give Feedback</a>
                            </button>

                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <p>Available in nearby stores - 121001</p><br><br>
                            </div>
                            <a href = "#" class = "product-name">Medium Ceramic Top Storage Jar</a>
                            <p class = "product-price">$ 1.04</p>
                            <p class = "product-price">$ 0.78</p>
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/pic3.jpg" alt = "product image">
                            </div>
                            <div class = "product-btns">
                            <button type = "button" class = "btn-cart">
                                    <span><i class = "fas fa-plus"></i></span>
                                    <a href="ratings.html"> Give Feedback</a>
                            </button>

                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <p>Available in nearby stores - 121001</p><br><br>
                            </div>
                            <a href = "#" class = "product-name">World War 2 Gliders Asstd. Designs</a>
                            <p class = "product-price">$ 0.21</p>
                            <p class = "product-price">$ 0.16</p>
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/pic4.jpg" alt = "product image">
                            </div>
                            <div class = "product-btns">
                            <button type = "button" class = "btn-cart">
                                    <span><i class = "fas fa-plus"></i></span>
                                    <a href="ratings.html"> Give Feedback</a>
                            </button>

                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <p>Available in nearby stores - 121001</p><br><br>
                            </div>
                            <a href = "#" class = "product-name">Jumbo Bag Red Retro-Spot</a>
                            <p class = "product-price">$ 1.95</p>
                            <p class = "product-price">$ 1.47</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "sm-title">25% off</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/pic5.jpg" alt = "product image">
                            </div>
                            <div class = "product-btns">
                            <button type = "button" class = "btn-cart">
                                    <span><i class = "fas fa-plus"></i></span>
                                    <a href="ratings.html"> Give Feedback</a>
                            </button>

                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <p>Available in nearby stores - 121001</p><br><br>
                            </div>
                            <a href = "#" class = "product-name">White Hanging Heart T-Ligth Holder</a>
                            <p class = "product-price">$ 2.95</p>
                            <p class = "product-price">$ 2.22</p>
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/pic6.jpg" alt = "product image">
                            </div>
                            <div class = "product-btns">
                            <button type = "button" class = "btn-cart">
                                    <span><i class = "fas fa-plus"></i></span>
                                    <a href="ratings.html"> Give Feedback</a>
                            </button>

                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <p>Available in nearby stores - 121001</p><br><br>
                            </div>
                            <a href = "#" class = "product-name">Assorted Colour Bird Ornament</a>
                            <p class = "product-price">$ 1.69</p>
                            <p class = "product-price">$ 1.27</p>
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/pic77.jpg" alt = "product image">
                            </div>
                            <div class = "product-btns">
                            <button type = "button" class = "btn-cart">
                                    <span><i class = "fas fa-plus"></i></span>
                                    <a href="ratings.html"> Give Feedback</a>
                            </button>

                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <p>Available in nearby stores - 121001</p><br><br>
                            </div>
                            <a href = "#" class = "product-name">Pack of 72 Retro-Spot Cake</a>
                            <p class = "product-price">$ 0.55</p>
                            <p class = "product-price">$ 0.41</p>
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/pic8.jpg" alt = "product image">
                            </div>
                            <div class = "product-btns">
                            <button type = "button" class = "btn-cart">
                                    <span><i class = "fas fa-plus"></i></span>
                                    <a href="ratings.html"> Give Feedback</a>
                            </button>

                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <p>Available in nearby stores - 121001</p><br><br>
                            </div>
                            <a href = "#" class = "product-name">Popcorn Holder</a>
                            <p class = "product-price">$ 0.72</p>
                            <p class = "product-price">$ 0.47</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "sm-title">35% off</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
                </div>
            </div>
        </div>

        <div class = "product-collection">
            <div class = "container">
                <div class = "product-collection-wrapper">
                    <!-- product col left -->
                    <div class = "product-col-left flex">
                        <div class = "product-col-content">
                        <h1 class = "md-title"> Top 10 Best Selling Products </h1>

                        
                        <br>
                        <br>
                        <br>
                        <h4 class = "md-title"> 1.Paper Craft Little Birdie </h4>
                        <h4 class = "md-title"> 2.Medium Ceramic Top Storage Jar </h4>
                        <h4 class = "md-title"> 3.World War 2 Gliders Asstd Designs </h4>
                        <h4 class = "md-title"> 4.Jumbo Bag Red retroSpot </h4>
                        <h4 class = "md-title"> 5.White Hanging Heart  </h4>
                        <h4 class = "md-title"> 6.Assorted Color Bird </h4>
                        <h4 class = "md-title"> 7.Pack of 72 Cake Case </h4>
                        <h4 class = "md-title"> 8.Popcorn Holder </h4>
                        <h4 class = "md-title"> 9.Rabbit Night Light </h4>
                        <h4 class = "md-title"> 10.Mini Paint Set </h4>

                        <br>
                        <br>
                        <br>
                       
                       
                       
                        
                            <button type = "button" class = "btn-dark">
                                <a href="top10.html"> View More </a>
                            </button>
                        </div>
                    </div>

                    <!-- product col right -->
                    <div class = "product-col-right">
                        <div class = "product-col-r-top flex">
                            <div class = "product-col-content">
                                
                                
                            <h4 class = "md-title"> 
                             
                            Customer satisfaction can help a company determine how to best improve or changes its products and services. An organization’s main focus must be to satisfy its customers. This applies to government bodies, service companies, nonprofit organizations, and every subgroup within an organization. </h4> 
                              
                            </div>
                        </div>

                        <div class = "product-col-r-bottom">
                            <!-- left -->
                            <div class = "flex">
                                <div class = "product-col-content">
                                    <h2 class = "sm-title"> More Benefits </h2>
                                    <h2 class = "md-title">Extra 50% Off </h2>
                                    <p class = "text-light">We are providing more benefits on certain products for our customers , we want our customers to stay updated with our products . We want the customers top avail benefits for their products . </p>
                                    <button type = "button" class = "btn-dark"> 
                                    <a href="discount.html"> Click To Check Discount Eligibility </a>
                                 </button>
                                </div>
                            </div>
                            <!-- right -->
                         
                            <div class = "flex">
                                <div class = "product-col-content">
                           

                                    <h3 class = "md-title"> Check Our Recommendations For You </h3>
                                    <p class = "text-light">Check the products we are recommending for you , We want them to get the products they should be looking for</p>
                                    <button type = "button" class = "btn-dark"> 
                                    <a href="rec.html"> Recommendation For You </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type = "button" class = "btn-logout"><a href="index.php">Logout</a>
            <?php 
                session_destroy();
            ?>
</button>
        </div>

    </body>


</html>
