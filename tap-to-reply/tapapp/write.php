<?php session_start();
$ep = $_POST['ep'];
$en = $_POST['en'];
$up = $_POST['up'];
$un = $_POST['un'];

$myObj = new stdClass();
$myObj->ep = $ep;
$myObj->en = $en;
$myObj->up = $up;
$myObj->un = $un;

var_dump($myObj);
$myJSON = json_encode($myObj);
var_dump($myJSON);
// $f=fopen('responses.json','w'); //TODO: change to responses.json
// fwrite($f,$myJSON);
// fclose($f);
$bytes = file_put_contents("responses.json", $myJSON); 
// echo "The number of bytes written are $bytes.";
// echo "<a href='responses.json'>go to file</a>";
header("Location: tapapp2.php");

