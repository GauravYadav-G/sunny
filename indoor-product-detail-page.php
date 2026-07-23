<?php
// Load JSON file
$jsonData = file_get_contents('products.json');
$products = json_decode($jsonData, true);

// Get product ID from URL, e.g., product-details.php?id=2
$productId = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Find product with matching ID
$product = null;
foreach($products as $p){
    if($p['id'] === $productId){
        $product = $p;
        break;
    }
}

// If product not found, show error or redirect
if(!$product){
    echo "Product not found!";
    exit;
}

$smartControls = $product['smart_controls'] ?? null;
$reflectorOptions = $product['reflector_options'] ?? [];
$otherVersions = $product['other_versions'] ?? [];
$cctOptions = $product['options'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['title']; ?> - Product Details</title>
    <link rel="stylesheet" href="assets/CSS/outdoor-recessed-step-light-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">

</head>
<body>
<?php include 'include/header.php'; ?>

<section>
    <div class="page-width">
        <div class="product-container">
            <div class="image-section">
                <div class="thumbnail-wrapper">
                    <button class="thumb-arrow up" id="upArrow" onclick="scrollThumbnails(-100)">
                        <i class="fas fa-chevron-up"></i>
                    </button>
                    <div class="thumbnail-images" id="thumbnailContainer">
                        <?php foreach($product['images'] as $index => $img): ?>
                            <img src="<?php echo $img; ?>" class="thumbnail <?php echo $index === 0 ? 'active' : ''; ?>"
                                 alt="Product view <?php echo $index; ?>" onclick="changeImage(this, <?php echo $index; ?>)">
                        <?php endforeach; ?>
                    </div>
                    <button class="thumb-arrow down" id="downArrow" onclick="scrollThumbnails(100)">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="main-image-container">
                    <div class="main-image-wrapper" id="imageWrapper" onclick="openLightbox()">
                        <img src="<?php echo $product['images'][0]; ?>" class="main-image" id="mainImage" 
                             alt="<?php echo $product['title']; ?>">
                    </div>
                </div>
            </div>

            <div class="details-section">
                <div class="breadcrumb">
                    <a href="index.php"> Home </a> / <a href="indoor-lights-products.php"> Indoor Lights </a> /
                </div>
                <h1 class="product-title"><?php echo $product['title']; ?></h1>
                <div class="product-price"><?php echo $product['model']; ?></div>
                <p class="product-description"><?php echo $product['description']; ?></p>

                <div class="specifications">
                    <h3>Product Specifications</h3>
                    <table class="spec-table">
                        <?php foreach($product['specifications'] as $key => $value): ?>
                            <tr>
                                <th><?php echo $key; ?></th>
                                <td><?php echo $value; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>

                <?php if($smartControls || !empty($reflectorOptions) || !empty($otherVersions) || !empty($cctOptions)): ?>
                <div class="product-enhancements">
                    <h3>Control & Finish Options</h3>

                    <?php if($smartControls): ?>
                    <div class="enhancement-card remote-card">
                        <?php if(!empty($smartControls['image'])): ?>
                        <div class="remote-visual">
                            <img src="<?php echo htmlspecialchars($smartControls['image']); ?>" alt="<?php echo htmlspecialchars($smartControls['title'] ?? 'Remote control'); ?>">
                        </div>
                        <?php endif; ?>
                        <div class="remote-content">
                            <div class="enhancement-heading-row">
                                <h4><?php echo htmlspecialchars($smartControls['title'] ?? 'Remote Control'); ?></h4>
                                <?php if(!empty($smartControls['price'])): ?>
                                <span class="enhancement-price"><?php echo htmlspecialchars($smartControls['price']); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if(!empty($smartControls['summary'])): ?>
                            <p><?php echo htmlspecialchars($smartControls['summary']); ?></p>
                            <?php endif; ?>
                            <?php if(!empty($smartControls['pairing_steps']) && is_array($smartControls['pairing_steps'])): ?>
                            <ul class="enhancement-list">
                                <?php foreach($smartControls['pairing_steps'] as $step): ?>
                                <li><?php echo htmlspecialchars($step); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty($otherVersions)): ?>
                    <div class="enhancement-card reflector-card">
                        <div class="enhancement-heading-row">
                            <h4>Other Versions</h4>
                        </div>
                        <div class="reflector-options product-option-grid">
                            <?php foreach($otherVersions as $option): ?>
                            <?php $optionName = $option['name'] ?? $option['label'] ?? $option['code'] ?? 'Other Version'; ?>
                            <div class="reflector-option">
                                <?php if(!empty($option['image'])): ?>
                                <div class="reflector-image-wrap">
                                    <img src="<?php echo htmlspecialchars($option['image']); ?>" alt="<?php echo htmlspecialchars($optionName); ?>" class="reflector-image">
                                </div>
                                <?php endif; ?>
                                <span class="reflector-label option-name"><?php echo htmlspecialchars($optionName); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty($cctOptions)): ?>
                    <div class="enhancement-card reflector-card">
                        <div class="enhancement-heading-row">
                            <h4>Options</h4>
                        </div>
                        <div class="reflector-options product-option-grid">
                            <?php foreach($cctOptions as $option): ?>
                            <?php $optionName = $option['name'] ?? $option['label'] ?? $option['code'] ?? 'Option'; ?>
                            <div class="reflector-option">
                                <?php if(!empty($option['image'])): ?>
                                <div class="reflector-image-wrap">
                                    <img src="<?php echo htmlspecialchars($option['image']); ?>" alt="<?php echo htmlspecialchars($optionName); ?>" class="reflector-image">
                                </div>
                                <?php else: ?>
                                <span class="reflector-swatch option-swatch" style="--swatch-color: <?php echo htmlspecialchars($option['color'] ?? '#cccccc'); ?>"></span>
                                <?php endif; ?>
                                <span class="reflector-label option-name"><?php echo htmlspecialchars($optionName); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty($reflectorOptions)): ?>
                    <div class="enhancement-card reflector-card">
                        <div class="enhancement-heading-row">
                            <h4>Reflector Color Options</h4>
                        </div>
                        <div class="reflector-options">
                            <?php foreach($reflectorOptions as $option): ?>
                            <?php $optionName = $option['name'] ?? $option['label'] ?? $option['code'] ?? 'Reflector option'; ?>
                            <div class="reflector-option">
                                <?php if(!empty($option['image'])): ?>
                                <div class="reflector-image-wrap">
                                    <img src="<?php echo htmlspecialchars($option['image']); ?>" alt="<?php echo htmlspecialchars($optionName . ' reflector'); ?>" class="reflector-image">
                                </div>
                                <?php else: ?>
                                <span class="reflector-swatch" style="--swatch-color: <?php echo htmlspecialchars($option['color'] ?? '#cccccc'); ?>"></span>
                                <?php endif; ?>
                                <?php if(!empty($option['code'])): ?>
                                <span class="reflector-code"><?php echo htmlspecialchars($option['code']); ?></span>
                                <?php endif; ?>
                                <span class="reflector-label option-name"><?php echo htmlspecialchars($option['label'] ?? $optionName); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <div class="detail-content">
                    <?php if(isset($product['details'])): ?>
                        <?php foreach($product['details'] as $title => $detail): ?>
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $detail; ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <!-- Request Query Button -->
           <button id="requestQueryBtn" class="request-query-btn">Request Query</button>
            </div>
            
        </div>
    </div>
