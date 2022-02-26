<?php
use Controllers\homeController;
use Controllers\aboutController;
use Controllers\blogController;
use Controllers\contactController;

include '../src/views/header.php';
require '../vendor/autoload.php';


// var_dump($_GET);
// echo $url;

$url = explode("/", $_GET['url']);
// var_dump($url);

$ctrl = $url[0];
$act = $url[1]??NULL;
$num = $url[2]??NULL;

switch ($ctrl) {
    case "home":
        (new HomeController)->view();
        break;
    case "about":
        // (new HomeController)->view();
        (new AboutController)->view();
        break;
    case "blog":
        if ($act == "detail") {
            // (new HomeController)->view();
            (new BlogController)->viewD();
        }
        else {
            // (new HomeController)->view();
            (new BlogController)->view();
        }
        break;
    case "contact":
        // (new HomeController)->view();
        (new ContactController)->view();
        break;
}
// include "../src/views/".$ctrl.".php";



include '../src/views/footer.php';
