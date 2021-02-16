<?php
$path = $_SERVER["REQUEST_URI"];

if ($path == "/") {
    $path = "/home";
}

if (array_key_exists("extension", pathinfo($path))) {
    // resource
    return false;
}

$page_description = "Useful tips and tricks for the everyday wower";
$page_keywords = "WOW,World of Warcraft,Shadowlands,Class,Covenants,Guide,Guide";
$page_title = "";

$path = "pages/$path.php";

if (!file_exists($path)) {
    $path = "pages/404.php";
}

ob_start();
require $path;
$page_content = ob_get_clean();
ob_flush();

include "index.php"

?>