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
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $numberofperson = isset($_POST["numberofperson"]) ? $_POST["numberofperson"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $date = isset($_POST["date"]) ? $_POST["date"] : "";
    $time = isset($_POST["time"]) ? $_POST["time"] : "";
    $payment = isset($_POST["payment"]) ? $_POST["payment"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";
    
    

    // Use prepared statement
    $stmt = $conn->prepare("INSERT INTO restaurant (name, email, numberofperson, phone, date, time, payment, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisssss", $name, $email, $numberofperson, $phone, $date, $time, $payment, $message);

    if ($stmt->execute()) {
        echo "Data has been successfully inserted into the database.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
var_dump($phone);
var_dump($name);
var_dump($date);
var_dump($time);
var_dump($payment);
var_dump($message);
var_dump($email);
var_dump($numberofperson);
?>