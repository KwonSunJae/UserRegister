<?php
$con = mysqli_connect("localhost", "ksun1234","kwonsunjae1!","ksun1234");
$result = mysqli_query($con, "SELECT * FROM NOTICE ORDER BY noticeNum DESC" );


$response = array();
while ($row =mysqli_fetch_array($result)){
    array_push($response, array("noticeNum"=>$row[0],"noticeContent"=>$row[1],"noticeName"=>$row[2],"noticeDate"=>$row[3],"noticeSeeview"=>$row[4],"noticeHref"=>row[5]));
}


$json = json_encode(array("response"=>$response), JSON_UNESCAPED_UNICODE);
echo $json;
mysqli_close($con);
?>
