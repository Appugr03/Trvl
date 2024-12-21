<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- Swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header section start -->
    <section class="header">
        <a href="index.php" class="logo">Travel</a>
        <nav class="navbar">
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="package.php">Package</a></li>
                <li><a href="book.php">Book</a></li>
            </ul>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header section end -->

    <!-- Heading section start -->
    <div class="heading" style="background:url('./images/header-bg-1.jpg') no-repeat center center; background-size: cover; height: 300px;">
    <h1>About Us</h1>
</div>

    <!-- Heading section end -->


<!-- about section starts -->
    <section class="about">
        <div class="images">
            <img src="./images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>"Experience the world like never before with our personalized travel services, crafted by industry experts to fit your unique needs. Choose us for seamless travel planning and unparalleled adventures."</p>
            <p>We’re dedicated to providing exceptional customer support and exclusive deals that make your journey unforgettable</p>

            <div class="icons-container">
                <div class="icons">
                    <i class="fa-solid fa-map"><span>top destination</span></i>
                        
                    
                </div>

                <div class="icons">
                <i class="fas fa-hand-holding-usd">
                        <span>Afforadable price</span>
                    </i>
                </div>

                <div class="icons">
                <i class="fa-solid fa-headset">
                        <span>24/7 guide service</span>
                    </i>
                </div>

            </div>
        </div>
    </section>


<!-- about section ends -->

<!-- review section starts -->

<section class="review">
    <div class="review-slider">
        <div class="w">
            <div class="slide">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p> The travel and tourism industry is rebounding strongly post-pandemic, contributing significantly to global economies. There's also a growing focus on sustainable tourism, with an emphasis on reducing environmental impact.</p>
                <h3>Siddhi</h3>
                <span>Traveller</span>
                    <img src="./images/pic1.avif" alt="">
            </div>

            <div class="slide">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The rise of wellness tourism reflects a growing demand for travel experiences focused on health and well-being. Additionally, adventure tourism is gaining popularity as travelers seek unique, thrilling experiences in natural settings.</p>
                <h3>Shashank</h3>
                <span>Traveller</span>
                    <img src="./images/pic2.jpg" alt="">
            </div>


            <div class="slide">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p> Overtourism is straining popular destinations, leading to environmental and infrastructural challenges. Meanwhile, the rise of digital nomadism is reshaping travel trends, with countries offering special visas to attract remote workers.</p>
                <h3>Samarth G</h3>
                <span>Traveller</span>
                    <img src="./images/pic3.avif" alt="">
            </div>
        </div>
    </div>
</section>

<!-- review section ends -->





    <!-- Footer section start -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Question</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Term of Use</a>
            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="mailto:apoorvagr09@gmail.com"><i class="fas fa-envelope"></i> apoorvagr09@gmail.com</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> Bangalore, Karnataka - 530068</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>
        <hr class="footer-line">
        <div class="credit">
            © Apoorva G.R. All Rights Reserved.
        </div>
    </section>
    <!-- Footer section end -->

    <!-- Swiper for JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
