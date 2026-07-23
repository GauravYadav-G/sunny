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
                        <h4>Logo Projector Lights</h4>
              <button class="dropdown-toggle" id="mobileDropdownBtn">
        <i class="fa fa-chevron-down"></i>
    </button>
                    </div>
                    <div class="mysidebar-content" id="mobileDropdownContent">
                        <ul class="mysidebar-list">
                
                            <li><a href="#Indoor/Outdoor-Logo-Projector-Light" class="filter-link"
                                    data-category="uplighters">Indoor & Outdoor Logo Projector Lights</a></li>
                          





                        </ul>
                    </div>
                </div>
            </div>

            <!-- right product grid -->
            <div class="products-grid">

                <div class="products-container">

                    <!-- Product Group 1 Indoor & Outdoor Logo Projector Light-->
                    <div class="product-group" id="Indoor/Outdoor-Logo-Projector-Light">
                        <h3 class="product-group-title">Indoor & Outdoor Logo Projector Light</h3>
                        <div class="products-container">

                            <a href="projector-light-details-page.php?id=50" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/logo-projector/logo-projector-use.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/logo-projector/projector-use.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Indoor Single Logo Movable Projector Light</h3>
                                        <div class="product-model"><span>Model:</span> 20W Logo Projector</div>
                                    </div>
                                </div>
                            </a>


                            <a href="projector-light-details-page.php?id=51" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/joiner/projector2.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/logo-projector/projector-light-img.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor 4 Logo Projector Movable Projector Light</h3>
                                        <div class="product-model"><span>Model: </span>SL-LA10D-IP67</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    
                    </div>

                </div>
            </div>
        </div>
    </section>






    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
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

        // Filter functionality
        // document.querySelectorAll('.filter-link').forEach(link => {
        //     link.addEventListener('click', function(e) {
        //         e.preventDefault();

        // Remove active class from all links
        // document.querySelectorAll('.filter-link').forEach(l => l.classList.remove('active'));

        // Add active class to clicked link
        this.classList.add('active');

        // const category = this.getAttribute('data-category');

        // Show all products if "All" is selected
        // if (category === 'all') {
        //     document.querySelectorAll('.product-group').forEach(group => {
        //         group.classList.remove('hidden');
        //     });
        //     return;
        // }

        // Hide all product groups
        // document.querySelectorAll('.product-group').forEach(group => {
        // group.classList.add('hidden');
        // });

        // Show only the selected category
        // if (category) {
        // const targetGroup = document.getElementById(category);
        // if (targetGroup) {
        // targetGroup.classList.remove('hidden');
        // }
        // }
        // });
        // });

        // Sort functionality
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
                            // Default sorting (by original order)
                            return 0;
                        }
                    });

                    // Reappend products in sorted order
                    const container = group.querySelector('.products-container');
                    products.forEach(product => {
                        container.appendChild(product);
                    });
                }
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