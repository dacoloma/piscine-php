#!/usr/bin/php
<?PHP

if ($argc - 1 > 1) {
    $to_find = $argv[1];
    $i = 2;
    while ($i < $argc){
        $couple = explode(":", $argv[$i]);
        $hash[$couple[0]] = $couple[1];
        $i++;
    }
    // echo "KEY = $to_find \n";
    foreach($hash as $key=>$val){
        if ($to_find == $key){
            echo $val . "\n";
            break;
        }
    }
}
?>