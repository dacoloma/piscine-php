<?php
if (isset($_POST['submit'])) {
    // Fetching variables of the form which travels in URL
    $login = $_POST['login'];
    $password = $_POST['passwd'];

    if ($login != '' && $passwd != '') {
        //  To redirect form on a particular page
        header("Location:http://localhost:8081");
    } else {
        ?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!"; ?></span> <?php
}
}
?>