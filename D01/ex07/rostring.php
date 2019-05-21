#!/usr/bin/php
<?PHP
function ft_split($str)
{
    $str = trim($str);
    if (strlen($str) < 1) {
        return (NULL);
    }
    $array = preg_split('/\s+/', $str);
    return ($array);
}
$i = 1;
$tmp = ft_split($argv[1]);
$len = count($tmp);
while ($i < $len){
    echo $tmp[$i] . " ";
    $i++;
}
if ($len > 0)
echo $tmp[0] . "\n";
?>