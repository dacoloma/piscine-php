#!/usr/bin/php
<?PHP

function ft_valid_format($array)
{
  if ($array[0]) { }
  if (!is_numeric($array[1]) || strlen($array[1]) != 2) {
    return (false);
  }
  if ($array[2]) { }
  if (!is_numeric($array[3]) || strlen($array[3]) != 4) {
    return (false);
  }
  if (strlen($array[4]) != 8) {
    echo "DEBUG\t1\n";
    return (false);
  } else {
    $time = explode(":", $array[4]);
    if (count($time) != 3) {
      echo "DEBUG\t2\n";
      return (false);
    }
    foreach ($time as $val) {
      if (!is_numeric($val) || strlen($val) != 2) {
        echo "DEBUG\t3\tval = $val\n";
        return (false);
      }
    }
  }
  return (true);
}

function ft_valid_date($time)
{
  $time = explode(" ", $time);
  $day = $time[0];
  $time = array_slice($time, 1);
  $time = implode(" ", $time);
  $check = date("l", strtotime($time));
  if (strcasecmp($day, $check) == 0)
    return (1);
  return (0);

}
function ft_date_convert($date)
{
  $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
  $french_days = array('/^[lL]?undi/', '/^[mM]?ardi/', '/^[mM]?ercredi/', '/^[jJ]?eudi/', '/^[vV]?endredi/', '/^[sS]?amedi/', '/^[dD]?imanche/');
  $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
  $french_months = array('/[jJ]?anvier/', '/[fF]?[eé]?vrier/', '/[mM]?ars/', '/[aA]?vril/', '/[mM]?ai/', '/[jJ]?uin/', '/[jJ]?uillet/', '/[aA]?o[uû]?t/', '/[sS]?eptembre/', '/[oO]?ctobre/', '/[nN]?ovembre/', '/[dD]?[eé]?cembre/');
  $time = preg_replace($french_days, $english_days, $date);
  $time = preg_replace($french_months, $english_months, $time);
  return ($time);
}

function ft_error()
{
  echo "Wrong Format\n";
}

date_default_timezone_set('Europe/Paris');

if ($argc - 1 >= 1 ){
  $array = explode(" ", $argv[1]);
  if (count($array) == 5 ){
    if (ft_valid_format($array) ){
      $time = ft_date_convert($argv[1]);
      if (ft_valid_date($time))
        echo strtotime($time) . "\n";
      else
      ft_error();

    } else {
      ft_error();
    }
  } else {
    ft_error();
  }
}
?>