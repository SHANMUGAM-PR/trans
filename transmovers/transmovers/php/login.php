<?php
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "login"; // Use your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT Password FROM signup WHERE UserName = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->bind_result($stored_password);
    $stmt->fetch();

    if ($stored_password && $pass === $stored_password) {
        echo "Login successful!";
        // Redirect to fr1.html after successful login
        header("Location: ../HTML/home.html");
        exit();
    } else {
        echo "Invalid username or password";
    }

    $stmt->close();
}

$conn->close();
?>