</section>

<div id="queryModal">
    <div class="modal-content">
        <span id="closeQueryModal">&times;</span>
        <h2>Request Query</h2>
        <form action="submit-query.php" method="POST">
            <label>Model Number</label>
<input type="text" name="model_number_display" value="<?php echo $product['model']; ?>" readonly style="width:100%; padding:8px; margin-bottom:10px;">
<input type="hidden" name="model_number" value="<?php echo $product['model']; ?>">
            <label>Email</label>
            <input type="email" name="email" required>
            
            <label>Phone</label>
            <input type="text" name="phone" required>
            
            <label>Your Requirement</label>
            <textarea name="requirement" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</div>


<script>
    const imageData = <?php echo json_encode(array_map(fn($img)=>['thumb'=>$img,'main'=>$img], $product['images'])); ?>;
    let currentImageIndex = 0;

    function changeImage(element, index) {
        const direction = index > currentImageIndex ? 'right' : 'left';
        currentImageIndex = index;

        document.querySelectorAll('.thumbnail').forEach(thumb => thumb.classList.remove('active'));
        element.classList.add('active');

        const newImage = document.createElement('img');
        newImage.src = imageData[index].main;
        newImage.alt = element.alt;
        newImage.className = `main-image ${direction === 'right' ? 'slide-right' : 'slide-left'}`;

        const wrapper = document.getElementById('imageWrapper');
        wrapper.innerHTML = '';
        wrapper.appendChild(newImage);
        newImage.onclick = openLightbox;

        setTimeout(() => {
            newImage.classList.remove('slide-left', 'slide-right');
        }, 500);
    }

    function scrollThumbnails(amount) {
        const container = document.getElementById("thumbnailContainer");
        container.scrollBy({ top: amount, behavior: "smooth" });
    }

    function openLightbox() {
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        lightboxImage.src = imageData[currentImageIndex].main;
        lightbox.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
</script>

<!-- Form script -->
 <script>
    // Open Modal
document.getElementById('requestQueryBtn').onclick = function() {
    document.getElementById('queryModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

// Close Modal
document.getElementById('closeQueryModal').onclick = function() {
    document.getElementById('queryModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside the form
document.getElementById('queryModal').onclick = function(e) {
    if(e.target === this) {
        this.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

 </script>

<?php include 'include/footer.php'; ?>
</body>
</html>
