<?php
include './config.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

      $check = "select * from `imagegeneratedtool`.`register` where email='$email' and password='$password'";
      $result = mysqli_query($connection, $check);

   if (mysqli_num_rows($result) > 0){
    $user=mysqli_fetch_assoc($result);
    $_SESSION ['user_id']= $user['regid'];
    header("Location: index.php");
        exit();

        } else{
        echo "
        <script>
        alert ('Error: Invalid email or password');
        window.location.href='login.php';
        </script>";
        exit();
     
      }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign In | ImageGeneratedTool</title>

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
                <span class="welcome-label">WELCOME BACK</span>
                <h1>Sign in to your account</h1>
                <p>Continue your creative journey with us.</p>
            </div>

            <form method="POST" id="loginForm">

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

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>

                    <div class="password-wrapper">
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required>

                        <button
                            type="button"
                            class="password-toggle"
                            data-toggle-password="password"
                            aria-label="Show password">Show</button>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn auth-btn w-100">
                    Sign In <span aria-hidden="true">→</span>
                </button>

            </form>

            <div class="auth-divider">
                <span>NEW TO IMAGEGENERATEDTOOL?</span>
            </div>

            <p class="auth-footer">
                Don't have an account?
                <a href="register.php">Create one</a>
            </p>

            <div class="auth-terms">
                Securely access your account and continue where you left off.
            </div>

        </div>
    </div>

    <script src="./assets/script.js"></script>

</body>

</html>