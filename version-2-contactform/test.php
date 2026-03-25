<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";

$message_status = "";

if (isset($_POST['submit_contact'])) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

    // Capture the form data
    $user = $_POST['user_name'];
    $msg = $_POST['user_message'];

    $sql = "INSERT INTO messages (user_name, message) VALUES ('$user', '$msg')";

    if ($conn->query($sql) === TRUE) {
        $message_status = "Success! Message from $user saved.";
    } else {
        $message_status = "Error: " . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form - Stage 2</title>
    <style>
        body { font-family: sans-serif; background: #f4f7f6; display: flex; justify-content: center; padding: 50px; }
        .card { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 300px; }
        input, textarea { width: 100%; margin-bottom: 10px; padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .success { color: green; text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Contact Me</h2>
        <form method="POST">
            <input type="text" name="user_name" placeholder="Your Name" required>
            <textarea name="user_message" placeholder="Your Message" required></textarea>
            <button type="submit" name="submit_contact">Send to Database</button>
        </form>
        <?php if($message_status) echo "<p class='success'>$message_status</p>"; ?>
    </div>
</body>
</html>