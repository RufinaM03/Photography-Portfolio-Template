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
            <section class="form-container" id="login">
                <h2>Login</h2>
                <form action="functions.php" method="post">
                    <label for="login-username">Username</label>
                    <input type="text" id="login-username" name="username" required>

                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" required>

                    <button type="submit" name="login">Login</button>
                </form>

                <h4>New User?</h4><a href="signup.php">Sign Up!</a>
            </section>
            <?php endif; ?>
    </main>
            <?php include 'footer.php'; ?>
</body>
</html>
