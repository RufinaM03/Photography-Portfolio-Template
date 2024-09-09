<?php


function handleFileUpload($file) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
        return htmlspecialchars($file['name']);
    } else {
        return false;
    }
}

function saveContactMessage($name, $email, $message) {
    $contactFile = 'contact_messages.txt';
    $messageContent = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents($contactFile, $messageContent, FILE_APPEND);
}

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
    
        $users = json_decode(file_get_contents('users.json'), true);
    
        // Check if the user already exists
        foreach ($users as $user) {
            if ($user['username'] == $username) {
                echo "User already exists!";
                exit;
            }
        }
    
        // Add new user
        $users[] = ['username' => $username, 'password' => $password];
        file_put_contents('users.json', json_encode($users));
    
        echo "Sign-up successful!";
        header('Location: index.php'); // Redirect to home/login page
        exit;
    } elseif (isset($_POST['login'])) {
        $username = $_POST['username'];
    $password = $_POST['password'];

    $users = json_decode(file_get_contents('users.json'), true);

    // Check if user exists and verify password
    foreach ($users as $user) {
        if ($user['username'] == $username && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            echo "Login successful!";
            header('Location: index.php'); // Redirect to home page
            exit;
        }
    }

    echo "Invalid username or password!";
    exit;
    } elseif (isset($_POST['upload'])) {
        $filename = handleFileUpload($_FILES['photo']);
        if ($filename) {
            echo "File uploaded successfully!";
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>