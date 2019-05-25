<?PHP
function ft_login_exists($list, $login)
{
    foreach($list as $key=> $value){
        if ($login === $key)
            return (true);
    }
    return (false);
}
if (isset($_POST["login"]) && !empty($_POST["login"]) && isset($_POST["oldpw"]) && !empty($_POST["oldpw"]) && isset($_POST["newpw"]) && !empty($_POST["newpw"]) && isset($_POST["submit"]) && $_POST["submit"] === "OK"){
    if (file_exists("../private/passwd")){
        $list = unserialize(file_get_contents("../private/passwd"));
        
        foreach($list as $tab => $user){
            $list_of_users[$user["login"]] = $user["passwd"];
        }
        
        if (ft_login_exists($list_of_users, $_POST["login"]) && hash("md5", $_POST["oldpw"]) === $list_of_users[$user["login"]]){
            foreach($list as $tab => $user){
                if ($user["login"] === $_POST["login"]){
                    $list[$tab]["passwd"] = hash("md5", $_POST["newpw"]);
                    break;
                }
            }
            
            file_put_contents("../private/passwd", serialize($list));
            echo "OK\n";
        } else
            echo "ERROR\n";
    } else {
        echo "ERROR\n";
    } 
} else
    echo "ERROR\n";
?>