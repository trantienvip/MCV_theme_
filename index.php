<?php

$url = isset($_GET['url']) ? $_GET['url'] : '/';
require_once('./vendor/autoload.php');
require_once('./commons/database.php');

const BASE_URL = "http://localhost:8080/php2/mvc_theme/";
const PUBLIC_PATH = BASE_URL . "public/";
\Utils\Routing::start($url);

?>
