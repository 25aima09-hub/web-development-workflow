<?php
$conn = new mysqli("localhost", "root", "", "portfolio_db");
$result = $conn->query("SELECT user_name, message, reg_date FROM messages ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - View Messages</title>
    <style>
        body { font-family: sans-serif; background: #f8f9fa; padding: 50px; display: flex; flex-direction: column; align-items: center; }
        .container { width: 100%; max-width: 800px; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .nav-btn { display: inline-block; margin-bottom: 20px; color: #007bff; text-decoration: none; font-weight: bold; margin-right: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #007bff; color: white; }
        tr:hover { background-color: #f9f9f9; }
    </style>
</head>
<body>

    <div class="container">
        <div style="margin-bottom: 10px;">
            <a href="../index.php" class="nav-btn">🏠 Home</a>
            <a href="test.php" class="nav-btn">← Back to Form</a>
        </div>
        
        <h2>All Received Messages</h2>
        
        <table>
            <tr>
                <th>Name</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
            <?php
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row["user_name"]) . "</td>
                        <td>" . htmlspecialchars($row["message"]) . "</td>
                        <td>" . $row["reg_date"] . "</td>
                      </tr>";
            }
            ?>
        </table>
    </div>

</body>
</html>