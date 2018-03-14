<?php

    $con = mysqli_connect("localhost", "ksun1234","kwonsunjae1!","ksun1234");
    
    $userID= $_POST["userID"];
    $userPW= $_POST["userPW"];
    $userEMAIL=$_POST["userEMAIL"];
    $userSEX= $_POST["userSEX"];
    $userGRADE= $_POST["userGRADE"];
    $userCLASS= $_POST["userCLASS"];
    
    $statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, "ssssss",$userID,$userPW,$userEMAIL,$userSEX,$userGRADE,$userCLASS);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;
    echo json_encode($response);
    
    ?>
    