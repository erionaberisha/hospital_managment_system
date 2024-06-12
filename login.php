<?php
include 'config.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            border: none;
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent background */
            width: 50%; /* Fixed width */
            margin: 0 auto; /* Center the card */
        }
        .form-group {
            margin-bottom: 20px; /* Spacing between form elements */
        }

        .btn-primary {
            background-color: #007bff; /* Custom blue button */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="images/logo.jpg" alt="Logo" style="width: 120px;">
                        </div>
                        <h2 class="card-title text-center mb-4">Login</h2>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Perform login validation
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            // Your login logic here (query database, check credentials, etc.)
                            if ($username === 'example' && $password === 'password') {
                                echo "<div class='alert alert-success' role='alert'>Login successful!</div>";
                                // Redirect to dashboard or home page
                                // header("Location: dashboard.php");
                                // exit();
                            } else {
                                echo "<div class='alert alert-danger' role='alert'>Invalid username or password.</div>";
                            }
                        }
                        ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation" novalidate>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                                <div class="invalid-feedback">Please enter your username.</div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div class="invalid-feedback">Please enter your password.</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="signup.php">Don't have an account? Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>
