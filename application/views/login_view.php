    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login to Library Management System</h2>
    <form action="<?= site_url('auth/process_login') ?>" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <p><a href="<?= site_url('main/register') ?>">Don't have an account? Register here.</a></p>
</body>
</html>

