<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Lighting Project Gallery | Real Projects by Sunny Light</title>
<meta name="description" content="View our gallery of completed lighting projects across residential, commercial, and architectural spaces — innovation in every beam of light.">
<meta name="keywords" content="lighting gallery, LED projects, lighting design portfolio, commercial lighting projects, architectural lighting, indoor lighting gallery, outdoor lighting gallery">

  <link rel="stylesheet" href="assets/CSS/main.css">
  <link rel="stylesheet" href="assets/CSS/gallery.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">

  <style>
    
  </style>
</head>

<body>
  <!-- Header -->
  <?php include 'include/header.php'; ?>

  <!-- Hero Image -->
  <section class="gallery-hero">
     <!-- Desktop Banner -->
    <img src="assets/img/gallery/GALLERY.jpg" alt="Sunny Light Gallery" width="100%" class="desktop-view-banner">

       <!-- Mobile Banner -->
    <img src="assets/img/gallery-page-img/sunnybanner4.jpg" alt="Sunny Light Gallery" class="mobile-view-banner" width="100%">
  </section>

  <!-- Gallery Section -->
  <section class="gallery-section">
    <div class="container text-center">
      <h2 class="gallery-title">Our Lighting Projects</h2>
      <p class="gallery-subtitle">Explore our latest customized lighting installations for offices, gyms, and more.</p>

      <div class="gallery-grid">
        <div class="gallery-item" data-category="indoor">
          <img src="assets/img/gallery/c-light-2.jpg" alt="Indoor Light">
          <div class="item-overlay">
            <div class="item-info">
              <h3>Customized Lighting</h3>
              <!-- <p>Indoor Lighting</p> -->
            </div>
          </div>
        </div>

        <div class="gallery-item" data-category="outdoor">
          <img src="assets/img/gallery/c-light-6.jpeg" alt="Outdoor Lighting">
          <div class="item-overlay">
            <div class="item-info">
              <!-- <h3>Architectural Facade Illumination</h3> -->
              <h3>Indoor Lighting</h3>
            </div>
          </div>
        </div>

        <div class="gallery-item" data-category="indoor">
          <img src="assets/img/gallery/c-light5.jpg" alt="Indoor Light">
          <div class="item-overlay">
            <div class="item-info">
              <!-- <h3>Modern Workspace Design</h3> -->
              <h3>Office Lights</h3>
            </div>
          </div>
        </div>

        <div class="gallery-item" data-category="outdoor">
          <img src="assets/img/gallery/gal-1.png" alt="Outdoor Light">
          <div class="item-overlay">
            <div class="item-info">
              <!-- <h3>Landscape Lighting</h3> -->
              <h3>Exterior Projects</h3>
            </div>
          </div>
        </div>

        <div class="gallery-item" data-category="indoor">
          <img src="assets/img/gallery/gal-2.png" alt="Indoor Light">
          <div class="item-overlay">
            <div class="item-info">
              <!-- <h3>Modern Workspace Design</h3> -->
              <h3>Office Lights</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Lightbox -->
  <div class="lightbox">
    <div class="lightbox-content">
      <img src="" alt="Lightbox Image">
      <div class="lightbox-caption">
        <h3></h3>
        <p></p>
      </div>
      <span class="close-lightbox">&times;</span>
    </div>
  </div>

  <!-- JS -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const lightbox = document.querySelector('.lightbox');
      const lightboxImg = document.querySelector('.lightbox-content img');
      const lightboxCaption = document.querySelector('.lightbox-caption h3');
      const lightboxCategory = document.querySelector('.lightbox-caption p');
      const closeLightbox = document.querySelector('.close-lightbox');
      const galleryImages = document.querySelectorAll('.gallery-item');

      // Open Lightbox
      galleryImages.forEach(item => {
        item.addEventListener('click', () => {
          const imgSrc = item.querySelector('img').getAttribute('src');
          const imgAlt = item.querySelector('img').getAttribute('alt');
          const title = item.querySelector('h3').textContent;
        //   const category = item.querySelector('p').textContent;

          lightboxImg.setAttribute('src', imgSrc);
          lightboxImg.setAttribute('alt', imgAlt);
          lightboxCaption.textContent = title;
        //   lightboxCategory.textContent = category;

          lightbox.classList.add('open');
          document.body.style.overflow = 'hidden';
        });
      });

      // Close Lightbox
      closeLightbox.addEventListener('click', () => {
        lightbox.classList.remove('open');
        document.body.style.overflow = 'auto';
      });

      lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
          lightbox.classList.remove('open');
          document.body.style.overflow = 'auto';
        }
      });

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && lightbox.classList.contains('open')) {
          lightbox.classList.remove('open');
          document.body.style.overflow = 'auto';
        }
      });
    });
  </script>

  <!-- Footer -->
  <?php include 'include/footer.php'; ?>

  <script src="assets/JS/index.js"></script>
</body>
</html>
