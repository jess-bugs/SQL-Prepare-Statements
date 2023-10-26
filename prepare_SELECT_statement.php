<?php


$query = "select * from $table";
$stmt = mysqli_prepare($conn, $query);

if($stmt) {


    //Execute
    mysqli_stmt_execute($stmt);


    //Get the result
    $result = mysqli_stmt_get_result($stmt);


    //Loop through the result
    while($row = mysqli_fetch_assoc($result)) {

        echo "<br>" . $row['Browser'];
    }

    mysqli_stmt_close($stmt);


}


mysqli_close($conn);


    
?>