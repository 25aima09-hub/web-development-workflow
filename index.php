<?php
// Database Connection
$conn = new mysqli("localhost", "root", "", "portfolio_db");

$message_status = "";

if (isset($_POST['test_db'])) {
    $sql = "INSERT INTO messages (user_name, message) VALUES ('Student', 'Hello World! 🚀')";
    if ($conn->query($sql) === TRUE) {
        $message_status = "Data saved successfully!";
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
            font-family: 'Segoe UI', sans-serif; 
            display: flex; 
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            height: 100vh; 
            margin: 0;
            background: #e0f7fa; 
        }
        .nav-menu { margin-bottom: 20px; background: white; padding: 10px 20px; border-radius: 50px; shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .nav-menu a { text-decoration: none; color: #007bff; font-weight: bold; margin: 0 15px; }
        .status { color: #28a745; font-weight: bold; margin-bottom: 20px; }
        h1 { font-size: 3rem; margin-bottom: 30px; color: #333; }
        .card { 
            background: white; 
            padding: 40px; 
            border-radius: 15px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.