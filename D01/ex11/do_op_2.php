#!/usr/bin/php
<?PHP

function ft_is_op($op)
{
    if (strlen($op) == 1 && ($op[0] == '+' || $op[0] == '-' || $op[0] == '*' || $op[0] == '/' || $op[0] == '%'))
        return (true);


    return (false);
}

function ft_find_op($str)
{
    $operators = array("+", "-", "*", "/", "%");
    foreach ($operators as $val) {
        $numbers = explode($val, $str);
        $nb_val = count($numbers);
        if ($nb_val > 1) {
            $op = $val;
            break;
        }
    }
    if ($nb_val == 2) {
        return ($op);
    }
    return (NULL);
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
    echo "Syntax Error\n";
}

if ($argc - 1 == 1) {
    $str = trim($argv[1]);
    $array = preg_split('/\s+/', $str);
    $str = implode($array);
    // echo $str . "\n";
    $operator = ft_find_op($str);
    if ($operator == NULL) {
        ft_error();
    } else {
        $numbers = explode($operator, $str);
        $x = $numbers[0];
        $y = $numbers[1];
        if (is_numeric($x) && is_numeric($y))
        {
            $res = ft_doop((int)$x, (int)$y, $operator);
            echo $res . "\n";
        }
    }
} else {
    echo "Incorrect Parameters\n";
}
?>