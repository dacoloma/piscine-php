#!/usr/bin/php
<?PHP

function ft_is_op($op)
{
    if (strlen($op) == 1 && ($op[0] == '+' || $op[0] == '-' || $op[0] == '*' || $op[0] == '/' || $op[0] == '%'))
        return (true);

    
    return (false);
}
function ft_doop($x, $y, $op)
{
    if ($op == '+')
        return ($x + $y);
    if ($op == '-')
        return ($x - $y);
    if ($op == '*')
        return ($x * $y);
    if ($op == '/')
        return ($x / $y);
    if ($op == '%')
        return ($x % $y);
}

function ft_error()
{
    echo "Incorrect Parameters\n";
}

if ($argc - 1== 3) {
    $x = trim($argv[1]);
    $y = trim($argv[3]);
    $op = trim($argv[2]);

    if (is_numeric($x) && is_numeric($y) && ft_is_op($op)) {
        $res = ft_doop((int)$x, (int)$y, $op[0]);
        echo $res . "\n";
    } else {
        ft_error();
    }
} else {
    ft_error();
}
?>