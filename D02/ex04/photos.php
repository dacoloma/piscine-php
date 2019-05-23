#!/usr/bin/php
<?PHP
function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
if ($argc - 1 == 1) {

    $page = file_get_contents_curl($argv[1]);

    $page = preg_replace_callback(
        "/(<img )(.*?)(>)(.*)/si",
        function ($matches) {

            $matches[0] = preg_replace_callback(
                "/(src=\"http)(.*?)(\")/mi",
                function ($matches) {
                    $img_url = "http" . $matches[2];
                    $name = explode("/", $img_url);
                    $name = $name[count($name) - 1];
                    $name = explode("?", $name);
                    $name = $name[0];
                    $data = file_get_contents_curl($img_url);
                    file_put_contents($name, $data);
                    return ($matches[1] . strtoupper($matches[2]) . $matches[3]);
                },
                $matches[0]
            );
        },
        $page
    );
}
?>