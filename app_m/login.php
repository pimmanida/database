<?php
session_start();
include_once('functions.php');

$userdata = new DB_con();

if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $password = md5($_POST['password']);

    $result = $userdata->signin($uname, $password);
    $num = mysqli_fetch_array($result);

    if ($num > 0) {
        $_SESSION['id'] = $num['id'];
        $_SESSION['fname'] = $num['fullname'];
        echo "<script>alert('Login Successful!');</script>";
        echo "<script>window.location.href='menu.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again.');</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="sec1">
        <div class="head">
            <h1>SAHARA</h1>
            <p>“Experience a Taste of the Sahara at Our Exotic Restaurant”</p>
        </div>
        <div class="log">
            <h1 class="mt-5">Log in</h1>
            <form method="post">
                <div class="input">
                    <!-- <label for="username" class="form-label">User Name</label> -->
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    <span id="usernameavailable"></span>
                </div>
                <div class="input">
                    <!-- <label for="password" class="form-label">Password</label> -->
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" name="login" class="btn btn-success">Login</button>
                <a href="register.php" class="btn btn-primary">Go to Register</a>
            </form>
        </div>
    </div>
</body>

</html>