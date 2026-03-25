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
            height: 100vh; 
            margin: 0; 
        }
        h1 { 
            font-size: 3rem; 
            color: #333; 
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .card { 
            background: white; 
            padding: 40px; 
            border-radius: 20px; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.1); 
            text-align: center; 
            width: 400px;
        }
        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 25px;
        }
        .nav-btn {
            text-decoration: none;
            padding: 15px 25px;
            border-radius: 10px;
            font-weight: bold;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }
        /* Style for Contact Form Button */
        .btn-contact {
            background-color: #007bff;
            color: white;
        }
        .btn-contact:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        /* Style for Admin View Button */
        .btn-admin {
            background-color: #343a40;
            color: white;
        }
        .btn-admin:hover {
            background-color: #23272b;
            transform: translateY(-2px);
        }
        p { color: #666; font-size: 1.1rem; }
    </style>
</head>
<body>

    <h1>Welcome to Aishwarya's Portfolio! 🚀</h1>

    <div class="card">
        <h2>Navigation Menu</h2>
        <p>Select a stage to view my progress:</p>
        
        <div class="btn-container">
            <a href="version-2-contactform/test.php" class="nav-btn btn-contact">📩 Open Contact Form</a>
            <a href="version-2-contactform/view-messages.php" class="nav-btn btn-admin">📋 Open Admin View</a>
        </div>
    </div>

</body>
</html>