#!/usr/bin/php
<?PHP
if ($argc - 1 >= 1){
  // $array = preg_split('/\s+/', $argv[1]);
  $test = "Cette   phrase   contient des espaces et\tdes\ttabulations";
  echo $test . "\n";
  $array = preg_split('/\s+/', $test);
  $str = implode(" ", $array);
  echo $str . "\n";
}
?>
