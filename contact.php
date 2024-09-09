<?php include 'functions.php'; ?>
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
<section class="form-container" id="contact">
            <h2>Contact Me</h2>
            <form action="index.php" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit" name="contact">Send</button>
            </form>
        </section>
    </main>

        <?php include 'footer.php'; ?>
</body>
</html>
