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

    // Check if the email already exists
    $checkDuplicateEmail = $conn->prepare("SELECT COUNT(*) FROM signup WHERE email = ?");
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
        $sql = "INSERT INTO signup (username, password, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $email); // No need to hash the password

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
