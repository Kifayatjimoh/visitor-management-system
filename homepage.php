<?php
session_start();
   $firstname = $_SESSION ['firstname'];
   $lastname = $_SESSION['lastname'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
            font-size: 36px;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome Home! <?php echo ucfirst($firstname) . " ", ucfirst($lastname); ?> </h1>
    </header>
    <div class="container">
        <p>
            Thank you for filling up the form! We are excited to have you back at home. 
            We have missed you and can't wait to catch up and spend time together.
        </p>
        <p>
            Feel free to relax and make yourself at home. Let us know if there's anything we can do to make your stay even more comfortable.
        </p>
        <form action="logout.php" method="post">
            <input type="submit" value="logout" name="submit" class="btn" >
        </form>
    </div>
</body>
</html>
