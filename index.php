<?php
// 1. Database Connection Settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";

$message_status = "";

// 2. Check if the form was submitted
if (isset($_POST['submit_button'])) {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Capture dynamic data from the form
    $user = $_POST['user_name'];
    $msg = $_POST['user_message'];

    // SQL to insert the user's input
    $sql = "INSERT INTO messages (user_name, message) VALUES ('$user', '$msg')";

    if ($conn->query($sql) === TRUE) {
        $message_status = "Success! Message from $user saved to database.";
    } else {
        $message_status = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Full-Stack Portfolio</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background: #f4f4f4; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 300px; }
        input, textarea { width: 100%; margin-bottom: 10px; padding: 8px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .status { color: green; font-weight: bold; margin-top: 10px; }
    </style>
<style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            display: flex; 
            justify-content: center; 
            padding-top: 50px; 
            background: #e9ecef; 
        }
        .card { 
            background: white; 
            padding: 30px; 
            border-radius: 12px; 
            box-shadow: 0 4px 20px rgba(0,0,0,0.08); 
            width: 350px; 
        }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
        input, textarea { 
            width: 100%; 
            margin-bottom: 15px; 
            padding: 10px; 
            border: 1px solid #ddd; 
            border-radius: 6px; 
            box-sizing: border-box; 
            transition: 0.3s;
        }
        input:focus, textarea:focus {
            border-color: #28a745;
            outline: none;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.2);
        }
        button { 
            width: 100%; 
            padding: 12px; 
            background: #28a745; 
            color: white; 
            border: none; 
            border-radius: 6px; 
            cursor: pointer; 
            font-weight: bold;
            transition: 0.3s;
        }
        button:hover { 
            background: #218838; 
            transform: translateY(-1px);
        }
        .status { 
            color: #155724; 
            background-color: #d4edda;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            margin-top: 15px; 
        }
    </style>

