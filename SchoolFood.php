<?php

$con = mysqli_connect("localhost", "ksun1234","kwonsunjae1!","ksun1234");
$result = mysqli_query($con, "SELECT foodDate, foodCont FROM FOOD ORDER BY foodDate DESC" );


$response = array();
while ($row = mysqli_fetch_array($result)){
    array_push($response, array("foodDate"=>$row[0],"foodCont"=>$row[1]));
}


$json = json_encode(array("response"=>$response), JSON_UNESCAPED_UNICODE);
echo $json;
mysqli_close($con);
?>