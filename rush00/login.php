<?PHP
include 'auth.php';

session_start();
if (isset($_GET["login"]) && !empty($_GET["login"]) && isset($_GET["passwd"]) && !empty($_GET["passwd"])){
    if (auth($_GET["login"], $_GET["passwd"])){
        // $_SESSION["logged_on_user"] = $_GET["login"];
        // echo "OK\n";
        header("Location:http://localhost:8081");
    } else {
        $_SESSION["logged_on_user"] = "";
        echo "ERROR\n";
    }
} else
echo "ERROR\n";

?>