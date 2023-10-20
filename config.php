<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "big lounge";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number_of_persons = $_POST["number_of_persons"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $payment = $_POST["payment"];
    $message = $_POST["message"];

    // Insert data into the "restaurant" table
    $sql = "INSERT INTO restaurant (name, email, number of persons, phone, date, time, payment, message) 
            VALUES ('$name', '$email', '$number_of_persons', '$phone', '$date', '$time', '$payment', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>