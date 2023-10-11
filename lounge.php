<?php
// Check if the reservation form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $payment = $_POST["payment"];
    $message = $_POST["message"];

    // You should perform validation and sanitation of user input here

    // Database connection (you'll need to set up your database)
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "reservation";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert reservation data into the database
    $sql = "INSERT INTO reserve (name, email, phone, reservation_date, reservation_time, payment,message) VALUES ('$name', '$email', '$phone', '$date', '$time', '$message','$payment')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successfully created!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

