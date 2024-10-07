<?php
// Start the session
session_start();

// Initialize variables for form data and errors
$email = $username = $full_name = $password = $phone_number = '';
$errors = [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $full_name = trim($_POST['full_name']);
    $password = trim($_POST['password']);
    $phone_number = trim($_POST['phone_number']);

    // Validate form data
    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    }
    if (empty($username)) {
        $errors['username'] = 'Username is required.';
    }
    if (empty($full_name)) {
        $errors['full_name'] = 'Full name is required.';
    }
    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    }
    if (empty($phone_number)) {
        $errors['phone_number'] = 'Phone number is required.';
    }

    // If no errors, proceed to display a success message (for demonstration)
    if (empty($errors)) {
        // Here you would typically process the data (e.g., save to a database)
        $_SESSION['success'] = 'Registration successful! You can now log in.';
        header('Location: login.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .input-error {
            border-color: red; /* Red border for input with errors */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>
    <form action="register.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" class="<?php echo isset($errors['email']) ? 'input-error' : ''; ?>">
            <div class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></div>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($username); ?>" class="<?php echo isset($errors['username']) ? 'input-error' : ''; ?>">
            <div class="error"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></div>
        </div>
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" value="<?php echo htmlspecialchars($full_name); ?>" class="<?php echo isset($errors['full_name']) ? 'input-error' : ''; ?>">
            <div class="error"><?php echo isset($errors['full_name']) ? $errors['full_name'] : ''; ?></div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="<?php echo isset($errors['password']) ? 'input-error' : ''; ?>">
            <div class="error"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></div>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="tel" name="phone_number" id="phone_number" value="<?php echo htmlspecialchars($phone_number); ?>" class="<?php echo isset($errors['phone_number']) ? 'input-error' : ''; ?>">
            <div class="error"><?php echo isset($errors['phone_number']) ? $errors['phone_number'] : ''; ?></div>
        </div>
        <button type="submit">Register</button>
        <?php if (isset($errors['db'])): ?>
            <div class="error"><?php echo $errors['db']; ?></div>
        <?php endif; ?>
    </form>
</div>

</body>
</html>
