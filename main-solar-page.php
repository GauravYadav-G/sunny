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
                        <h4>Solar Lights</h4>
                                          <button class="dropdown-toggle" id="mobileDropdownBtn">
        <i class="fa fa-chevron-down"></i>
        </button>
                    </div>
                    <div class="mysidebar-content" id="mobileDropdownContent">
                        <ul class="mysidebar-list">
                            <li><a href="#" id="all-products-link" class="filter-link active" data-category="all">All Products</a></li>
                            <li><a href="#solar-lights" class="filter-link" data-category="solar">Outdoor Solar
                                    Garden Lights</a>
                            </li>
                            <li><a href="#Automatic-Sensor-Lights" class="filter-link" data-category="solar">Automatic Sensor Based Solar Garden Bollard Lights</a>
                            </li>
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
                    <!-- Product Group 1 solar garden lights-->

                    <div class="product-group" id="solar-lights">
                        <h3 class="product-group-title">Outdoor Solar Garden Lights</h3>
                        <div class="products-container">

                            <a href="solar-product-details-page.php?id=46" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-2.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-iuse.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SLSUN-9900</div>
                                    </div>
                                </div>
                            </a>

                            <a href="solar-product-details-page.php?id=47" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-3.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-2use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SLR 9901</div>
                                    </div>
                                </div>
                            </a>

                            <a href="solar-product-details-page.php?id=48" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-4.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-3use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SLR 9903</div>
                                    </div>
                                </div>
                            </a>

                            <a href="solar-product-details-page.php?id=49" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-7.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-4use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SLSUN-9902</div>
                                    </div>
                                </div>
                            </a>

                            <a href="solar-product-details-page.php?id=50" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-9.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-5use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL SUN-9905GT-3IN1</div>
                                    </div>
                                </div>
                            </a>
                            <a href="solar-product-details-page.php?id=51" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-6.png"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-6use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL SUN-9906PL-6000K</div>
                                    </div>
                                </div>
                            </a>
                            <a href="solar-product-details-page.php?id=52" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-11.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-7use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL SUN-9907-SPIKE-RGB</div>
                                    </div>
                                </div>
                            </a>
                           
                        </div>
                    </div>
 <!-- product group 2 Automatic-Sensor-Based-Solar-Garden-Bollard-Lights -->

                    <div class="product-group" id="Automatic-Sensor-Lights">
                        <h3 class="product-group-title">Automatic Sensor Based Solar Garden Bollard Lights</h3>
                        <div class="products-container">



                             <a href="solar-product-details-page.php?id=53" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/sensor/s-l-20.jpg"
                                            alt="Automatic Sensor Based Outdoor Solar Garden Light"
                                            class="default-image">
                                        <img src="assets/img/sensor/s-l-17.webp"
                                            alt="Automatic Sensor Based Outdoor Solar Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Automatic Sensor Based Solar Garden Bollard Light</h3>
                                        <div class="product-model"><span>Model:</span> SLR BL 9999</div>
                                        <!-- <p class="product-price">₹ 950</p> -->
                                    </div>
                                </div>
                            </a>

                         

                        </div>
                    </div>


                    <!-- Additional product groups would go here -->
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