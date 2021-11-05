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

$filename = 'responses.json';
// Let's make sure the file exists and is writable first.
if (is_writable($filename)) {

    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $somecontent will go when we fwrite() it.
    if (!$handle = fopen($filename, 'a')) {
         echo "Cannot open file ($filename)";
         exit;
    }
    //maybe fopen ???
    // Write  to our opened file.
    if (fwrite($handle, $myJSON) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }

    echo "Success, wrote to file ($filename)";

    fclose($handle);

} else {
    echo "The file $filename is not writable";
    exit;
}
header("Location: tapapp2.php");

