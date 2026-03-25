<?php
// 1. Database Credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";

// 2. Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// 3. Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 4. Save data if the button is clicked
if (isset($_POST['submit_button'])) {
    $user = "Student"; // You can change this to a form input later
    $msg = "I successfully connected my first database!";
    
    $sql = "INSERT INTO messages (user_name, message) VALUES ('$user', '$msg')";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Data saved successfully!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    <style>
        body { font-family: sans-serif; text-align: center; background-color: #e0f7fa; padding-top: 50px; }
        .card { background: white; padding: 20px; border-radius: 10px; display: inline-block; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <h1>Hello World! 🚀</h1>
    <div class="card">
        <h2>Database Test</h2>
        <form method="post">
            <button type="submit" name="submit_button">Click to Save to Database!</button>
        </form>
    </div>
</body>
</html>

