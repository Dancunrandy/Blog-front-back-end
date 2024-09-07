<?php include("path.php");
      include(ROOT_PATH . "/app/database/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d7c1c9e0e8.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <!-- Custom styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
</head>
<body>
    <?php include(ROOT_PATH ."/app/dry/header.php");?>
    <!-- page wrapper -->
    <div class="page-wrapper">
        <!-- Post Slider -->
           <div class="post-slider">
                <h1 class="slider-title">Trending Posts</h1>
                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>
                
                    <div class="post-wrapper">
                    
                        <div class="post">
                            <img src="assets/images/image2.jpg" alt="" class="slider-image">
                            <div class="post-info">
                                <h4><a href="single.html">Ai is making software engineering become Easy peasy</a></h4>
                                <i class="far fa-user">Dante</i>
                                &nbsp;
                                <i class="far fa-calendar"> April 3, 2024</i>
                            </div>
                        </div>
                        <div class="post">
                            <img src="assets/images/image1.jpg" alt="" class="slider-image">
                            <div class="post-info">
                                <h4><a href="single.html">Ai is making software engineering become Easy peasy</a></h4>
                                <i class="far fa-user">Dante</i>
                                &nbsp;
                                <i class="far fa-calendar"> April 3, 2024</i>
                            </div>
                        </div>
                        <div class="post">
                            <img src="assets/images/image3.jpg" alt="" class="slider-image">
                            <div class="post-info">
                                <h4><a href="single.html">Ai is making software engineering become Easy peasy</a></h4>
                                <i class="far fa-user">Dante</i>
                                &nbsp;
                                <i class="far fa-calendar"> April 3, 2024</i>
                            </div>
                        </div>
                        <div class="post">
                            <img src="assets/images/image4.jpg" alt="" class="slider-image">
                            <div class="post-info">
                                <h4><a href="single.html">Ai is making software engineering become Easy peasy</a></h4>
                                <i class="far fa-user">Dante</i>
                                &nbsp;
                                <i class="far fa-calendar"> April 3, 2024</i>
                            </div>
                        </div>
                        <div class="post">
                            <img src="assets/images/image2.jpg" alt="" class="slider-image">
                            <div class="post-info">
                                <h4><a href="single.html">Ai is making software engineering become Easy peasy</a></h4>
                                <i class="far fa-user">Dante</i>
                                &nbsp;
                                <i class="far fa-calendar"> April 3, 2024</i>
                            </div>
                        </div>
                        
                    </div>
           </div> 
        
        <!-- End of Post slider -->
        <!-- Content -->
        <div class="content clearfix">
        <!-- Main content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>
                <div class="post clearfix">
                    <img src="assets/images/image3.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Why Coding is the best skill to acquire currently</a></h3>
                        <i class="far fa-user"> Dante</i>
                        &nbsp;
                        <i class="far calendar">April 3, 2024</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Nam quaerat sint saepe dignissimos excepturi inventore, a in ipsam numquam expedita.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/image4.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Why Coding is the best skill to acquire currently</a></h3>
                        <i class="far fa-user"> Dante</i>
                        &nbsp;
                        <i class="far calendar">April 3, 2024</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Nam quaerat sint saepe dignissimos excepturi inventore, a in ipsam numquam expedita.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/image1.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Why Coding is the best skill to acquire currently</a></h3>
                        <i class="far fa-user"> Dante</i>
                        &nbsp;
                        <i class="far calendar">April 3, 2024</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Nam quaerat sint saepe dignissimos excepturi inventore, a in ipsam numquam expedita.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/image2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Why Coding is the best skill to acquire currently</a></h3>
                        <i class="far fa-user"> Dante</i>
                        &nbsp;
                        <i class="far calendar">April 3, 2024</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Nam quaerat sint saepe dignissimos excepturi inventore, a in ipsam numquam expedita.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="search...">
                    </form>
                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">Health</a></li>
                        <li><a href="#">Gigs</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Education</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--  End of Content -->
    </div>
    
    <!-- End of page wrapper -->
    <!-- Footer -->
    <?php include(ROOT_PATH ."/app/dry/footer.php"); ?>
    <!-- //Footer -->
    
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>