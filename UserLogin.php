<?php 

    
    $con = mysqli_connect("localhost", "ksun1234","kwonsunjae1!","ksun1234");
    
    $userID= $_POST["userID"];
    $userPW=$_POST["userPW"];
    $statement = mysqli_prepare($con, "SELECT userID, userPW FROM USER WHERE userID = ? AND userPW=?");
    mysqli_stmt_bind_param($statement, "ss", $userID,$userPW);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID,$userPW);
    
    $response= array();
    $response["success"] = false;
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"]=true;
    }
    echo json_encode($response);
?>