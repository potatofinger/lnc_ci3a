<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .button[style*="background-color:red"] {
            background-color: red;
        }
        .button[style*="background-color:red"]:hover {
            background-color: darkred;
        }
    </style>
    </head>
<body>
    <div class="container">
        <h1>Welcome to the Library Management System</h1>
        <?php if ($this->session->userdata('user_id')) { ?>
            <a href="<?= site_url('library') ?>" class="button">Go to Library</a>
            <a href="<?= site_url('auth/logout') ?>" class="button" style="background-color:red;">Logout</a>
        <?php } else { ?>
            <a href="<?= site_url('auth/login') ?>" class="button">Login</a>
            <a href="<?= site_url('auth/register') ?>" class="button">Register</a>
        <?php } ?>
    </div>
</body>
</html>
