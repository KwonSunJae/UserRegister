<?php
    $con = mysqli_connect("localhost", "ksun1234","kwonsunjae1!","ksun1234");
    $result = mysqli_query($con, "SELECT *FROM ALERT ORDER BY alertNum DESC" );
    
    
    $response = array();
    while ($row = mysqli_fetch_array($result)){
        array_push($response, array("alertNum"=>$row[0],"alertContent"=>$row[1],"alertName"=>$row[2],"alertDate"=>$row[3],"alertSeeview"=>$row[4],"alertHref"=>$row[5]));
    }
    
    
    $json = json_encode(array("response"=>$response), JSON_UNESCAPED_UNICODE);
    echo $json;
    mysqli_close($con);
 ?>