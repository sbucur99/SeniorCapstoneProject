<?php
include_once './header.php';
header('Access-Control-Allow-Origin: *');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/results.css">
</head>



<body>
    <div class="result-wrapper">
        <div class="big-box">
            <h1>Here Are Your Results:</h1>

            <canvas id="results-pie-chart"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
            <script type="module" src="../js/JStoPython.js"></script>
            <script type="module" src="../js/piechart.js"></script>
        </div>

        <div class="small-box">
            <h1 id="my-major">Suggested Major:</h1>
            <p id="my-major-text">Error: Try running Python file app.py</p>

        </div>

        <div class="small-box">
            <div class="small-container d-flex flex-column justify-content-center align-items-center">

                <!-- If not logged in, give option to create an account -->
                <?php
                if (isset($_SESSION['email'])) {
                    //Logged in
                } else {
                    //Not logged in, Display save button
                    echo '<a href="http://localhost/CSC-490_SeniorCapstone/php/LoginPage.php" class="btn">Login to Save</a>';
                }
                ?>

                <a href="http://localhost/CSC-490_SeniorCapstone/html/questions.php" class="btn">Take Again</a>
            </div>
        </div>
    </div>
</body>
<!-- Change to fit FOOTER -->
<div style="margin-top:10%;"></div>

<?php include 'footer.php'; ?>
<!-- < ?php include 'widget.php'; ?> -->

</html>