<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PathFinder Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style1.css">

    <style>
        a.password:hover {
            font-size: 20px;
            color: rgb(2, 247, 169);
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="topnav">
            <a href="../html/about.php"><i class="fa fa-fw fa-info" aria-hidden="true"></i>About</a>
            <a class="active" href="LoginPage.php"><i class="fa fa-fw fa-user"></i>Login/SignUp</a>
            <a href="../index.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a style="position:relative; right:59%; top:2px; " href="../index.php" style="float:left;"><img src="https://i.ibb.co/Qkmd5yT/output-onlinepngtools-1-4.png" alt="logo-design-header"></a>
        </div>
    </div>


    <div class="login">
        <h2 class="active"> LogIn </h2>

        <form method="POST">

            <input type="text" placeholder="Enter your email..." class="text" name="username" required>
            <span>email</span>

            <br>
            <br>

            <input type="password" placeholder="Enter your password..." class="text" name="password" required>
            <span>password</span>

            <br>

            <button class="loginbtn" type="submit" name="login">LogIn</button>

            <a class="register" href="Register.php">Don't have an account?</a>

            <br>
            <br>

            <hr>

            <a class="password" href="resetpassword.php">Forgot Password?</a>

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
$database = false;

if (isset($_POST['login'])) {
    $con = mysqli_connect('localhost', 'root', '', 'PathFinder');

    if ($con) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $select = mysqli_query($con, "SELECT * FROM User WHERE email = '" . $username . "'");
        if (!mysqli_num_rows($select)) {
            function function_alert($message)
            {
                echo "<script>alert('$message');</script>";
            }
            function_alert("The Username you have entered does NOT exists in our Database");
            exit();
        }

        $sql = "SELECT * FROM User WHERE email = '$username'";

        $res = mysqli_query($con, $sql);

        if ($res == true) {
            $row = mysqli_fetch_assoc($res);

            $pass1 = $row['password'];
            $adminverify = 1;
            $isAdmin = $row['isAdmin'];

            if ((strcmp($password, $pass1)) == 0) {
                if ((strcmp($isAdmin, $adminverify)) == 0) {
                    $_SESSION['email'] = $username;
                    $_SESSION['isAdmin'] = 1;
                    header('Location: http://localhost/CSC-490_SeniorCapstone/php/admin/adminpage.php');
                } else {
                    $_SESSION['email'] = $username;
                    $_SESSION['isAdmin'] = 0;
                    header('Location: http://localhost/CSC-490_SeniorCapstone/php/user/userPage.php');
                }
            } else {
                function function_alert($message)
                {
                    echo "<script>alert('$message');</script>";
                }
                function_alert("The Password you have entered is Incorrect");
                exit();
            }
        }
    } else {
        echo "Database not found";
    }
}

?>


<?php include 'footer.php'; ?>
<?php include 'widget.php'; ?>