<?php
// 1. Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$message_status = "";

// 2. When the button is clicked
if (isset($_POST['test_db'])) {
    // This inserts the exact "Hello World" text from your screenshot
    $sql = "INSERT INTO messages (user_name, message) VALUES ('Student', 'Hello World! 🚀')";
    
    if ($conn->query($sql) === TRUE) {
        $message_status = "Data saved successfully!";
    } else {
        $message_status = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Full-Stack Portfolio</title>
    <style>
        body { 
            font-family: sans-serif; 
            display: flex; 
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            height: 100vh; 
            margin: 0;
            background: #e0f7fa; /* The light blue color from your screen */
        }
        .status { color: #28a745; font-weight: bold; margin-bottom: 20px; }
        h1 { font-size: 3rem; margin-bottom: 30px; }
        .card { 
            background: white; 
            padding: 40px; 
            border-radius: 15px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); 
            text-align: center;
        }
        button { 
            padding: 10px 20px; 
            font-size: 1rem; 
            cursor: pointer; 
            border: 1px solid #333;
            background: #f8f9fa;
        }
    </style>
</head>
<body>

    <?php if ($message_status): ?>
        <p class="status"><?php echo $message_status; ?></p>
    <?php endif; ?>

    <h1>Hello World! 🚀</h1>

    <div class="card">
        <h2>Database Test</h2>
        <form method="POST">
            <button type="submit" name="test_db">Click to Save to Database!</button>
        </form>
    </div>

</body>
</html>
