<?PHP
function auth($login, $passwd)
{
    $list = unserialize(file_get_contents("private/passwd"));

    foreach ($list as $tab => $user) {
        $list_of_users[$user["login"]] = $user["passwd"];
    }
    foreach ($list_of_users as $login_registered => $passwd_registered){
        if ($login_registered === $login && $passwd_registered === hash("md5", $passwd))
            return (true);
    }
    return (false);
}
?>