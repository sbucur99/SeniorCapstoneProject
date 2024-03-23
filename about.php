<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Path Finder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style1.css">
</head>

<!--NAV BAR-->
<?php include '../php/header.php'; ?>

<body>
    <!-- Scrolling JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("a").on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    //jQuery animate milliseconds
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1900, function () {
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>

    <main id="AboutPage">

        <!-- CSS MAIN CONTENT -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
            #about {
                height: 600px;
            }

            #section1 {
                position: relative; 
                height: 100vh;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #section1::before {    
                content: "";
                background-image: url('https://i.ibb.co/nccDZCS/R-2.jpg');
                background-size: cover;
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                opacity: 0.05;
            }

            #section2 {
                position: relative; 
                height: 100vh;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #section2::before {    
                content: "";
                background-image: url('https://i.ibb.co/5YJRhYm/a70e911d1e1f00197ebaa00b51c8519d.jpg');
                background-size: cover;
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                opacity: 0.05;
            }

            #section3 {
                position: relative; 
                height: 100vh;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #section3::before {    
                content: ""; 
                background-image: url('https://i.ibb.co/QMy5c6p/R-3.jpg');
                background-size: cover;
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                opacity: 0.05;
            }

            x1::selection{
                background: blue;
            }
        </style>
        <!-- END CSS MAIN CONTENT -->

        <br><br><br><br><br>
        <div class="main" id="about">
            <p style="position: relative; font-size: 65px; color: grey; font-family: Arial, Helvetica, sans-serif;
             margin-left: 30%;">Your <x1 style="font-size: 65px; color: grey; font-family: Arial, Helvetica, sans-serif;">path</x1> matters to us!</p>
            <p style="position: relative; font-size: 35px; font-family: Arial, Helvetica, sans-serif; 
                margin-left: 5%; margin-top: 4%; color:grey;">Click an option to find out more!</p><br><br><br>
            <a class="selection text1" href="#section1" style="position: absolute; font-size: 29px; color: white; 
                font-family: Arial, Helvetica, sans-serif;
                margin-left: 13%; margin-top: 0%">1. How it Works</a><br></br><br>
            <a class="selection text1" href="#section2"
                style="position: absolute; font-size: 29px; color: white; font-family: Arial, Helvetica, sans-serif; 
                margin-left: 13%; margin-top: 2%">2. Why PathFinder?</a><br></br><br>
            <a class="selection text1" href="#section3"
                style="position: absolute; font-size: 29px; color: white; font-family: Arial, Helvetica, sans-serif; 
                margin-left: 13%; margin-top: 4%; margin-bottom:-10%;">3. Technical Setup</a><br><br>
            <a href="../USERSManualForPathFinder.pdf" download="User\'s Manual" class="selection button1" href="" style="position: absolute; font-size: 29px; color: white; font-family: Arial, Helvetica, sans-serif; 
                margin-left: 13%; margin-top: 9%; margin-bottom:-10%;"><p style="display:inline-block; font-size:45px;">&#8675;</p>&nbsp;&nbsp;Download User Manual</a>
            <style>
                .button1 {
                    height:85px;
                    width:1040px;
                    text-align:center;
                    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                }

            </style>

            <!-- MAGNIFYING GLASS -->
            <div class="magnifying-glass">
                <a href=""><img src="https://i.ibb.co/d0k2fqS/MG.png" alt="m-g" height=240vh></a>
            </div>
            <!-- FOOTSTEPS -->
            <div class="footsteps">
                <a href=""><img src="https://i.ibb.co/kDZ3bH1/footprint-clipart-pathway-3.png" alt="fs"
                        height=80vh></a>
            </div>
            <div class="footsteps2">
                <a href=""><img src="https://i.ibb.co/kDZ3bH1/footprint-clipart-pathway-3.png" alt="fs"
                        height=80vh></a>
            </div>
            <div class="footsteps3">
                <a href=""><img src="https://i.ibb.co/kDZ3bH1/footprint-clipart-pathway-3.png" alt="fs"
                        height=80vh></a>
            </div>

            <!-- CSS ANIMATIONS -->
            <style>
                @keyframes roll-in {
                    from {
                        margin-left: 100%;
                        transform: rotate(0deg) scale(25%);
                    }

                    to {
                        transform: rotate(-360deg);
                    }
                }

                @keyframes pop-in {
                    from {
                        opacity: 0%;
                    }
                    to {
                        opacity: 100%;
                    }
                }

                @keyframes wiggle {
                    0% {
                        transform-origin: 90% 40% 0;
                        transform: rotate(0deg); }
                    70% { 
                        transform-origin: 40% 40% 0;
                        transform: rotate(0deg); }
                    80% {
                        transform-origin: 40% 40% 0;
                        transform: rotate(25deg); }
                    90% { 
                        transform-origin: 40% 40% 0;
                        transform: rotate(-25deg); }
                    100% { 
                        transform-origin: 40% 40% 0;
                        transform: rotate(0deg); }
                }
                
                @keyframes shake {
                     5% {
                        transform: rotate(-10deg);
                    }
                    40% {
                        transform: rotate(-10deg);
                    }
                }

                .magnifying-glass {
                    position:relative;
                    margin-top: -6%;
                    margin-left: 32%;
                    rotate: 40deg;
                    animation-duration: 1s;
                    animation-name: roll-in;
                    pointer-events:none;
                }

                .footsteps {
                    position: absolute;
                    margin-top: -25%;
                    margin-left: 75%;
                    animation-duration: 5s;
                    animation-name: pop-in;
                }

                .footsteps2 {
                    margin-top: -12%;
                    margin-left: 74%;
                    animation-duration: 5s;
                    animation-name: pop-in;
                }

                .footsteps3 {
                    position: absolute;
                    margin-top: -11%;
                    margin-left: 59%;
                    animation-duration: 5s;
                    animation-name: pop-in;
                }

                .wiggle {             
                    animation-delay: 1s;
                    animation-duration: 1s;
                    animation-name: wiggle;
                }
            </style>
            <!-- END CSS ANIMATIONS -->
        </div>
        <div class="main" id="section1">          
            
            <h2 style="position: absolute; margin-left: -50%; margin-top: -35%; font-size: 49px; 
            text-decoration: underline overline; text-decoration-thickness: 59%; color:grey;">1. How it Works</h2>
            <p style="font-size: 22px; position: absolute; margin-left: -65%; margin-top: -15%; 
            margin-left:20%; width: 75%; color:grey; font-family: Arial, Helvetica, sans-serif;"><br></br>
            Path Finder is an immersive web application that can be accessed by any and all users through 
            any and all devices that allow access to browse the internet. Path Finder contains a trivia 
            game-like feature in the form of a questionnaire that allows users to immerse themselves into 
            the web application and enjoy their process to find the right career path.The web application 
            contains a variety of imported libraries, a variety of frameworks, and has been programmed to 
            implement python machine learning to read, write, and analyze large amounts of data. The 
            Questionnaire has a model that develops progressively, and the results will be available.
            </p>
        </div>
        <div class="main" id="section2">           
            <h3 style="position: absolute; margin-left: -50%; margin-top: -35%; font-size: 49px; 
            text-decoration: underline overline; text-decoration-thickness: 59%; color:grey;">2. Why PathFinder?</h3>
            <p style="font-size: 22px; position: absolute; margin-left: -65%; margin-top: -15%; 
            margin-left:20%; width: 75%; color:grey; font-family: Arial, Helvetica, sans-serif;"><br></br>
            As experienced web developers, our mission is to give reliable information to the growing 
            demographic of people looking for careers based on interests. The purpose of the Path Finder
            web application is to provide the user an experience that involves taking a questionnaire 
            that is fun, interactive, and recommend them with potential careers or areas of study. A goal 
            that we have acomplished is ease-of-access for both users and administrators. Path Finder is 
            free to use for developers or anyone in education purpose only.   
            </p>
        </div>
        <div class="main" id="section3">           
            <h3 style="position: absolute; margin-left: -50%; margin-top: -35%; font-size: 49px; 
            text-decoration: underline overline; text-decoration-thickness: 59%; color:grey;">3. Technical Setup</h3>
            <p style="font-size: 22px; position: absolute; margin-left: -65%; margin-top: -15%; 
            margin-left:20%; width: 75%; color:grey; font-family: Arial, Helvetica, sans-serif;"><br></br>
            The mainframe is constructed using PHP, and HTML creates versatility for CSS and links pages. 
            User-end functionality is scripted with JavaScript. Our questionnaire has a responsive UI and was 
            coded in Visual Studio Code. The outputting web app was adapted for calulations of data based on user input, 
            and proper displays (NumPy, data sheet, and SciKit).   
            The Database Management System (DBMS) is written entirely in MySQL and was written with XAMPP. 
            Security features let the DBMS protect data from hackers and SQL injection.
            </p>
        </div>
    </main>
</body>

<!-- PHP of Footer -->
<?php include '../php/footer.php'; ?>

<!-- PHP of Widget (Right/Bottom) -->
<?php include '../php/widget.php'; ?>

<footer>
    <!-- CSS FOOTER -->
    <style>
        #mag {
            transition-property: background-color;
            transition-duration: 3s;
        }
            
        .mag-icons{
            display:none;
            height:2px;
            background-color:green;
        }

        .mini:focus + .mag-icons{
            display:block;
        }
    </style>
    <!-- END CSS FOOTER -->
</footer>

<!-- Cursor -->
<?php include '../php/cursor.php'; ?>

</html>