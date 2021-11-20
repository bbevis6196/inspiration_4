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

$f = fopen('responses.json', 'w');
if (fwrite($f, $myJSON)) {
    // echo "success";
    fclose($f);
    
    // header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
    // header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    // header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    // header("Cache-Control: post-check=0, pre-check=0", false);
    // header("Pragma: no-cache");
    
    //header("Location: tapapp2.php");
    echo "<script>window.location.replace('tapapp2.php');</script>";
    die();
} else {
    fclose($f);
    echo "failed to write";
    echo "<br><a href='tapapp2.php'>back to app</a>";
}