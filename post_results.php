<?php
require_once './db_connect.php';
session_start();
ini_set("allow_url_fopen", true);
// header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60))); // 1 hour

// Get feature scores from questions
if (isset($_POST)) {
    $email = "guest";
    $data = file_get_contents('php://input');
    $results = json_decode($data, true);
    // Last result entry id
    $lastId = 0;

    // Check if user is logged in
    if (isset($_SESSION['email'])) {
        $email = $_SESSION["email"];
    }
    // print_r("before");
    // Create result entry for user
    $resultSql = "INSERT INTO result (email) VALUES ('$email')";

    if ($conn->query($resultSql) === TRUE) {
        $lastId = $conn->insert_id;
    } else {
        echo "Error: " . $resultSql . "<br>" . $conn->error;
    }

    // print_r($conn);
    // $res = mysqli_query($conn, $resultSql) or die(mysqli_error($conn));

    // if ($res == true) {
    //     // print_r($res);

    //     $lastId = mysqli_insert_id($conn);
    // }

    foreach ($results as $key => $value) {
        // Create result feature scores for the current result
        $resultFeatureScoreSql = "INSERT INTO result_feature_score (result_ID, feature_name, score)
            VALUES ('$lastId', '$key', '$value')";

        if ($conn->query($resultFeatureScoreSql) === TRUE) {
        } else {
            echo "Error: " . $resultFeatureScoreSql . "<br>" . $conn->error;
        }

        // $res = mysqli_query($conn, $resultFeatureScoreSql);
    }
}

//close the db connection
mysqli_close($conn);
