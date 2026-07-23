<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny Light</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/CSS/main.css">
    <link rel="stylesheet" href="assets/CSS/discover-new.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">

</head>

<body>
    <!-- Header Section -->
    <?php include 'include/header.php'; ?>

    <!-- Top Banner -->
<section class="top-banner">
    <div class="container text-center">
        <!-- <h1 class="banner-title">Welcome to Sunny Light</h1>
        <p class="banner-subtitle">Explore our latest lighting solutions</p> -->
    </div>
</section>

<!-- Discover New Products Section -->
<section class="discover-products py-5">
    <div class="container">
        <h2 class="section-title text-center mb-4">Home Decor Lights</h2>
        <div class="discover-grid">
            <!-- Product Card 1 -->
         <a href="home-d-details-page.php?id=1"  class="discover-card-link">   <div class="discover-card">
               <div class="discover-image">
                    <img src="assets/img/home-decore-light/living-room-light.png" alt="Product 1" class="default-image">
                    <img src="assets/img/home-decore-light/living-room-img.png" alt="Product 1 Hover" class="hover-image">
                </div>
                <div class="discover-info">
                    <h3 class="discover-name">360° Recessed Light Telescope</h3>
                </div>
            </div></a> 

            <!-- Product Card 2 -->
           <a href="home-d-details-page.php?id=2" class="discover-card-link">  <div class="discover-card">
                <div class="discover-image">
                    <img src="assets/img/home-decore-light/sensor-light.png" alt="Product 2" class="default-image">
                    <img src="assets/img/home-decore-light/768b5272-6e30-49d0-bada-463aa70ee044.jpg" alt="Product 2 Hover" class="hover-image">
                </div>
                <div class="discover-info">
                    <h3 class="discover-name">PIR Motion Sensor Light</h3>
                </div>
            </div></a> 

            <!-- Product Card 3 -->
          <a href="home-d-details-page.php?id=3" class="discover-card-link">   <div class="discover-card">
                <div class="discover-image">
                    <img src="assets/img/zz-indoor/track-2-r.png" alt="Product 3" class="default-image">
                    <img src="assets/img/home-decore-light/track-light-img.jpg" alt="Product 3 Hover" class="hover-image">
                </div>
                <div class="discover-info">
                    <h3 class="discover-name">Track Light</h3>
                </div>
            </div></a> 

            <!-- Product Card 4 -->
         <a href="home-d-details-page.php?id=4" class="discover-card-link">  <div class="discover-card">
                <div class="discover-image">
                    <img src="assets/img/home-decore-light/ceiling-light.png" alt="Product 4" class="default-image">
                    <img src="assets/img/home-decore-light/ceiling-light-img.png" alt="Product 4 Hover" class="hover-image">
                </div>
                <div class="discover-info">
                    <h3 class="discover-name">Led Profile/Flexible Neon Profile</h3>
                </div>
            </div>
        </div></a> 
    </div>
</section>


    <!-- Footer Section -->
    <?php include 'include/footer.php'; ?>

    <script src="assets/JS/index.js"></script>
</body>

</html>