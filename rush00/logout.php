<?PHP
session_start();

// $_SESSION["logged_on_user"] = "";
session_destroy();
header("Location:http://localhost:8081");

?>