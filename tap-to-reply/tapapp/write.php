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

$myJSON = json_encode($myObj);
$f=fopen('responses.json','w'); //TODO: change to responses.json
fwrite($f,$myJSON);
fclose($f);
//echo "<a href='myfile.json'>go to file</a>";
header("Location: tapapp2.php");

