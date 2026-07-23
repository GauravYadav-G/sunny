<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny Light - Outdoor Lights</title>

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

    <style>
        /* Additional CSS for filtering functionality */
        .product-group {
            display: block;
        }
        
        .product-group.hidden {
            display: none;
        }
        
        .back-to-all {
            display: none;
            margin-bottom: 20px;
            background-color: #f8f9fa;
            padding: 10px 15px;
            border-radius: 5px;
            border-left: 4px solid #007bff;
        }
        
        .back-to-all button {
            background: none;
            border: none;
            color: #007bff;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .back-to-all button:hover {
            color: #0056b3;
        }
        
        .filter-link.active {
            background-color: #e9ecef;
            font-weight: bold;
            color: #007bff !important;
        }
        
        /* Ensure proper spacing */
        .mysidebar {
            scroll-behavior: smooth;
        }
        
        /* Add All Products link styling */
        .all-products-link {
            font-weight: bold;
            color: #007bff !important;
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
                        <h4>Outdoor Lights</h4>
                    </div>
                    <div class="mysidebar-content">
                        <ul class="mysidebar-list">
                            <!-- Add All Products link -->
                            <li><a href="#" class="filter-link all-products-link active" id="all-products-link">All Products</a></li>
                            <li><a href="#Recessed Step Light" class="filter-link" data-category="step-light">Outdoor Recessed Step Light</a></li>
                            <li><a href="#Surface Step/Wall Light" class="filter-link" data-category="wall-light">Outdoor Surface Step/Wall Light</a></li>
                            <li><a href="#mini-wall" class="filter-link" data-category="mini-wall">Outdoor Mini Series Wall Lights</a></li>
                            <li><a href="#adjustable-wall-lights" class="filter-link" data-category="adjustable-wall">Led Linear Adjustable Outdoor Wall Washer Lights</a></li>
                            <li><a href="#garden-spike-lights" class="filter-link" data-category="garden-spike">Outdoor Garden Spike Lights</a></li>
                            <li><a href="#pathway-lights" class="filter-link" data-category="pathway">Inground Burial Pathway Light</a></li>
                            <li><a href="#Tiltable-Garden-Bollard-Light" class="filter-link" data-category="pathway">Tiltable Garden Bollard Light</a></li>
                            <li><a href="#Inground-led-burial" class="filter-link" data-category="burial">Outdoor Inground LED Burial Light</a></li>
                            <li><a href="#Mini-Inground-Lights" class="filter-link" data-category="burial">Mini Inground Lights</a></li>
                            <li><a href="#narrow-beam-lights" class="filter-link" data-category="uplighters">Outdoor Narrow Beam Uplighters</a></li>
                            <li><a href="#solar-garden-lights" class="filter-link" data-category="solar">Outdoor Solar Garden Lights</a></li>
                            <li><a href="#Automatic-Sensor-Based-Solar-Garden-Bollard-Lights" class="filter-link" data-category="solar">Automatic Sensor Based Solar Garden Bollard Lights</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- right product grid -->
            <div class="products-grid">
                <!-- Back to All Products Button -->
                <div class="back-to-all" id="backToAll">
                    <button id="backButton">
                        <i class="fas fa-arrow-left"></i> Back to All Products
                    </button>
                </div>

                <div class="products-container">
                    <!-- Product Group 1 -->
                    <div class="product-group" id="Recessed Step Light">
                        <h3 id="Recessed Step Light" class="product-group-title">Outdoor Recessed Step Lights</h3>
                        <div class="products-container">
                            <!-- Your product cards for this group -->
                            <a href="outdoor-product-detail-page.php?id=1" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/OUTDOOR-RECESSED-STEP-LIGHT-m.jpg" alt="OUTDOOR RECESSED STEP LIGHT" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/9627-1.jpg" alt="OUTDOOR RECESSED STEP LIGHT USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL 9627</div>
                                    </div>
                                </div>
                            </a>
                            <!-- More product cards... -->
                        </div>
                    </div>

                    <!-- Other product groups would follow the same pattern -->
                    <!-- Product Group 2 -->
                    <div class="product-group" id="Surface Step/Wall Light">
                        <h3 id="Surface Step/Wall Light" class="product-group-title">Outdoor Surface Step/Wall Lights</h3>
                        <div class="products-container">
                            <!-- Product cards for this group -->
                        </div>
                    </div>

                    <!-- Continue with all other product groups... -->
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

    <!-- Footer Section -->
    <?php include 'include/footer.php'; ?>

    <script src="assets/JS/index.js"></script>
</body>

</html>