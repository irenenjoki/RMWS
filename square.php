<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "big lounge"; 

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $names = isset($_GET["names"]) ? $_GET["names"] : "";
    $email = isset($_GET["email"]) ? $_GET["email"] : "";
    $package = isset($_GET["package"]) ? $_GET["package"] : "";
    $phone = isset($_GET["phone"]) ? $_GET["phone"] : "";
    $date = isset($_GET["date"]) ? $_GET["date"] : "";
    $time = isset($_GET["time"]) ? $_GET["time"] : "";
    $payment = isset($_GET["payment"]) ? $_GET["payment"] : "";
    $message = isset($_GET["message"]) ? $_GET["message"] : "";
    
    

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