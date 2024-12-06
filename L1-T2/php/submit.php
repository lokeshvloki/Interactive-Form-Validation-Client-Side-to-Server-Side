<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $age = intval($_POST['age']);

    $errors = [];

    // Server-side validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }
    if ($age <= 0) {
        $errors[] = "Enter a valid age.";
    }

    if (empty($errors)) {
        echo "<h1>Form Submitted Successfully!</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Age: $age</p>";
    } else {
        echo "<h1>Error!</h1>";
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
} else {
    echo "<h1>Invalid Request</h1>";
}
?>
