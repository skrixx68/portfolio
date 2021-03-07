<?php include_once("index.html"); 
$myfile = fopen("visits.txt", "r") or die("Unable to open file!");
$count = intval(fgets($myfile)) + 1;
console.log( $count);
fclose($myfile);
$myfile = fopen("visits.txt", "w") or die("Unable to open file!");
fwrite($myfile, $count);
fclose($myfile);
?>