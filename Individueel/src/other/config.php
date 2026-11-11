<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https";
} else {
    $url = "http";
}

$url .= "://{$_SERVER['HTTP_HOST']}";

define("BASEURL", "{$url}/");
define("DOCUMENT_ROOT", "{$_SERVER['DOCUMENT_ROOT']}");

if ($_SERVER['REQUEST_URI'] != "/") {
    define("CURRENT_PAGE", "{$url}{$_SERVER['REQUEST_URI']}");
} else {
    define("CURRENT_PAGE", "{$url}");
}

?>