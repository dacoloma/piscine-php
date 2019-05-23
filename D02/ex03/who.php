#!/usr/bin/php
<?PHP


date_default_timezone_set('Europe/Paris');
$file_utmpx = "/var/run/utmpx";
$file = fopen($file_utmpx, "r");
while ($read = fread($file, 628)){
    $unpacked = unpack("a256name/a4id/a32line/ipid/itype/I2time/",$read);
    $array[] = $unpacked;
}
array_shift($array);
array_shift($array);
array_pop($array);
foreach($array as $logs){
    echo $logs["name"]."\t ".$logs["line"]."  ".date("M d H:i", (int)$logs["time1"]);
    echo "\n";
}
fclose($file);
?>
