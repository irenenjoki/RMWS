<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "big lounge";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = isset($_POST["names"]) ? $_POST["names"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $numberofperson = isset($_POST["numberofperson"]) ? $_POST["numberofperson"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $date = isset($_POST["date"]) ? $_POST["date"] : "";
    $time = isset($_POST["time"]) ? $_POST["time"] : "";
    $payment = isset($_POST["payment"]) ? $_POST["payment"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";

    // Add validation for email and phone
    $emailPattern = "/^\S+@\S+\.\S+$/"; // Matches a basic email format
    $phonePattern = "/^\d{10}$/"; // Matches a 10-digit phone number

    if (!preg_match($emailPattern, $email) || !preg_match($phonePattern, $phone)) {
        echo "Invalid email or phone number format.";
    } else {
        // Use prepared statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO reservations (names, email, numberofperson, phone, date, time, payment, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssisssss", $names, $email, $numberofperson, $phone, $date, $time, $payment, $message);

        if ($stmt->execute()) {
            echo "Data has been successfully inserted into the database.";
            header("Location: index.html"); 

        } else {
            die("Error: " . $conn->error);
        }

        $stmt->close();
    }

    $conn->close();
}
?>
