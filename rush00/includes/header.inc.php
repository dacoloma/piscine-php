<?php
session_start();
?>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#news">Categories</a></li>
    <?php
    if (session_status() === PHP_SESSION_ACTIVE){
        echo "<li style=\"float:right\"><a class=\"active\" href=\"login_page.php\">Sign in</a></li>\n";
        echo "<li style=\"float:right\"><a class=\"active\" href=\"signup_page.php\">Sign up</a></li>\n";
    } else{
        echo "<li class=\"active dropdown\" style=\"float:right\">";
        echo "<a class=\" \" href=\"my_profile.php\">My profile</a>";
        echo "<div class=\"dropdown-content\">\n";
        echo "\n";
        echo "<a href=\"index.php\">Logout</a>\n";
        echo "</div>"."\n";
        echo "</li>"."\n";
    }
    ?>
</ul>

