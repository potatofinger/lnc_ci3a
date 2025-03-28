<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register for Library Management System</h2>
    <form action="<?= site_url('auth/process_register') ?>" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Register</button>
    </form>
    <p><a href="<?= site_url('main/login') ?>">Already have an account? Login here.</a></p>
</body>
</html>
