<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <a href="index.php" class="logo">Travel Tales</a>
        <nav class="navbar">
            <ul>
                <li><a href="index.php" class="active">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="package.php">package</a></li>
                <li><a href="book.php">book</a></li>
            </ul>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- Header section end -->

<!-- home section start -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(./images/home-slide-1.jpg) no-repeat;">
                <div class="content">
                    <span>explore,discover,Travel</span>
                    <h3>Travel arround the world</h3>
                    <a href="package.php" class="btn" >Discover More</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(./images/home-slide-2.jpg) no-repeat;">
                <div class="content">
                    <span>explore,discover,Travel</span>
                    <h3>Discover the new places</h3>
                    <a href="package.php" class="btn" >Discover More</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(./images/home-slide-3.jpg) no-repeat;">
                <div class="content">
                    <span>explore,discover,Travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn" >Discover More</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- home section end -->








    <!-- service section  start-->
    <section class="service" id="service">
    <h1 class="heading">our services</h1>
    <div class="box-container container">
        <div class="box">
        <i class="fa-solid fa-mountain-sun"></i>
            <h3>Adventure</h3>
        </div>
        <div class="box">
            <i class="fa-solid fa-map"></i>
            <h3>Tour Guide</h3>

        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Trekking</h3>
        </div>
        <div class="box">
            <i class="fa-solid fa-road"></i>
            <h3>Off road</h3>
        </div>
    </div>
</section>
    <!-- service section end -->


<!-- home about section start -->

<section class="home-about">

    <div class="image">
        <img src="./images/about-img.jpg" alt="">
    </div>
    <div class="content">
        <h3>About us</h3>
        <p>
        Welcome to Travel and Tourism, where your journey begins!
        At Travel and Tourism,
        we believe that travel is more than just visiting new places—it's about creating lasting memories, experiencing different cultures, and discovering the world in ways that resonate with your spirit. Our passion for travel drives us to curate the best experiences for adventurers, explorers, and dreamers alike.

        </p>
        <a href="about.php" class="btn">Read more</a>
    </div>

</section>

<!-- home about section end -->


<!-- home package section start -->


<section class="home-packages">
    <h1 class="heading">our pacakges</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="./images/img1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & Tour</h3>
                <p>The Taj Mahal is a breathtaking white marble mausoleum in Agra, India, symbolizing eternal love and architectural brilliance.
                </p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./images/img2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & Tour</h3>
                <p>Waterfalls are mesmerizing natural wonders where water cascades over cliffs, creating stunning visual and auditory experiences. Their powerful descent and serene surroundings offer a breathtaking escape into nature's beauty.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./images/img3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & Tour</h3>
                <p>Deserts are vast, arid landscapes characterized by their extreme dryness and sparse vegetation. Their unique, sun-scorched beauty features sweeping sand dunes, rugged terrain, and a stark, serene environment.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        
    </div>
    <div class="load-more"><a href="package.html" class="btn">load more</a></div>
</section>

<!-- home package section end -->


<!-- home offer section start -->
    <section class="home-offer">
        <div class="content">
            <h3>up to 50% off</h3>
            <p>"Limited Time Offer: Get 50% OFF on All Tours and Adventures!"
"Experience the thrill of a lifetime at half the price."
"Hurry, book now and save big!"

            </p>
        <div class="book-now"><a href="book.php" class="btn">Book now</a></div>
        </div>
    </section>
<!-- home offer section sends -->


















    <!-- footer section start -->
    <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask question</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> Term of use</a>
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


    <!-- footer section end -->



    <!-- Swiper for JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
