<?php


$query = "insert into $table (Username, Password) values (?, ?)";
$stmt = mysqli_prepare($conn, $query);


if($stmt) {

    //bind parameters
    mysqli_stmt_bind_param($stmt, "sssss", $IP, $BROWSER, $DATE, $TIME, $URL);


    //Execute
    $result = mysqli_stmt_execute($stmt);


    if($result) {

        echo "Inserted!";
    
    } else {

        echo "ERROR: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);

} else {

    echo "Statement Error: " . mysqli_error($conn);
}

mysqli_close($conn);


    
?>