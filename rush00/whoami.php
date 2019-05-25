<?PHP
session_start();

// echo "COOKIE : ".$_SESSION["logged_on_user"]."\n";
// print_r($_SESSION);

if (isset($_SESSION["logged_on_user"]) && !empty($_SESSION["logged_on_user"])){
    echo $_SESSION["logged_on_user"]."\n";
}
else
echo "ERROR\n";
?>