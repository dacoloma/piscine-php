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

function ft_print_alpha(&$array){
    foreach ($array as $val){
        if (ctype_alpha($val[0])){
            echo $val . "\n";
        }
    }
}


function ft_print_num(&$array){
    foreach ($array as $val){
        if (ctype_digit($val[0])){
            echo $val . "\n";
        }
    }
}

function ft_print_others(&$array){
    foreach ($array as $val){
        if (!ctype_digit($val[0]) && !ctype_alpha($val[0])){
            echo $val . "\n";
        }
    }
}

if ($argc != 1){
    $i = 1;
    $final = array();
    while ($i < $argc){
        $tmp = ft_split($argv[$i]);
        if ($tmp != NULL){
            $final = array_merge($final, $tmp);
        }
        $i++;
    }
    natcasesort($final);
    ft_print_alpha($final);
    ft_print_num($final);
    ft_print_others($final);   
}
?>