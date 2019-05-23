<?PHP

if (array_key_exists("action", $_GET) && array_key_exists("name", $_GET)){
    switch ($_GET["action"]) {
        case "set":
            if (isset($_GET["value"]))
                setcookie($_GET["name"], $_GET["value"], time() + 3600);
            break;
        case "get":
            if (isset($_COOKIE[$_GET["name"]]))
                echo $_COOKIE[$_GET["name"]]."\n";
            break;
        case "del":
            setcookie($_GET["name"], $_GET["value"], time() - 3600);
            break;
    }
}
?>