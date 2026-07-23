<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny Light</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/CSS/main.css">
    <link rel="stylesheet" href="assets/CSS/outdoor-lights-productpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">

    <style>

        

        .mysidebar {
            /* max-height: 180vh; */
                scroll-behavior: smooth !important;
                
    /* scrollbar-width: none !important; */
        }
    </style>

</head>

<body>
    <!-- Header Section -->
    <?php include 'include/header.php'; ?>

    <!-- production category section -->
    <section class="productpage-category mt-4">
        <div class="page-width main-productcategory">
            <!-- left part -->
            <div class="mysidebar">
                <div class="mysidebar-section">
                    <div class="mysidebar-header">
                        <h4>Surface Lights</h4>
                                          <button class="dropdown-toggle" id="mobileDropdownBtn">
        <i class="fa fa-chevron-down"></i>
    </button>
                    </div>
                    <div class="mysidebar-content" id="mobileDropdownContent">
                        <ul class="mysidebar-list">
                            <li><a href="#" id="all-products-link" class="filter-link active" data-category="all">All Products</a></li>
                          <li><a href="#Cob-Surface-Lights" class="filter-link" data-category="uplighters">Cob Surface Lights</a></li>
                                     <li><a href="#Smd-Surface-Lights" class="filter-link" data-category="uplighters">SMD Surface Lights</a></li>
                                     <li><a href="#Surface-Cob-Downlights" class="filter-link" data-category="uplighters">Surface Cob Downlights</a></li>
                            <!-- <li><a href="#Surface/Track-Lights" class="filter-link"
                                    data-category="uplighters">Surface/Track/Recessed Led Spot Lights</a></li>
                            <li><a href="#IP54-Cylinder-Lights" class="filter-link" data-category="uplighters">IP54 Rating
                                    Surface Cylinder Lights</a></li> -->
                      
                                    





                        </ul>
                    </div>
                </div>
            </div>

            <!-- right product grid -->
            <div class="products-grid">

             <!-- Back to All Products Button -->
                <div class="back-to-all" id="backToAll">
                    <button id="backButton" onclick="resetFilter()">
                        <i class="fas fa-arrow-left"></i> Back to All Products
                    </button>
                </div>

                <div class="products-container">
                  
   <!-- Product Group 1 Cob Surface Lights-->
                    <div class="product-group" id="Cob-Surface-Lights">
                        <h3 class="product-group-title">Cob Surface Lights</h3>
                        <div class="products-container">
                               <a href="surface-light-details-page.php?id=1" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-1.jpg"
                                            alt="Cob Surface Light" class="default-image">
                                        <img src="assets/img/surface/sur-1-2.jpg"
                                            alt="Cob Surface Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Cob Surface Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX SF 1115</div>
                                    </div>
                                </div>
                            </a>

                            <a href="surface-light-details-page.php?id=2" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-2.jpg"
                                            alt="Cob Surface Light" class="default-image">
                                        <img src="assets/img/surface/sur-2-1.jpg"
                                            alt="Cob Surface Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Cob Surface Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX SF 1130</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                      <!-- Product Group 2 SMD Surface Lights-->
                    <div class="product-group" id="Smd-Surface-Lights">
                        <h3 class="product-group-title">SMD Surface Lights</h3>
                        <div class="products-container">
                               <a href="surface-light-details-page.php?id=3" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-3.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-4-use.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SMD Surface Light</h3>
                                        <div class="product-model"><span>Model:</span> SL DL SF 8</div>
                                    </div>
                                </div>
                            </a>

                            <a href="surface-light-details-page.php?id=4" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-3.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-4-1.webp"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SMD Surface Light</h3>
                                        <div class="product-model"><span>Model:</span> SL DL SF 15</div>
                                    </div>
                                </div>
                            </a>

                              <a href="surface-light-details-page.php?id=5" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-3.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-4-2use.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SMD Surface Light</h3>
                                        <div class="product-model"><span>Model:</span> SL DL SF 24</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                      <!-- Product Group 3 Surface Cob Downlights-->
                    <div class="product-group" id="Surface-Cob-Downlights">
                        <h3 class="product-group-title">Surface Cob Downlights</h3>
                        <div class="products-container">
                               <a href="surface-light-details-page.php?id=6" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-5.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-7-use2.webp"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 1107-2</div>
                                    </div>
                                </div>
                            </a>

                            <a href="surface-light-details-page.php?id=7" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-6.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/susr-use-7.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 1112-2</div>
                                    </div>
                                </div>
                            </a>

                             <a href="surface-light-details-page.php?id=8" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-7.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-use-3.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 332</div>
                                    </div>
                                </div>
                            </a>

                            <a href="surface-light-details-page.php?id=9" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-11.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-13use.webp"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 308</div>
                                    </div>
                                </div>
                            </a>

                             <a href="surface-light-details-page.php?id=10" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-12.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-use14.png"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 312</div>
                                    </div>
                                </div>
                            </a>

                            <a href="surface-light-details-page.php?id=11" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-12-1.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-use-7.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 318</div>
                                    </div>
                                </div>
                            </a>

                             <a href="surface-light-details-page.php?id=12" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-14.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-use9.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 1103</div>
                                    </div>
                                </div>
                            </a>

                            <a href="surface-light-details-page.php?id=13" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-15.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-use9.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 1104</div>
                                    </div>
                                </div>
                            </a>

                             <a href="surface-light-details-page.php?id=14" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-16.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-use9.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 1105</div>
                                    </div>
                                </div>
                            </a>

                            <a href="surface-light-details-page.php?id=15" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-17.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-use19.webp"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 212</div>
                                    </div>
                                </div>
                            </a>

                             <a href="surface-light-details-page.php?id=16" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-18.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-use20.webp"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 220</div>
                                    </div>
                                </div>
                            </a>

                            <a href="surface-light-details-page.php?id=17" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/surface/sur-19.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/surface/sur-use19.webp"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL BY SF 230</div>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>


                        <!-- Product Group 12 IP54 Rating Surface Cylinder Light-->
                    <!-- <div class="product-group" id="Surface/Track-Lights">
                        <h3 id="#" class="product-group-title">IP54 Rating Surface Cylinder Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=38" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/cy-light.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light-6use.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface/Pendant Cylindrical Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-6420SF 14W</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=39" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/cy-2.png"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light-use6.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface/Pendant Cylindrical Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-6420SF 24W</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=41" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/undefined-1.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/img-195.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SL-SF0725</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=42" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/undefined-1.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/img-196.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SL-SF1225</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=43" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/undefined-1.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/img-192.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SL-SF1825</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=60" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/cy-4.png"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/img-300.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SLBYSF-2184</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=61" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/Untitled-10.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/img-205.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SLBYSF-2185</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=62" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/cy-5.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/img-204.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SLBYSF-2186</div>
                                    </div>
                                </div>
                            </a>
                            <a href="indoor-product-detail-page.php?id=63" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/Untitled-11.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/img-208.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SLBYSF-2187</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div> -->
                    <!-- Product Group 13 Surface/Track/Recessed Led Spot Light-->
                    <!-- <div class="product-group" id="IP54-Cylinder-Lights">
                        <h3 class="product-group-title">Surface/Track/Recessed Led Spot Lights</h3>
                        <div class="products-container">
                               <a href="indoor-product-detail-page.php?id=59" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/img-199.png"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/img-200.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface/Track/Recessed Led Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL1440</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=40" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/light5.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light-use5.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface/Track/Recessed Led Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL1440</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                   -->


                </div>
            </div>
        </div>
    </section>






    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterLinks = document.querySelectorAll('.filter-link');
            const allProductsLink = document.getElementById('all-products-link');
            const productGroups = document.querySelectorAll('.product-group');
            const backToAll = document.getElementById('backToAll');
            const backButton = document.getElementById('backButton');
            
            // Show all products initially
            function showAllProducts() {
                productGroups.forEach(group => {
                    group.classList.remove('hidden');
                });
                backToAll.style.display = 'none';
                
                // Remove active class from all filter links
                filterLinks.forEach(link => {
                    link.classList.remove('active');
                });
                
                // Add active class to All Products link
                allProductsLink.classList.add('active');
            }
            
            // Show only specific product group
            function showProductGroup(groupId) {
                productGroups.forEach(group => {
                    if (group.id === groupId) {
                        group.classList.remove('hidden');
                    } else {
                        group.classList.add('hidden');
                    }
                });
                backToAll.style.display = 'block';
                
                // Scroll to the top of the products grid
                document.querySelector('.products-grid').scrollIntoView({ behavior: 'smooth' });
            }
            
            // Add click event listeners to filter links
            filterLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Skip if this is the All Products link
                    if (this === allProductsLink) {
                        showAllProducts();
                        return;
                    }
                    
                    // Get the target product group ID from href
                    const targetId = this.getAttribute('href').substring(1);
                    
                    // Remove active class from all links
                    filterLinks.forEach(l => l.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Show only the selected product group
                    showProductGroup(targetId);
                });
            });
            
            // Back button functionality
            backButton.addEventListener('click', function() {
                showAllProducts();
            });
            
            // Initialize Swiper
            var myswiper4 = new Swiper(".myswiper4", {
                spaceBetween: 30,
                effect: "fade",
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });

            // Sort functionality (existing code)
            document.getElementById('sort').addEventListener('change', function () {
                const sortValue = this.value;

                document.querySelectorAll('.product-group').forEach(group => {
                    if (!group.classList.contains('hidden')) {
                        const products = Array.from(group.querySelectorAll('.product-card'));

                        products.sort((a, b) => {
                            const priceA = parseFloat(a.getAttribute('data-price'));
                            const priceB = parseFloat(b.getAttribute('data-price'));

                            if (sortValue === 'price-low') {
                                return priceA - priceB;
                            } else if (sortValue === 'price-high') {
                                return priceB - priceA;
                            } else {
                                return 0;
                            }
                        });

                        const container = group.querySelector('.products-container');
                        products.forEach(product => {
                            container.appendChild(product);
                        });
                    }
                });
            });
        });
    </script>

    <!-- Mobile view script -->
 <!-- ===== JS ===== -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("mobileDropdownBtn");
    const content = document.getElementById("mobileDropdownContent");

    btn.addEventListener("click", () => {
      content.classList.toggle("active");
      btn.querySelector("i").classList.toggle("fa-chevron-down");
      btn.querySelector("i").classList.toggle("fa-chevron-up");
    });
  });
</script>

    <!-- Footer Section -->
    <?php include 'include/footer.php'; ?>

    <script src="assets/JS/index.js"></script>
</body>

</html>