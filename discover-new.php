

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
        <h2 class="section-title text-center mb-4">Discover the New Products</h2>
        <div class="discover-grid">
            <!-- Product Card 1 -->
             <a href="discover-new-detailed-page.php?id=2" class="discover-card-link">
            <div class="discover-card">
                <div class="discover-image">
                    <img src="assets/img/Discover-imgs/curve-shape-magnetic-light.png" alt="Product 1" class="default-image">
                    <img src="assets/img/Discover-imgs/curve-shape-light-image.png" alt="Product 1 Hover" class="hover-image">
                </div>
                <div class="discover-info">
                    <h3 class="discover-name">Curve Shape Magnetic Track Light</h3>
                </div>
            </div>
</a>
            <!-- Product Card 2 -->
             <a href="discover-new-detailed-page.php?id=1" class="discover-card-link">
            <div class="discover-card">
                <div class="discover-image">
                    <img src="assets/img/Discover-imgs/tree-spike-light.png" alt="Product 2" class="default-image">
                    <img src="assets/img/Discover-imgs/tree-spike-light-use.png" alt="Product 2 Hover" class="hover-image">
                </div>
                <div class="discover-info">
                    <h3 class="discover-name">Outdoor Garden Tree Spike Light</h3>
                </div>
            </div>
</a>
            <!-- Product Card 3 -->

            <a href="discover-new-detailed-page.php?id=3" class="discover-card-link">
            <div class="discover-card">
                <div class="discover-image">
                    <img src="assets/img/Discover-imgs/display-counter-light.jpeg" alt="Product 3" class="default-image">
                    <img src="assets/img/Indoor-light-img/spot-light/use3.jpg" alt="Product 3 Hover" class="hover-image">
                </div>
                <div class="discover-info">
                    <h3 class="discover-name">Exclusively Jewellery/ Watches Display Counter Light</h3>
                </div>
            </div>
</a>
            <!-- Product Card 4 -->
             <a href="discover-new-detailed-page.php?id=4" class="discover-card-link">
            <div class="discover-card">
                <div class="discover-image">
                    <img src="assets/img/Discover-imgs/Movable-project-light.png" alt="Product 4" class="default-image">
                    <img src="assets/img/Discover-imgs/projector-light-img.jpg" alt="Product 4 Hover" class="hover-image">
                </div>
                <div class="discover-info">
                    <h3 class="discover-name">Outdoor 4 Logo Projector Movable Projector Light</h3>
                </div>
            </div>

            </a> 
        </div>
    </div>
</section>


    <!-- Footer Section -->
    <?php include 'include/footer.php'; ?>

    <script src="assets/JS/index.js"></script>
</body>

</html>