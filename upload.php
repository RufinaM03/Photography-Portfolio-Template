<?php include_once 'functions.php'; ?>
<?php include 'nav.php'; ?>



        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
<section class="form-container" id="upload">
            <h2>Upload New Photo</h2>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <label for="photo">Select Photo</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>

                <button type="submit" name="upload">Upload</button>
            </form>
        </section>
        </main>
        <?php include 'footer.php'; ?> 
</body>
</html>
