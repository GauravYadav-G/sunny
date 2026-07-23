<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny Light</title>
    <link rel="stylesheet" href="assets/CSS/main.css">
    <link rel="stylesheet" href="assets/CSS/blog-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">


</head>

<body>
    <!-- Header Section -->
    <?php include 'include/header.php'; ?>

    <!-- Hero Section -->
    <section class="blog-hero">
         <!-- Desktop Banner -->
        <img src="assets/img/blog-img/blog.jpg" alt="Sunny Lights" width="100%" class="desktop-banner">

        <!-- Mobile Banner -->
    <img src="assets/img/blog-img/blog-mobile.jpg" alt="Sunny Lights" class="mobile-banner" width="100%">
    </section>

    <!-- Blog Grid -->
    <section>
        <div class="page-width">
            <div class="blog-grid">
                <!-- Blog Card 1 -->
                <div class="blog-card">
                    <div class="card-image">
                        <img src="assets/img/Indoor-light-img/surface-downlight.png" alt="Indoor LED Lighting"
                            width="100%">
                        <div class="card-date">August 19, 2025</div>
                    </div>
                    <div class="card-content">
                        <h3>10 Creative Ideas for Indoor LED Lighting</h3>
                        <p>Discover modern ways to transform your living space using stylish and energy-efficient LED
                            lights.</p>
                        <a href="blog-details.php?id=1" class="read-more">Read More</a>
                    </div>
                </div>

                <!-- Blog Card 2 -->
                <div class="blog-card">
                    <div class="card-image">
                        <img src="assets/img/blog-smart-light.png" alt="Indoor LED Lighting" width="100%">
                        <div class="card-date">August 15, 2025</div>
                    </div>
                    <div class="card-content">
                        <h3>Smart LED Lighting Trends in 2025</h3>
                        <p>Explore how smart LED systems are changing the way we light our homes and offices.</p>
                        <a href="blog-details.php?id=2" class="read-more">Read More</a>
                    </div>
                </div>



                <!-- Blog Card 3 -->
                <div class="blog-card">
                    <div class="card-image">
                        <img src="assets/img/garden-light.png" alt="Outdoor LED Lighting" width="100%">
                        <div class="card-date">August 11, 2025</div>
                    </div>
                    <div class="card-content">
                        <h3>Outdoor LED Lighting Ideas for Gardens & Pathways</h3>
                        <p>Make your outdoor spaces safer and more beautiful with the right LED lights and designs.</p>
                        <a href="blog-details.php?id=3" class="read-more">Read More</a>
                    </div>
                </div>

                <!-- Blog Card 4 -->
                <div class="blog-card">
                    <div class="card-image">
                        <img src="assets/img/blog-img.png" alt="Indoor LED Lighting" width="100%">
                        <div class="card-date">July 29, 2025</div>
                    </div>
                    <div class="card-content">
                        <h3>Choosing the Right LED Lights for Your Home</h3>
                        <p>A complete guide to selecting the perfect LED lighting solutions for every room in your
                            house.</p>
                        <a href="blog-details.php?id=4" class="read-more">Read More</a>
                    </div>
                </div>



                <!-- Blog Card 5 -->
                <div class="blog-card">
                    <div class="card-image">
                        <img src="assets/img/Screenshot 2025-08-19 164943.png" alt="Indoor LED Lighting" width="100%">
                         <div class="card-date">June 19, 2025</div>
                    </div>
                    <div class="card-content">
                        <h3>Energy Saving with LED: Myths & Facts</h3>
                        <p>Clear the confusion about LED efficiency and learn how much you can really save on energy
                            bills.</p>
                        <a href="blog-details.php?id=5" class="read-more">Read More</a>
                    </div>
                </div>

                <!-- Blog Card 6 -->
                <div class="blog-card">
                    <div class="card-image">
                        <img src="assets/img/blog-img3.png" alt="Indoor LED Lighting" width="100%">
                         <div class="card-date">May 19, 2025</div>
                    </div>
                    <div class="card-content">
                        <h3>How to Maintain Your LED Lights for Longer Life</h3>
                        <p>Simple tips and tricks to keep your LED lights shining bright for years to come.</p>
                        <a href="blog-details.php?id=6" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <h2>Subscribe to Our Newsletter</h2>
        <p>Stay updated with our latest articles, news, and exclusive offers delivered straight to your inbox.</p>
        <form class="subscribe-form">
            <input type="email" placeholder="Enter your email address" required>
            <button type="submit">Subscribe</button>
        </form>
    </section>

    <!-- Footer Section -->
    <?php include 'include/footer.php'; ?>
    <script src="assets/JS/index.js"></script>
</body>

</html>