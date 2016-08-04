<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "db_config.php";

$result = $conn->query("SELECT Date, Caption FROM rest");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"Date":"'  . $rs["Date"] . '",';
    $outp .= '"Caption":"'. $rs["Caption"] . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
?>
