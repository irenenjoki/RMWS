<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

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

    // Insert user data into the database (replace with your table name)
    $sql = "INSERT INTO signup (username, password, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $email); // No need to hash the password

    if ($stmt->execute()) {
        echo "Registration successful!";
        // You can redirect to a login page or perform other actions here.
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
header("Location:index.php");

var_dump($email);
var_dump($username);
var_dump($password);
?>
