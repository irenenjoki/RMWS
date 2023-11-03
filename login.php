<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
// Perform database query here to check registration
$isRegistered = true; // Replace with actual database check

$response = array('isRegistered' => $isRegistered);
echo json_encode($response);
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

    // Query the database for the user
    $stmt = $conn->prepare("SELECT username, password FROM registered WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($dbUsername, $dbPassword);
    $stmt->fetch();
    $stmt->close();

    // Verify the entered username and password against the database
    if ($username === $dbUsername && $password === $dbPassword) {
        // Username and password are correct
        header("Location: reservations.php"); // Redirect to the homepage
        exit(); // Make sure to exit after redirection
    } else {
        // Username or password is incorrect
        echo "Invalid username or password";
    }

    $conn->close();
}

var_dump($username);
var_dump($password);

?>
