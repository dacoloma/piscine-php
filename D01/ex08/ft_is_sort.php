<?PHP
function ft_is_sort($array)
{
    $sorted = $array;
    sort($sorted);
    foreach($array as $key => $val){
        if ($val != $sorted[$key])
        return (false);
    }
    return (true);
}
?>