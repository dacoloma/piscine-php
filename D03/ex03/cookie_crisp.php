<?PHP

if (isset($_GET["action"]) && isset($_GET["name"])){
    switch ($_GET["action"]) {
        case "set":
            if (isset($_GET["value"]))
                setcookie($_GET["name"], $_GET["value"], time() + 3600);
            break;
        case "get":
            if (isset($_COOKIE[$_GET["name"]]) && !isset($_GET["value"]))
                echo $_COOKIE[$_GET["name"]]."\n";
            break;
        case "del":
            if (!isset($_GET["value"]))
            setcookie($_GET["name"], $_GET["value"], time() - 3600);
            break;
    }
}
?>