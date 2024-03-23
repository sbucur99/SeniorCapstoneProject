<?php
//Create session
session_start();
?>
<!--This header handler is speical to the index page because of the index position in the dir.
only difference is the logout.php location-->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Path Finder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style1.css">
</head>
<?php
if (isset($_SESSION["email"])) {
    //user header
    $adminverify = 1;
    $isAdmin = $_SESSION['isAdmin'];
    if ((strcmp($isAdmin, $adminverify)) != 0) {
        echo '<div class="header">
        <div class="topnav">
                <a href="php/logout.php">
                <i class="fa fa-sign-out" aria-hidden="true">
                </i>Logout</a>
            <a class="active" href="userpage.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <!-- logo -->
            <a style="position:relative; right:59%; top:2px; " href="../../index.php" style="float:left;"><img src="https://i.ibb.co/Qkmd5yT/output-onlinepngtools-1-4.png" alt="logo-design-header"></a>
        </div>
    </div>';
    }
    //admin header
    if ((strcmp($isAdmin, $adminverify)) == 0) {
        echo
        '<div class="header">
                <div class="topnav">
                <a href="php/logout.php">
                <i class="fa fa-sign-out" aria-hidden="true">
                    </i>Logout</a>
                <a class="active" href="adminpage.php"><i class="fa fa-fw fa-home"></i>Home</a>
                </div>
            </div>';
    }
} else {
    // guest header
    echo
    '<div class="header">
            <div class="topnav">
                <a href="html/about.php"><i class="fa fa-fw fa-info" aria-hidden="true"></i>About</a>
                <a href="php/LoginPage.php"><i class="fa fa-fw fa-user"></i>Login/SignUp</a>
                <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
                <a style="position:relative; right:59%; top:2px; " href="index.php" style="float:left;"><img
                    src="https://i.ibb.co/Qkmd5yT/output-onlinepngtools-1-4.png" alt="logo-design-header"></a>
            </div>
        </div>';
}
