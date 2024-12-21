<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
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
    <div class="heading" style="background:url('./images/header-bg-3.jpg') no-repeat center center; background-size: cover; height: 300px;">
    <h1>Book</h1>
    </div>

    <!-- Booking section starts -->
    <section class="booking">
        <h1 class="heading-title">Booking your Trip</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" placeholder="Enter your name" name="name" required>
                </div>

                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" placeholder="Enter your email" name="email" required>
                </div>

                <div class="inputBox">
                    <span>phone:</span>
                    <input type="number" placeholder="Enter your phone number" name="phone" required>
                </div>

                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" placeholder="Enter your address" name="address" required>
                </div>

                <div class="inputBox">
                    <span>where to:</span>
                    <input type="text" placeholder="Place you want to visit" name="location" required>
                </div>

                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" placeholder="How many people" name="guest" required>
                </div>

                <div class="inputBox">
                    <span>arrival:</span>
                    <input type="date" name="arrivals" required>
                </div>

                <div class="inputBox">
                    <span>leaving:</span>
                    <input type="date" name="leaving" required>
                </div>
            </div>
            <input type="submit" value="Submit" class="btn" name="send">
        </form>
    </section>
    <!-- Booking section ends -->

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
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
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
