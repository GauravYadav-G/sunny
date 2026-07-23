<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sunny Lights | LED Panel Light Details</title>
  <link rel="stylesheet" href="assets/CSS/main.css">
  <link rel="stylesheet" href="assets/CSS/outdoor-lights-productpage.css">
  <link rel="stylesheet" href="assets/CSS/indoor-p.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">
</head>

<body>

  <!-- Header Section -->
  <?php include 'include/header.php'; ?>

  <div class="ind-container p-3">
    <div class="left">
      <div class="swiper swiper-product-detail">
        <div class="swiper-wrapper" id="swiperWrapper"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <div class="right">
      <h2 id="productTitle">LED Panel Light Details</h2>
      <table id="productTable">
        <thead></thead> <!-- Remove hardcoded headers -->
        <tbody></tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    // Get product id from URL, default 1
    const params = new URLSearchParams(window.location.search);
    const productId = parseInt(params.get('id')) || 1;

    fetch('indoor.p.json')
      .then(res => res.json())
      .then(data => {
        const product = data.find(p => p.id === productId);
        if (!product) {
          document.getElementById('productTitle').textContent = "Product not found!";
          return;
        }

        // Set product title
        document.getElementById('productTitle').textContent = product.title;

        const table = document.getElementById('productTable');
        const tbody = table.querySelector('tbody');
        const thead = table.querySelector('thead');

        tbody.innerHTML = '';
        thead.innerHTML = '';

        if (product["table-data"].length) {
          // Dynamic headers
          const trHead = document.createElement('tr');
          Object.keys(product["table-data"][0]).forEach(key => {
            const th = document.createElement('th');
            th.textContent = key;
            trHead.appendChild(th);
          });
          thead.appendChild(trHead);

          // Fill table rows
          product["table-data"].forEach(rowData => {
            const tr = document.createElement('tr');
            Object.entries(rowData).forEach(([key, val]) => {
              const td = document.createElement('td');
              td.textContent = val;
              td.setAttribute('data-label', key);
              tr.appendChild(td);
            });
            tbody.appendChild(tr);
          });
        }

        // Fill Swiper slides
        const swiperWrapper = document.getElementById('swiperWrapper');
        swiperWrapper.innerHTML = '';

        const imagesArray = Array.isArray(product.images) ? product.images : [product.images];

        imagesArray.forEach(imgUrl => {
          const slide = document.createElement('div');
          slide.classList.add('swiper-slide');
          slide.innerHTML = `<img src="${imgUrl}" alt="${product.title}">`;
          swiperWrapper.appendChild(slide);
        });

        // Initialize Swiper
        new Swiper('.swiper-product-detail', {
          loop: imagesArray.length > 1,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          slidesPerView: 1,
        });

        // Show/hide arrows
        const nextBtn = document.querySelector('.swiper-button-next');
        const prevBtn = document.querySelector('.swiper-button-prev');
        if (imagesArray.length > 1) {
          nextBtn.style.display = 'block';
          prevBtn.style.display = 'block';
        } else {
          nextBtn.style.display = 'none';
          prevBtn.style.display = 'none';
        }
      })
      .catch(err => console.error('Error loading JSON:', err));
  </script>

  <!-- Footer Section -->
  <?php include 'include/footer.php'; ?>
  <script src="assets/JS/index.js"></script>
</body>

</html>
