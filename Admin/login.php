<?php
session_start();
include_once '../includes/dispatcher.php';

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $admin = new admin_method();
    $adminSet = $admin->fetchall();
    for ($i = 0; $i < count($admin->fetchall()); $i++) {
        if ($adminSet[$i]['admin_name'] == $user && $adminSet[$i]['admin_password'] == $pass) {
            $_SESSION['admin_id'] = $adminSet[$i]['admin_id'];
            header("Location: index.php");
            exit();
        }
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->


                <!-- Login Form -->
                <form method="post">
                    <input type="text" id="login" class="fadeIn second" name="username" placeholder="User Name">
                    <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
                    <input type="submit" class="fadeIn fourth" value="Log In" name="login">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>

            </div>
        </div>
    </body>
</html>
