#!/usr/bin/php
<?PHP
function ft_split($str)
{
    $str = trim($str);
    if (strlen($str) < 1){
        return (NULL);
    }
    $array = preg_split('/\s+/', $str);
    return ($array);    
}
$i = 1;
$final = array();
while ($i < $argc){
    $tmp = ft_split($argv[$i]);
    if ($tmp != NULL){
        $final = array_merge($final, $tmp);
    }
    $i++;
}
sort($final);
foreach($final as $val){
    echo $val;
    echo "\n";
}
?>