<?php
$filep = fopen ("./logfile.txt", "a");
if(!$filep) die("Could not open log file");

$time = date("Y-m-d H:i:s", time());

fputs($filep,$time);
fputs($filep,"\n");

fclose($filep);
print "Connect Service";

$filep = fopen ("./logfile.txt", "r");
if(!$filep) die("Could not open log file");

while ($line = fgets($filep,1024))
{
    print $line. "<br>";
}
fclose($filep);

?>