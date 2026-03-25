<?php
$conn = new mysqli("localhost", "root", "", "portfolio_db");
$message_status = "";

if (isset($_POST['submit_contact'])) {
    $user = $_POST['user_name'];
    $msg = $_POST['user_message'];
    $sql = "INSERT INTO messages (user_name, message) VALUES ('$user', '$msg')";
    if ($conn->query($sql) === TRUE) {
        $message_status = "Success! Message from $user saved.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form - Stage 2</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f7f6; display: flex; flex-direction: column; align-items: center; padding: 50px; }
        .nav-links { margin-bottom: 20px; }
        .nav-links a { text-decoration: none; color: #666; font-weight: bold; margin: 0 10px; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 350px; }
        h2 { text-align: center; color: #333; }
        input, textarea { width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #007bff; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; }
        .success { color: #28a745; text-align: center; margin-top: 15px; font-weight: bold; }
        .footer-link { display: block; text-align: center; margin-top: 20px; color: #007bff; text-decoration: none; font-size: 0.9rem; }
    </style>
</head>
<body>

    <div class="nav-links">
        <a href="../index.php">🏠 Home (Stage 1)</a>
    </div>

    <div class="card">
        <h2>Contact Me</h2>
        <form method="POST">
            <input type="text" name="user_name" placeholder="Your Name" required>
            <textarea name="user_message" placeholder="Your Message" rows="4" required></textarea>
            <button type="submit" name="submit_contact">Send to Database</button>
        </form>
        
        <?php if($message_status) echo "<p class='success'>$message_status</p>"; ?>

        <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
        <a href="view-messages.php" class="footer-link">View All Messages →</a>
    </div>

</body>
</html>