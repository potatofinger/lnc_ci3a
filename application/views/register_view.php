<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Container for the form -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">
                        <h4 class="card-title text-center mb-4">Register for Library Management System</h4>
                        <form action="<?= site_url('auth/process_register') ?>" method="POST">
                            <!-- Full Name input -->
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <!-- Email input -->
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <!-- Password input -->
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <!-- Register button -->
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </form>
                        <p class="mt-3 text-center">
                            <a href="<?= site_url('auth/login') ?>">Already have an account? Login here.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
