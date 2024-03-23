
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
echo '
    <!-- HTML -->
    <div class="cursor" style="pointer-events: none;">
        <div class="click-animation">
            <div class="shape circle big"></div>
            <div class="shape circle small"></div>
            <div class="shape triangle yellow"></div>
            <div class="shape triangle green"></div>
            <div class="shape disc"></div>
        </div>
    </div>
    <!-- END HTML -->
    <!-- JS -->
    <script>
        const cursorAnimation = document.querySelector(".cursor");
        const cursors = document.querySelectorAll(".cursor");
        document.addEventListener("click", (e) => {
        let x = e.clientX;
        let y = e.clientY;
        cursorAnimation.style.top = y + "px";
        cursorAnimation.style.left = x + "px";

        cursors.forEach((cursor) => {
            cursor.classList.add("active");

            function removeCursorActive() {
                cursor.classList.remove("active");
            }
            setTimeout(removeCursorActive, 1000);
        });
        let cursorClone = cursorAnimation.cloneNode(true);
        document.querySelector("body").appendChild(cursorClone)

        });
    </script>
    <!-- END JS -->
    <!-- CSS -->
    <style>
        .cursor {
            z-index: 99999;
            position: fixed;
        }

        .cursor .click-animation {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .cursor .click-animation .shape {
            position: absolute;
            opacity: 0;
        }

        .cursor .click-animation .shape.circle.big {
            width: 40px;
            height: 40px;
            border: 2px solid #2ca8fa;
            border-radius: 50%;
        }

        .cursor .click-animation .shape.circle.small {
            width: 20px;
            height: 20px;
            border: 1px solid #2ca8fa;
            border-radius: 50%;
        }

        .cursor .click-animation .shape.circle {
            animation: click-animation-circle 3s ease-out;
        }

        @keyframes click-animation-circle {
            0% {
                opacity: 0;
            }

            5% {
                opacity: 1;
            }

            30% {
                opacity: 0;
                transform: scale(3);
            }
        }

        .cursor .click-animation .shape.triangle.yellow {
            border-style: solid;
            border-width: 0 5px 10px 5px;
            border-color: transparent transparent #f9de2d transparent;
        }

        .cursor.active .click-animation .shape.triangle.yellow {
            animation: click-animation-triangle-yellow 3s ease-out;
        }


        @keyframes click-animation-triangle-yellow {
            0% {
                opacity: 0;
            }

            5% {
                opacity: 1;
            }

            40% {
                opacity: 0;
                transform: scale(2.5) translate(50px, -50px) rotate(360deg);
            }
        }

        .cursor .click-animation .shape.triangle.green {
            border-style: solid;
            border-width: 0 3.5px 7px 3.5px;
            border-color: transparent transparent #00992e transparent;
        }

        .cursor.active .click-animation .shape.triangle.green {
            animation: click-animation-triangle-green 3s ease-out;
        }

        @keyframes click-animation-triangle-green {
            0% {
                opacity: 0;
            }

            5% {
                opacity: 1;
            }

            40% {
                opacity: 0;
                transform: scale(2.5) translate(20px, 50px) rotate(360deg);
            }
        }

        .cursor .click-animation .shape.disc {
            width: 8.5px;
            height: 8.5px;
            background: pink;
            border-radius: 50%;
            animation: click-animation-disc 3s ease-out;
        }

        @keyframes click-animation-disc {
            0% {
                opacity: 0;
            }

            5% {
                opacity: 1;
            }

            40% {
                opacity: 0;
                transform: scale(2) translate(-70px, -30px);
            }
        }
    </style>
    <!-- END CSS -->';