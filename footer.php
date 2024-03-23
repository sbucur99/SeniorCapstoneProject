
<?php
echo '

<style>
    .box{
        position:relative;
         /*width: 90%;*//*resize footer in LoginPage*/
        height:40vh;
        padding: 70px;
        background-color: rgb(40, 40, 40);
    }
    .links {
        display:inline-block;
        position:relative;
        width:80%;
        height: 90%;
        padding-left:10%;
        background-color: red;
        font-family:Arial, Helvetica, sans-serif;
        font-size:30px;
    }
    .social {
        display:block;
    }
    
    a {
        text-decoration:none;
    }

    a.selection {
        padding:8px;
    }

    a.selection:active {
        background-color:green;
    }
    a.selection:hover {
        background-color:green;
        text-decoration: underline;
        box-shadow: 0 0.4rem 1.4rem 0 rgba(38, 62, 91, 0.6);
        transition: transform 150ms;
        transform: scale(1.03);
    }

    a.footer-links:hover {
        animation: links 0.5s;
    }

    @keyframes links {
        from {
            background-color: blue;
        }
    }
</style> 
<div class="box"> 
        <div style="">
            <a href="http://localhost/CSC-490_SeniorCapstone/index.php" style=""><img 
                src="https://i.ibb.co/Qkmd5yT/output-onlinepngtools-1-4.png" alt="logo-design-header"></a>
            <div style="display:inline-block; margin-left:10%;">
                <a style="display:block; font-family:Arial, Helvetica, sans-serif; font-size:30px;
                color:rgb(100,100,100);">Learn More</a><br>
                <a class="footer-links" style="display:block; font-family:Arial, Helvetica, sans-serif; 
                font-size:20px; color:white;" href="http://localhost/CSC-490_SeniorCapstone/html/about.php">About Us</a>
                <a class="footer-links" style="display:block; font-family:Arial, Helvetica, sans-serif; 
                font-size:20px; color:white;" onclick="userManual()">User Manual</a>
            </div>
            <div style="display:inline-block; margin-left:10%;">
                <a style="display:block; font-family:Arial, Helvetica, sans-serif; font-size:30px; 
                color:rgb(100,100,100);">Path Finder</a><br>
                <a class="footer-links" style="display:block; font-family:Arial, Helvetica, sans-serif; 
                font-size:20px; color:white;" href="http://localhost/CSC-490_SeniorCapstone/index.php">Questionnaire</a>
                <a class="footer-links" style="display:block; font-family:Arial, Helvetica, sans-serif; 
                font-size:20px; color:white;" href="http://localhost/CSC-490_SeniorCapstone/php/results.php">Results</a>
            </div>
            <div id="colors" class="container2" style="display:inline-block; margin-left:10%;">
                <div class="content">
                    <span1 class="text1 first-text">You can be a</span1>
                    <span1 id="s" class="sec-text text1">Biochemist</span1>
                </div>
            </div>
            <a><p style="position:absolute;margin-top: 5%;margin-left:35%; color: rgb(106, 106, 107);
            font-family: \'Franklin Gothic Medium\', \'Arial Narrow\', Arial, sans-serif;
            font-size: large;">Path Finder for Senior Capstone Project 2023</p></a>
        </div>

        <a href="../USERSManualForPathFinder.pdf" download="User\'s Manual" class="hidden" href=""></a>
        <script>
            function userManual() {
                let text = "Press OK to download the User Manual!";
                if (confirm(text) == true) {
                    document.getElementsByClassName("hidden")[0].click();
                } 
            }
        </script>

        <!-- PATH  TYPER -->
        <script>
            var colors = [\'#3d4ee4\', "#52df71"];
            var random_color = colors[Math.floor(Math.random() * colors.length)];
            document.getElementById(\'colors\').style.color = random_color;
            if (random_color === \'#52df71\'){
                document.getElementById(\'s\').className = \'text1 sec-text2\';
            } 

            var repeater;
            const text= document.querySelector(".sec-text");
            const textLoad = () => {
                setTimeout(() => {
                    text.textContent = "Biochemist";
                }, 0)
                setTimeout(() => {
                    text.textContent = "Teacher";
                }, 4100)
                setTimeout(() => {
                    text.textContent = "Computer Scientist";
                }, 8300)
                setTimeout(() => {
                    text.textContent = "Writer";
                }, 12000)
                setTimeout(() => {
                    text.textContent = "Historian";
                }, 16000)
                setTimeout(() => {
                    text.textContent = "Artist";
                }, 20000)
                repeater = setTimeout(textLoad, 24000);
            }
            textLoad();

            var repeater2;
            const text2= document.querySelector(".sec-text2");
            const textLoad2 = () => {
                setTimeout(() => {
                    text2.textContent = "Biochemist";
                }, 0)
                setTimeout(() => {
                    text2.textContent = "Teacher";
                }, 4100)
                setTimeout(() => {
                    text2.textContent = "Computer Scientist";
                }, 8300)
                setTimeout(() => {
                    text2.textContent = "Writer";
                }, 12000)
                setTimeout(() => {
                    text2.textContent = "Historian";
                }, 16000)
                setTimeout(() => {
                    text2.textContent = "Artist";
                }, 20000)
                repeater2 = setTimeout(textLoad2, 24000);
            }
            textLoad2();
        </script>   

        <style>
            .content{
                box-sizing: border-box;
                font-family: Helvetica, \'Arial Narrow\', Arial, sans-serif;
                font-size: 45px;
            }
            .container2{
                position:absolute;
                margin-top:2%;
                display: flex;
                align-items: center;
                overflow:hidden;
            }
            #colors.container2 .text1 {
                position:relative;
                font-size:x-large;
            }
            .container2 .text1.first-text {
                color:white;
            }

            .sec-text:before {
                content:"";
                position:absolute;
                top: 0;
                left:0;
                height:100%;
                width:100%;
                background-color: rgb(40, 40, 40);
                border-left:2px solid #3d4ee4;/*blue*/
                animation:path 4s steps(12) infinite;

            } 

            .sec-text2:before { /*.text1*/
                content:"";
                position:absolute;
                top: 0;
                left:0;
                height:100%;
                width:100%;
                background-color: rgb(40, 40, 40);
                border-left:2px solid #52df71;/*green*/
                animation:path 4s steps(12) infinite;
            } 

            @keyframes path {
                40%, 60% {
                    left:100%;
                }
                100% {
                    left:0%;
                }
            } 
        </style>
        <!-- END Path Typer -->
</div>';