<?php
$exec = exec("hostname"); //the "hostname" is a valid command in both windows and linux
$hostname = trim($exec); //remove any spaces before and afterhost
$ip = gethostbyname($hostname);
// display it back
echo "<h2>Welcome to CiscoLive 2015</h2>";
echo "<h3> Ip Address of this manchine :</h3> " . $hostname;
echo "<br><h3>Name of this machine :</h3> " . $ip
?>
