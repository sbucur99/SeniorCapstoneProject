<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/questions.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body>
    <?php include '../php/header.php'; ?>


    <div class="container" style="top:60%">
        <div id="questions" class="justify-center flex-column">
            <div id="hud">
                <div class="hud-item">
                    <p id="progressText" class="hud-prefix">
                        Question
                    </p>
                    <div id="progressBar">
                        <div id="progressBarFull"></div>
                    </div>
                </div>
                <div class="hud-item">
                    <p class="hud-prefix">
                        
                    </p>
                    <h1 class="hud-main-text" id="score">
                        
                    </h1>
                </div>
            </div>
            <h1 id="question">What is your response to this question?</h1>
            <div class="choice-container">
                <p class="choice-prefix"></p>
                <p class="choice-text" data-number="1">Choice 1</p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix"></p>
                <p class="choice-text" data-number="2">Choice 2</p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix"></p>
                <p class="choice-text" data-number="3">Choice 3</p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix"></p>
                <p class="choice-text" data-number="4">Choice 4</p>
            </div>
        </div>
    </div>
    <script type="module" src="../js/questions.js"></script>
</body>
<footer style="margin-bottom:10%;">
    <div class="footer">
    </div>
</footer>
<?php include '../php/cursor.php'; ?>
<?php include '../php/footer.php'; ?>
<?php include '../php/widget.php'; ?>

</html>