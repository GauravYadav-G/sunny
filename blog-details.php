<?php
// Load JSON file
$jsonData = file_get_contents('blog.json');
$blogs = json_decode($jsonData, true);

// Get blog ID from URL, e.g., blog-details.php?id=1
$blogId = isset($_GET['id']) ? $_GET['id'] : "1";

// Find blog with matching ID
$blog = null;
foreach($blogs as $b){
    if($b['id'] === $blogId){
        $blog = $b;
        break;
    }
}

// If blog not found, show error or redirect
if(!$blog){
    echo "Blog not found!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $blog['title']; ?> - Blog Details</title>
    <link rel="stylesheet" href="assets/CSS/main.css">
    <link rel="stylesheet" href="assets/CSS/blog-details-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">
    
</head>
<body>
<?php include 'include/header.php'; ?>

<!-- Blog Banner -->
<section class="blog-details-banner">
    <div class="blog-banner-content">
        <h1><?php echo $blog['title']; ?></h1>
        <p><?php echo $blog['description']; ?></p>
    </div>
</section>

<!-- Main Content -->
<div class="blog-page-container">
    <div class="blog-layout">

        <!-- Left Content -->
        <div class="blog-left">
            <div class="blog-meta">
                <span><i class="far fa-calendar"></i> <?php echo $blog['date']; ?></span>
                <span><i class="far fa-clock"></i> <?php echo $blog['readTime']; ?></span>
            </div>

            <article class="blog-article">
                <?php foreach($blog['content'] as $item): ?>
                    <h2><?php echo $item['heading']; ?></h2>
                    <p><?php echo $item['text']; ?></p>
                <?php endforeach; ?>
            </article>
        </div>

        <!-- Right Sticky Section -->
        <div class="blog-right">
            <div class="sticky-image">
                <img src="<?php echo $blog['bannerImg']; ?>" alt="<?php echo $blog['title']; ?>">
            </div>
        </div>

    </div>
</div>






<?php include 'include/footer.php'; ?>
</body>
</html>
