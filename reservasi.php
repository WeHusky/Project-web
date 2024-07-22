<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_reservations";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_type = $_POST["room_type"];
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $check_in_date = $_POST["check_in_date"];
    $check_out_date = $_POST["check_out_date"];
    $total_price = $_POST["total_price"]; // Tambahkan harga total

    $sql = "INSERT INTO reservations (room_type, user_name, user_email, check_in_date, check_out_date, total_price) VALUES (?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssd", $room_type, $user_name, $user_email, $check_in_date, $check_out_date, $total_price);
    
    if ($stmt->execute()) {
        header("Location: reservations.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>