<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PathFinder Sign-Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../css/register.css"> -->
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body>

    <div class="header">
        <div class="topnav">
            <a href="../html/about.php"><i class="fa fa-fw fa-info" aria-hidden="true"></i>About</a>
            <a class="active" href="Register.php"><i class="fa fa-fw fa-user"></i>Login/SignUp</a>
            <a href="../index.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a style="position:relative; right:59%; top:2px; " href="../index.php" style="float:left;"><img src="https://i.ibb.co/Qkmd5yT/output-onlinepngtools-1-4.png" alt="logo-design-header"></a>
        </div>
    </div>

    <div class="login">
        <h2 class="active"> SignUp </h2>

        <form method="POST">

            <input type="text" placeholder="Enter your name..." class="text" name="name" required>
            <span>name</span>

            <br>
            <br>

            <input type="text" placeholder="Enter your email..." class="text" name="email" required>
            <span>email</span>

            <br>
            <br>

            <input type="password" placeholder="Enter your password..." class="text" name="password" required>
            <span>password</span>

            <br>
            <br>

            <input type="password" placeholder="Enter your password..." class="text" name="conpassword" required>
            <span>Confirm password</span>

            <!-- <br>
        <hr>
        <br>
        <br> -->

            <button class="loginbtn" type="submit" name="register">SignUp</button>

            <!-- <a class="register" href="Register.php">Don't have an account?</a> -->

            <br>
            <br>
            <hr>

            <a class="register" href="LoginPage.php">Already have an account?</a>

            <br>
            <br>


        </form>

    </div>

</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</html>

<?php
if (isset($_POST['register'])) {
    $con = mysqli_connect('localhost', 'root', '', 'PathFinder');

    if ($con) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conpassword = $_POST['conpassword'];

        $isAdmin = 0;

        if (strcmp($password, $conpassword) !== 0) {
            function function_alert($message)
            {
                echo "<script>alert('$message');</script>";
            }
            function_alert("The passwords do not match");
            exit();
        }

        $password = md5($_POST['password']);

        $sql = "INSERT INTO User (name, email, password, isAdmin) VALUES ('$name','$email','$password', $isAdmin)";
        $res = mysqli_query($con, $sql);

        if ($res == true) {
            header('Location: http://localhost/CSC-490_SeniorCapstone/php/LoginPage.php');
        }
    }
}
?>

<?php include 'footer.php'; ?>
<?php include 'widget.php'; ?>