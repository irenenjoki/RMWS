<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";

    // Check if username and email are not empty
    if (empty($username) || empty($email)) {
        echo "Error: Username and email are required fields.";
    } else {
        $emailPattern = "/^\S+@\S+\.\S+$/"; // Matches a basic email format

        if (!preg_match($emailPattern, $email)) {
            // Data is not valid, display an error message and do not insert into the database
            echo "Invalid email address.";
        } else {
            // Proceed with database connection and registration
            $servername = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "big lounge"; // Replace with your database name

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
                $sql = "INSERT INTO registered (username, email) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $username, $email);

                if ($stmt->execute()) {
                    echo "Registration successful!";
                    header("Location: index.html");
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            }

            $conn->close();
        }
    }
}
?>
