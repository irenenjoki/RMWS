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
    $package = isset($_POST["package"]) ? $_POST["package"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $date = isset($_POST["date"]) ? $_POST["date"] : "";
    $time = isset($_POST["time"]) ? $_POST["time"] : "";
    $payment = isset($_POST["payment"]) ? $_POST["payment"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";
    
    

    // Use prepared statement
    $stmt = $conn->prepare("INSERT INTO packages (names, email, package,phone, date, time, payment, message) VALUES ( ?, ?, ?, ?, ?, ?, ?,?)");
    
    
    $stmt->bind_param("ssssssss", $names, $email, $package, $phone, $date, $time, $payment, $message);

    if ($stmt->execute()) {
        echo "Data has been successfully inserted into the database.";
    } else {
       
        die("Error: " . $conn->error);
    }
    
    $stmt->close();
    $conn->close();
}
var_dump($names);
var_dump($phone);
var_dump($email);
var_dump($package);
var_dump($time);
var_dump($date);
var_dump($payment);
var_dump($message);
?>