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
         .mysidebar-header{
          margin-bottom: 24px;
            }

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
                        <h4>Track Lights</h4>
               <button class="dropdown-toggle" id="mobileDropdownBtn">
        <i class="fa fa-chevron-down"></i>
    </button>
                    </div>
                    <div class="mysidebar-content" id="mobileDropdownContent">
                        <ul class="mysidebar-list">
                            <li><a href="#" id="all-products-link" class="filter-link active" data-category="all">All Products</a></li>
                          
                            <li><a href="#Track-Lights"   class="filter-link" >Track Lights</a></li>
                            <li><a href="#GU10-Track-Wall-Spot-Lights"  class="filter-link"  >GU10 Track/Wall Spot Lights</a></li>
                            <li><a href="#SL-Track-Lights"  class="filter-link"  >SL Track Lights</a></li>
                            <li><a href="#SL-Track-Light-Channels-Connectors"  class="filter-link"  >SL Track Light Channels & Connectors</a></li>
                     






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
                  

                        <!-- Product Group 1 Track Lights-->
                    <div class="product-group" id="Track-Lights">
                        <h3 id="#" class="product-group-title">Track Lights</h3>
                        <div class="products-container">

                            <a href="track-light-details-page.php?id=1" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/track/track-1.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/track/track-1.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Track Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CR TR 3012</div>
                                    </div>
                                </div>
                            </a>

                            <a href="track-light-details-page.php?id=2" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/track/track-2.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/track/track-2.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Track Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CR TR 1110 </div>
                                    </div>
                                </div>
                            </a>

                             <a href="track-light-details-page.php?id=3" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/track/track-3.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/track/track-3.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Track Light</h3>
                                        <div class="product-model"><span>Model:</span> SL TR 1010</div>
                                    </div>
                                </div>
                            </a>

                             <a href="track-light-details-page.php?id=4" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/track/track-4.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/track/track-4.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Track Light</h3>
                                        <div class="product-model"><span>Model:</span> SL TR 2020</div>
                                    </div>
                                </div>
                            </a>

                             <a href="track-light-details-page.php?id=5" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/track/track-5.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/track/track-5.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Track Light</h3>
                                        <div class="product-model"><span>Model:</span> SL TR 3030</div>
                                    </div>
                                </div>
                            </a>

                            

                        </div>
                    </div>
                    <!-- Product Group 2 GU10 Track/Wall Spot Lights-->
                    <div class="product-group" id="GU10-Track-Wall-Spot-Lights">
                        <h3 class="product-group-title">GU10 Track/Wall Spot Lights</h3>
                        <div class="products-container">
                                <a href="track-light-details-page.php?id=6" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/track/gu-1.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/track/gu-1.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">GU10 Track/Wall Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL TR GU 10</div>
                                    </div>
                                </div>
                            </a>

                          <a href="track-light-details-page.php?id=7" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/track/gu-2.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/track/gu-2.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">GU10 Track/Wall Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL WL GU 10</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                     <!-- Product Group 3 SL Track Lights-->
                    <div class="product-group" id="SL-Track-Lights">
                        <h3  class="product-group-title">SL Track Lights</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=38" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/track/tr-1.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/track/tr-1.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Track Lights</h3>
                                    </div>
                                </div>
                            </a>   
                            
                             <a href="indoor-p.php?id=39" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/track/tr-7.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/track/tr-7.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Track Lights</h3>
                                    </div>
                                </div>
                            </a>  
                            
                        </div>
                    </div>

                     <!-- Product Group 4 SL Track Light Channels & Connectors-->
                    <div class="product-group" id="SL-Track-Light-Channels-Connectors">
                        <h3  class="product-group-title">SL Track Light Channels & Connectors</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=40" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/track/tr-11.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/track/tr-11.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Track Light Channels & Connectors</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

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