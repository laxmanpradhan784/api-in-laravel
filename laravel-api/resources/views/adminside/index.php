<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        .button {
            padding: 15px 30px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .login {
            background-color: #4CAF50;
            color: white;
        }
        .login:hover {
            background-color: #45a049;
        }
        .register {
            background-color: #008CBA;
            color: white;
        }
        .register:hover {
            background-color: #007bb5;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Our Application</h1>
    <button class="button login" onclick="window.location.href='login.php'">Login</button>
    <button class="button register" onclick="window.location.href='register.php'">Register</button>
</div>

</body>
</html>
