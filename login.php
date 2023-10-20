<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to your database (replace with your database credentials)
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "big lounge";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch the hashed password from the database for the given username
    $stmt = $conn->prepare("SELECT password FROM signup WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();
    $stmt->close();

    // Verify the entered password against the hashed password from the database
    if (password_verify($password, $hashedPassword)) {
        // Password is correct
        echo "Login successful!";
        // You can redirect to a user dashboard or perform other actions here.
    } else {
        // Password is incorrect
        echo "Invalid username or password";
    }

    $conn->close();
    header("Location:index.php");
} 



?>
