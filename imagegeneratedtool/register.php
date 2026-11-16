<?php
include './config.php';

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "select * from `imagegeneratedtool`.`register` where email = '$email'";
    $result = mysqli_query($connection, $check);

    if (mysqli_num_rows($result) > 0){
        echo "<script>
        alert ('error: this email already exist');
        window.location.href='register.php';
        </script>";
        exit();
        }else{
        $sql= "insert into `imagegeneratedtool`.`register`
        (fullname ,email ,password)
        values('$fullname', '$email' , '$password') ";
    
    if(mysqli_query ($connection, $sql)){

    echo"<script>
        window.location.href='login.php';
        </script>";
        exit();
    
    } else{
        echo "<script>
        alert ('registration failed');
        window.location.href='register.php';
        </script>";
        exit();
    }

    }
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account | ImageGeneratedTool</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <div class="auth-page">
        <div class="auth-card">

            <div class="auth-brand">
                <div class="brand-icon">✦</div>
                <span>ImageGeneratedTool</span>
            </div>

            <div class="auth-heading">
                <span class="welcome-label">GET STARTED TODAY</span>
                <h1>Create your account</h1>
                <p>Join us and bring your creative ideas to life.</p>
            </div>

            <form method="POST" id="registerForm">

                <div class="mb-3">
                    <label for="name" class="form-label">Full name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="fullname"
                        name="fullname"
                        placeholder="Enter your full name"
                        autocomplete="name"
                        maxlength="100"
                        required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="you@example.com"
                        autocomplete="email"
                        maxlength="254"
                        required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="password-wrapper">
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Create a strong password"
                            autocomplete="new-password"
                            minlength="8"
                            required>
                        <button
                            type="button"
                            class="password-toggle"
                            data-toggle-password="password"
                            aria-label="Show password">Show</button>
                    </div>
                    <div class="form-text">Use at least 8 characters.</div>
                </div>

                <button type="submit" name="submit" class="btn auth-btn w-100">
                    Create Account <span aria-hidden="true">→</span>
                </button>

            </form>

            <div class="auth-divider">
                <span>ALREADY HAVE AN ACCOUNT?</span>
            </div>

            <p class="auth-footer">
                Welcome back!
                <a href="login.php">Sign in</a>
            </p>

            <div class="auth-terms">
                By creating an account, you agree to use the platform responsibly.
            </div>

        </div>
    </div>

    <script src="./assets/script.js"></script>

</body>

</html>