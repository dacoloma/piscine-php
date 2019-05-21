#!/usr/bin/php
<?PHP
$array = preg_split('/\s+/', $argv[1]);
$str = "";
foreach($array as $val){
    $str = $str . $val . " ";
}
$str = trim($str);
echo $str;
if (strlen($str) > 0){
    echo "\n";
}
?>