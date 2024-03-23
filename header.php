<?php
//Create session
// session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Path Finder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style1.css">
</head>

<?php
//check if user is signed in
if (isset($_SESSION["email"])) {
    //user header
    $adminverify = 1;
    $isAdmin = $_SESSION['isAdmin'];
    if ((strcmp($isAdmin, $adminverify)) != 0) {
        echo '<div class="header">
        <div class="topnav">
                <a href="http://localhost/CSC-490_SeniorCapstone/html/about.php"><i class="fa fa-fw fa-info" aria-hidden="true"></i>About</a>
                <a href="http://localhost/CSC-490_SeniorCapstone/php/logout.php">
                <i class="fa fa-sign-out" aria-hidden="true">
                </i>Logout</a>
            <a class="active" href="http://localhost/CSC-490_SeniorCapstone/php/user/userPage.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <!-- LOGO , right is logo pos -->
            <a style="position:relative; right:59%; top:2px; " href="http://localhost/CSC-490_SeniorCapstone/php/user/userPage.php" style="float:left;"><img src="https://i.ibb.co/Qkmd5yT/output-onlinepngtools-1-4.png" alt="logo-design-header"></a>
        </div>
    </div>';
    }
    //admin header
    if ((strcmp($isAdmin, $adminverify)) == 0) {
        echo
        '<div class="header">
                <div class="topnav">               
                 <a href="http://localhost/CSC-490_SeniorCapstone/html/about.php"><i class="fa fa-fw fa-info" aria-hidden="true"></i>About</a>
                <a href="http://localhost/CSC-490_SeniorCapstone/php/logout.php">
                <i class="fa fa-sign-out" aria-hidden="true">
                    </i>Logout</a>
                <a class="active" href="http://localhost/CSC-490_SeniorCapstone/php/admin/adminpage.php"><i class="fa fa-fw fa-home"></i>Home</a>
                <!-- LOGO -->
                <a style="position:relative; right:59%; top:2px; " href="http://localhost/CSC-490_SeniorCapstone/php/admin/adminpage.php" style="float:left;"><img src="https://i.ibb.co/Qkmd5yT/output-onlinepngtools-1-4.png" alt="logo-design-header"></a>
                </div>
            </div>';
    }
} else {
    // guest header
    echo
    '<div class="header">
            <div class="topnav">
                <a href="http://localhost/CSC-490_SeniorCapstone/html/about.php"><i class="fa fa-fw fa-info" aria-hidden="true"></i>About</a>
                <a href="http://localhost/CSC-490_SeniorCapstone/php/LoginPage.php"><i class="fa fa-fw fa-user"></i>Login/SignUp</a>
                <a class="active" href="http://localhost/CSC-490_SeniorCapstone/index.php"><i class="fa fa-fw fa-home"></i>Home</a>
                <a style="position:relative; right:59%; top:2px; " href="http://localhost/CSC-490_SeniorCapstone/index.php" style="float:left;"><img
                    src="https://i.ibb.co/Qkmd5yT/output-onlinepngtools-1-4.png" alt="logo-design-header"></a>
            </div>
        </div>';
}
