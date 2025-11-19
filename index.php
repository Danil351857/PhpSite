<?php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    "/" => "pages/main.php",
    "/login" => "pages/Login.php",
    "/news" => "pages/news.php",
];

if (array_key_exists($url, $routes)) {
    include $routes[$url];
} else {
    include "404.php";
}
?>