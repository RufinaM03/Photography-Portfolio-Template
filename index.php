<?php session_start(); ?>
<?php include_once 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'nav.php'; ?>

    <main>
        <section class="hero" id="home">
            <h2>Welcome to My Photography Portfolio</h2>
            <p>Explore my work and get in touch if you'd like to collaborate.</p>
        </section>

        <h2>Recently Uploaded Photos</h2><br>
        <section class="photos" id="portfolio">
            <!-- Static photo gallery (or use PHP to read from a file if needed) -->
        <?php
$uploadDir = 'uploads/';
$files = array_diff(scandir($uploadDir), array('..', '.'));

foreach ($files as $file): ?>
    <div class="photo">
        <img src="uploads/<?php echo htmlspecialchars($file); ?>" alt="<?php echo htmlspecialchars($file); ?>">
        <p><a href="uploads/<?php echo htmlspecialchars($file); ?>" download class="download-btn">Download Photo</a></p>
    </div>
<?php endforeach; ?>
            </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
