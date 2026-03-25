<?php
// Database Connection
$conn = new mysqli("localhost", "root", "", "portfolio_db");
$message_status = "";

// Logic for the Stage 1 Database Test button
if (isset($_POST['test_db'])) {
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
    <title>Aishwarya's Portfolio</title>
    <style>
        body { 
            background: #e0f7fa; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            min-height: 100vh; 
            margin: 0; 
        }
        h1 { font-size: 2.5rem; color: #333; margin-bottom: 20px; }
        .card { 
            background: white; 
            padding: 30px; 
            border-radius: 20px; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.1); 
            text-align: center; 
            width: 380px;
        }
        .status { color: #28a745; font-weight: bold; margin-bottom: 15px; }
        
        /* Section Styling */
        .section-title { font-weight: bold; color: #555; margin-top: 20px; display: block; }
        
        /* Button Styling */
        .btn {
            display: block;
            text-decoration: none;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
            border: none;
            width: 100%;
            cursor: pointer;
            font-size: 1rem;
        }
        .btn-test { background: #28a745; color: white; } /* Green for test */
        .btn-test:hover { background: #218838; }
        
        .btn-contact { background: #007bff; color: white; } /* Blue for contact */
        .btn-contact:hover { background: #0056b3; }
        
        .btn-admin { background: #343a40; color: white; } /* Dark for admin */
        .btn-admin:hover { background: #23272b; }

        hr { border: 0; border-top: 1px solid #eee; margin: 20px 0; }
    </style>
</head>
<body>

    <h1>Welcome to Aishwarya's Portfolio! 🚀</h1>

    <?php if ($message_status) echo "<p class='status'>$message_status</p>"; ?>

    <div class="card">
        <span class="section-title">Stage 1: Connection Test</span>
        <p style="font-size: 0.9rem; color: #777;">Click to save "Hello World" to the database.</p>
        <form method="POST">
            <button type="submit" name="test_db" class="btn btn-test">Click to Save to Database!</button>
        </form>

        <hr>

        <span class="section-title">Stage 2: Full-Stack Features</span>
        <div class="nav-links">
            <a href="version-2-contactform/test.php" class="btn btn-contact">📩 Open Contact Form</a>
            <a href="version-2-contactform/view-messages.php" class="btn btn-admin">📋 Open Admin View</a>
        </div>
    </div>

</body>
</html>