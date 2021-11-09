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

//var_dump($myObj);
$myJSON = json_encode($myObj);
//var_dump($myJSON);
// $f=fopen('responses.json','w');
// fwrite($f,$myJSON);
// fclose($f);
//$bytes = file_put_contents("responses.json", $myJSON); 
// echo "The number of bytes written are $bytes.";
// echo "<a href='responses.json'>go to file</a>";
// usleep(250000); //sleep for 0.25 sec


$f = fopen('responses.json', 'w');
if (fwrite($f, $myJSON)) {
    // echo "success";
    fclose($f);
    header("Location: tapapp2.php");
} else {
    fclose($f);
    echo "failed to write";
    echo "<br><a href='tapapp2.php'>back to app</a>";
}