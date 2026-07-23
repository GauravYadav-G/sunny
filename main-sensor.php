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
                        <h4>Sensor Lights</h4>
                                          <button class="dropdown-toggle" id="mobileDropdownBtn">
        <i class="fa fa-chevron-down"></i>
    </button>
                    </div>
                    <div class="mysidebar-content" >
                        <ul class="mysidebar-list" id="mobileDropdownContent">
                            <li><a href="#" id="all-products-link" class="filter-link active" data-category="all">All Products</a></li>
                         
                            <li><a href="#Quick-Sense-Sensors"   class="filter-link" >Quick Sense Sensors</a></li>
                            <li><a href="#Motion-Sensor-Lights"  class="filter-link"  >PIR Motion Sensor Lights</a></li>
                            <li><a href="#Outdoor-Motion-Sensor-Lights"  class="filter-link" >Outdoor Motion Sensor Lights</a></li>
                            <li><a href="#SL-Smart-Sensors-Accessories"  class="filter-link" >SL Smart Sensors & Accessories</a></li>
                            <li><a href="#SL-Battery-Operated-Cabinet-Drawer-Lights"  class="filter-link" >SL Battery Operated Cabinet & Drawer Lights</a></li>
                     






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
                  

                        <!-- Product Group 1 Quick-Sense-Sensors-->
                    <div class="product-group" id="Quick-Sense-Sensors">
                        <h3 id="#" class="product-group-title">Quick Sense Sensors</h3>
                        <div class="products-container">

                            <a href="sensor-details-page.php?id=1" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/sensor/sns-3.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/sensor/sns-3.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Quick Sense Sensor-Wall Recessed</h3>
                                        <div class="product-model"><span>Model:</span> SL WL PIR 220</div>
                                    </div>
                                </div>
                            </a>

                            <a href="sensor-details-page.php?id=2" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/sensor/sns-14.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/sensor/sns-14.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Quick Sense Sensor-Ceiling Recessed</h3>
                                        <div class="product-model"><span>Model:</span> SL MIR 220</div>
                                    </div>
                                </div>
                            </a>

                             <a href="sensor-details-page.php?id=3" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/sensor/sns-20.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/sensor/sns-20.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Quick Sense Sensor-Surface Mount</h3>
                                        <div class="product-model"><span>Model:</span> SL SF PIR 220</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- Product Group 2 Motion-Sensor-Lights-->
                    <div class="product-group" id="Motion-Sensor-Lights">
                        <h3 class="product-group-title">PIR Motion Sensor Lights</h3>
                        <div class="products-container">
                                <a href="sensor-details-page.php?id=4" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/sensor/sensor-1.png"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/sensor/sensor-1.png"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">PIR Motion Sensor Light</h3>
                                        <div class="product-model"><span>Model:</span> SL PIR 141 RD</div>
                                    </div>
                                </div>
                            </a>

                             <a href="sensor-details-page.php?id=5" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/sensor/sensor-2.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/sensor/sensor-2.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">PIR Motion Sensor Light</h3>
                                        <div class="product-model"><span>Model:</span> SL PIR 141</div>
                                    </div>
                                </div>
                            </a>

                             <a href="sensor-details-page.php?id=6" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/sensor/sensor-3.png"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/sensor/sensor-3.png"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">PIR Motion Sensor Light</h3>
                                        <div class="product-model"><span>Model:</span> SL PIR 151</div>
                                    </div>
                                </div>
                            </a>

                         

                        </div>
                    </div>

                    <!-- Product Group 3 Outdoor Motion Sensor Lights-->
                    <div class="product-group" id="Outdoor-Motion-Sensor-Lights">
                        <h3 class="product-group-title"> Outdoor Motion Sensor Lights</h3>
                        <div class="products-container">
                                <a href="sensor-details-page.php?id=7" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/sensor/sen-1.webp"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/sensor/sen-1use.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Outdoor Motion Sensor Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL PIR 803</div>
                                    </div>
                                </div>
                            </a>

                             <a href="sensor-details-page.php?id=8" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/sensor/sen-2.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/sensor/sen-2use.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Outdoor Motion Sensor Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL PIR 401A</div>
                                    </div>
                                </div>
                            </a>

                         

                        </div>
                    </div>

                    <!-- Product Group 4 SL Smart Sensors & Accessories-->
                    <div class="product-group" id="SL-Smart-Sensors-Accessories">
                        <h3  class="product-group-title">SL Smart Sensors & Accessories</h3>
                        <div class="products-container">

                        <a href="sensor-details-page.php?id=9" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sn-a12.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sn-a12.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Smart Sensors & Accessories</h3>
                                        <div class="product-model"><span>Model:</span> SLTSS01</div>
                                    </div>
                                </div>
                            </a> 

                            <a href="sensor-details-page.php?id=10" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sns-a13.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sns-a13.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Smart Sensors & Accessories</h3>
                                        <div class="product-model"><span>Model:</span> SLTSS02</div>
                                    </div>
                                </div>
                            </a> 

                            <a href="sensor-details-page.php?id=11" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sns-a14.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sns-a14.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Smart Sensors & Accessories</h3>
                                        <div class="product-model"><span>Model:</span> SLTSS03</div>
                                    </div>
                                </div>
                            </a> 

                            <a href="sensor-details-page.php?id=12" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sns-a-7.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sns-a-7.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Smart Sensors & Accessories</h3>
                                        <div class="product-model"><span>Model:</span> SLAR2100J</div>
                                    </div>
                                </div>
                            </a> 

                            <a href="sensor-details-page.php?id=13" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sns-a8.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sns-a8.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Smart Sensors & Accessories</h3>
                                        <div class="product-model"><span>Model:</span> SLPIR200</div>
                                    </div>
                                </div>
                            </a> 

                            <a href="sensor-details-page.php?id=14" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sns-a9.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sns-a9.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Smart Sensors & Accessories</h3>
                                        <div class="product-model"><span>Model:</span> SLSFPIR220</div>
                                    </div>
                                </div>
                            </a> 

                            <a href="sensor-details-page.php?id=15" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sns-a10.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sns-a10.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Smart Sensors & Accessories</h3>
                                        <div class="product-model"><span>Model:</span> SLLDR290</div>
                                    </div>
                                </div>
                            </a>

                         <a href="indoor-p.php?id=43" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sns-a.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sns-a.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Smart Sensors & Accessories</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 5 SL Battery Operated Cabinet & Drawer Lights-->
                    <div class="product-group" id="SL-Battery-Operated-Cabinet-Drawer-Lights">
                        <h3  class="product-group-title">SL Battery Operated Cabinet & Drawer Lights</h3>
                        <div class="products-container">

                       
                         <a href="indoor-p.php?id=42" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sns-a18.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sns-a18.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Battery Operated Cabinet & Drawer Lights</h3>
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