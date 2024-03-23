<?php
//check if user is signed in
if (isset($_SESSION["email"])) {
    //user footer
    $adminverify = 1;
    $isAdmin = $_SESSION['isAdmin'];
    if ((strcmp($isAdmin, $adminverify)) != 0) {
        echo '
        <div class="footer-icons" id="mini-glass">
            <div style="float:left; margin-left:10%; margin-top:6%; display: flex; align-items: center; space-between;">
                <div style="margin-right:20%;">
                    <a href="http://localhost/CSC-490_SeniorCapstone/html/questions.php" id="1"><img src="https://i.ibb.co/pQyjM7z/man.png" height=60vh></a>            
                </div>
                <div style="margin-right:20%;">
                    <a href="http://localhost/CSC-490_SeniorCapstone/php/user/userPage.php" id="2"><img src="https://i.ibb.co/tz3FPsN/user-removebg-preview.png" height=40vh></a>
                </div>
                <div style="margin-right:20%;">
                    <a href="http://localhost/CSC-490_SeniorCapstone/php/results.php" id="3"><img src="https://i.ibb.co/CH0J7Jz/graph-removebg-preview.png" height=50vh></a>
                </div>
            </div>
            <input type="checkbox" id="mmagControl" onclick="makeVisible(this);"/>    
            <label class="" for="mmagControl"><img src="https://i.ibb.co/3Y0xCyj/MgVec.png" id="magGlass"/></label>
        </div>
    
        <style>
            #magGlass {
                height:15vh;
            }
            #mmagControl {
                display: none;
            }
            #mmagControl:checked + label > img {
                height:17vh;
            }

            .footer-icons {
                color: rgb(49, 49, 49);
                position: fixed;
                height: 100px;
                right: 0;
                bottom: 0;
                width: 25%;
                color: white;
                text-align: right;
            }
        </style>   
    
        <script>
            document.getElementById("1").style.display = "none";                
            document.getElementById("2").style.display = "none";
            document.getElementById("3").style.display = "none";
            document.getElementById("4").style.display = "none";
            function makeVisible(c) {
                if (c.checked){
                    document.getElementById("1").style.display = "inline-block";
                    document.getElementById("2").style.display = "inline-block";
                    document.getElementById("3").style.display = "inline-block";
                    document.getElementById("4").style.display = "inline-block";
                } else {
                    document.getElementById("1").style.display = "none";                
                    document.getElementById("2").style.display = "none";
                    document.getElementById("3").style.display = "none";
                    document.getElementById("4").style.display = "none";
                }
            }
        </script>';
    }
    //admin footer
    if ((strcmp($isAdmin, $adminverify)) == 0) {
        echo
        '
        <div class="footer-icons" id="mini-glass">
        <div style="float:left; margin-left:10%; margin-top:6%; display: flex; align-items: center; justify-content: space-between;">
            <div style="margin-right:10%;">
                <a href="http://localhost/CSC-490_SeniorCapstone/php/admin/adminpage.php" id="4"><img src="https://i.ibb.co/qnKsB3m/clip.png" height=60vh></a>
            </div>
        </div>
        <input type="checkbox" id="mmagControl" onclick="makeVisible(this);"/>    
        <label class="" for="mmagControl"><img src="https://i.ibb.co/3Y0xCyj/MgVec.png" id="magGlass"/></label>
    </div>

    <style>
        #magGlass {
            height:15vh;
        }
        #mmagControl {
            display: none;
        }
        #mmagControl:checked + label > img {
            height:17vh;
        }

        .footer-icons {
            color: rgb(49, 49, 49);
            position: fixed;
            height: 100px;
            right: 0;
            bottom: 0;
            width: 15%;
            color: white;
            text-align: right;
        }
    </style>   

    <script>
        document.getElementById("4").style.display = "none";
        function makeVisible(c) {
            if (c.checked){
                document.getElementById("4").style.display = "inline-block";
            } else {
                document.getElementById("4").style.display = "none";
            }
        }
    </script>';
    }
} else {
    // guest footer
    echo
    '
    <div class="footer-icons" id="mini-glass">
        <div style="float:left; float:center; margin-left:10%; margin-top:6%; display: flex; align-items: center; justify-content: space-between;">
            <div style="margin-right:20%;">
                <a href="http://localhost/CSC-490_SeniorCapstone/html/questions.php" id="1"><img src="https://i.ibb.co/pQyjM7z/man.png" height=60vh></a>            
            </div>
            <div style="margin-right:20%;">
                <a href="http://localhost/CSC-490_SeniorCapstone/php/results.php" id="3"><img src="https://i.ibb.co/CH0J7Jz/graph-removebg-preview.png" height=50vh></a>
            </div>
        </div>
        <input type="checkbox" id="mmagControl" onclick="makeVisible(this);"/>    
        <label class="" for="mmagControl"><img src="https://i.ibb.co/3Y0xCyj/MgVec.png" id="magGlass"/></label>
    </div>

    <style>
        #magGlass {
            height:15vh;
        }
        #mmagControl {
            display: none;
        }
        #mmagControl:checked + label > img {
            height:17vh;
        }

        .footer-icons {
            color: rgb(49, 49, 49);
            position: fixed;
            height: 100px;
            right: 0;
            bottom: 0;
            width: 20%;
            color: white;
            text-align: right;
        }
    </style>   

    <script>
        document.getElementById("1").style.display = "none";                
        document.getElementById("3").style.display = "none";
        document.getElementById("4").style.display = "none";
        function makeVisible(c) {
            if (c.checked){
                document.getElementById("1").style.display = "inline-block";
                document.getElementById("3").style.display = "inline-block";
                document.getElementById("4").style.display = "inline-block";
            } else {
                document.getElementById("1").style.display = "none";                
                document.getElementById("3").style.display = "none";
                document.getElementById("4").style.display = "none";
            }
        }
    </script>
    <!-- END MAGNIFY WIDGET -->';
}