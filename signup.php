<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";

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

    // Check if the email already exists
    $checkDuplicateEmail = $conn->prepare("SELECT COUNT(*) FROM registered WHERE email = ?");
    $checkDuplicateEmail->bind_param("s", $email);
    $checkDuplicateEmail->execute();
    $checkDuplicateEmail->bind_result($emailCount);
    $checkDuplicateEmail->fetch();
    $checkDuplicateEmail->close();

    if ($emailCount > 0) {
        // An account with the same email already exists
        echo "Error: An account with the same email already exists. Please use a different email.";
    } else {
        // No duplicate email found, proceed to insert data
        $sql = "INSERT INTO registered (username, email) VALUES ( ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $email); // No need to hash the password

        if ($stmt->execute()) {
            echo "Registration successful!";
            header("Location: index.html"); 
            // You can redirect to a login page or perform other actions here.
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>
