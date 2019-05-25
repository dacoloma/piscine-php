<?PHP
function ft_login_exists($list, $login)
{
    foreach($list as $key=> $value){
        if ($login === $value)
            return (true);
    }
    return (false);
}

if (isset($_POST["login"]) && !empty($_POST["login"]) && isset($_POST["passwd"]) && !empty($_POST["passwd"]) && isset($_POST["submit"]) && $_POST["submit"] === "OK"){
    if (!file_exists("private"))
        mkdir("private");
    if (file_exists("private/passwd")){
        $list = unserialize(file_get_contents("private/passwd"));
        foreach($list as $tab => $user){
            $list_of_users[] = $user["login"];
        }
        // print_r($list_of_users);
    }
    if (!ft_login_exists($list_of_users, $_POST["login"])){
        $entry["login"] = $_POST["login"];
        $entry["passwd"] = hash("md5", $_POST["passwd"]);
        // print_r($entry);
        $list[] = $entry;
        file_put_contents("private/passwd", serialize($list));
        header("Location:http://localhost:8081");
        // echo "OK\n";
    } else
    echo "ERROR\n";
} else
    echo "ERROR\n";
?>