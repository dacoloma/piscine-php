<?PHP
function ft_error()
{
	header("HTTP/1.0 401 Unauthorized");
	header("X-Powered-By: PHP/5.4.26");
	header('WWW-Authenticate: Basic realm="Espace membres"');
	header("Content-Length: 72");
	header("Content-Type: text/html");
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
}

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
	if ($_SERVER['PHP_AUTH_USER'] === "zaz" && $_SERVER['PHP_AUTH_PW'] === "jaimelespetitsponeys"){
		$img_data = file_get_contents("../img/42.png");
		$img_base64 = base64_encode($img_data);
		echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/png;base64,$img_base64'>\n</body></html>\n";
	} else{
		ft_error();
	}	
} else 
	ft_error();
?>