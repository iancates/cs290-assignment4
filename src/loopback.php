<?php
$method;
$param;

if($_SERVER['REQUEST_METHOD'] === 'POST') { //Checks if post input
    $method = 'POST';
    $param = $_POST;
}
if($_SERVER['REQUEST_METHOD'] === 'GET') { //Checks if get input
    $method = 'GET';
    $param = $_GET;
}

$json = ["Type" => $method, "parameters" => $param];
echo json_encode($json);

?>