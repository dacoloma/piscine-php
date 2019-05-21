#!/usr/bin/php
<?PHP
    $i = 1;
    while ($i < $argc){
        echo $argv[$i]. "\n";
        $i++;
    }
    // for ($i = 0; $i < $argc; $i++) {
	// 	echo "Argument #" . $i . " - " . $argv[$i] . "\n";
	// }

?>