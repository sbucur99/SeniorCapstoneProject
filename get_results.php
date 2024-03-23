<?php
    require_once './db_connect.php';
    
    //fetch table rows from mysql db
    $sql = "SELECT * FROM result_feature_score AS rfs
            INNER JOIN(
            SELECT * FROM result
            ORDER BY result_ID DESC LIMIT 1) AS r
            ON rfs.result_ID = r.result_ID";

    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $emparray = array();
    while($row = mysqli_fetch_assoc($result))
    {
       $emparray[] = $row;
    }

    echo json_encode($emparray);   

    //close the db connection
    mysqli_close($conn);
?>