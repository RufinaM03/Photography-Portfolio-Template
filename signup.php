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
<?php if (!isset($_SESSION['username'])): ?>
    <section class="form-container" id="signup">
                <h2>Sign Up</h2>
                <form action="functions.php" method="post">
                    <label for="signup-username">Username</label>
                    <input type="text" id="signup-username" name="username" required>

                    <label for="signup-password">Password</label>
                    <input type="password" id="signup-password" name="password" required>

                    <button type="submit" name="signup">Sign Up</button>
                </form>

                <h4>Already have an account?</h4><a href="login.php">Log In!</a>
            </section>
        <?php endif; ?>
    </main>
        <?php include 'footer.php'; ?>
</body>
</html>
