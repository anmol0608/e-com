<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>YourKart | Login</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet" />
</head>

<body>
    <!-- navbar -->
    <?php include 'navbar.php' ?>
    <!--  -->
    <?php
    session_start();
    require 'db.php';
    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $_POST['email'];
            header("Location: index.php");
        } else {
            $_SESSION['status'] = 'failedLogin';
            header('Location: login.php');
        }
    } else {
    ?>
        <div class="text-center mt-3">
            <h3>Login</h3>
        </div>
        <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'success') echo '
            <div class="card card p-3 m-3 bg-success text-white"><small>Registration successful</small></div>
                ';
        if (isset($_SESSION['status']) && $_SESSION['status'] == 'failedLogin') echo '
                <div class="card card p-3 m-3 bg-danger text-white"><span>Incorrect Email/Password</span></div>';
        ?>
        <div class="vertical-center d-flex align-items-center justify-content-center">
            <form class="w-75 p-3" action="" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" id="" name="password" required>
                </div>
                <a href="./register.php">Don't have any account?</a><br>
                <button type="submit" class="mt-3 btn btn-primary">Submit</button>
            </form>
        </div>
    <?php unset($_SESSION['status']); } ?>
</body>

</html>