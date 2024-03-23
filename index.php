<?php
//Create session
session_start();
//if logged in
if (isset($_SESSION["email"])) {
    //go to user page 
    $adminverify = 1;
    $isAdmin = $_SESSION['isAdmin'];
    if ((strcmp($isAdmin, $adminverify)) != 0) {
        header("Location: php/user/userPage.php");
        exit;
    }
    //go to admin page
    if ((strcmp($isAdmin, $adminverify)) == 0) {
        header("Location: php/admin/adminpage.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PathFinder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>

    <div class="header">
        <div class="topnav">
            <a href="http://localhost/CSC-490_SeniorCapstone/html/about.php"><i class="fa fa-fw fa-info" aria-hidden="true"></i>About</a>
            <a href="http://localhost/CSC-490_SeniorCapstone/php/LoginPage.php"><i class="fa fa-fw fa-user"></i>Login/SignUp</a>
            <a class="active" href="http://localhost/CSC-490_SeniorCapstone/index.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a style="position:relative; right:59%; top:2px; " href="http://localhost/CSC-490_SeniorCapstone/index.php" style="float:left;"><img src="https://i.ibb.co/Qkmd5yT/output-onlinepngtools-1-4.png" alt="logo-design-header"></a>
        </div>
    </div>

    <div class="container">
        <div id="home" class="flex-column flex-center">
            <h1>Begin Questionnaire?</h1>
            <a href="html/questions.php" class="btn">Begin</a>
        </div>
    </div>            

    <?php include 'php/footer.php'; ?>

<!-- Links not right for this page -->
    <?php include 'php/widget.php'; ?>

    <?php include 'php/cursor.php'; ?>

</body>


</html>