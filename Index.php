<?php
include_once("./vendor/autoload.php");
$page_url = $_SERVER[ "REQUEST_URI"];

// routing
//---------------------
// if($page_url === "/contact"){
//     include_once("./contact.php");
// }
// if($page_url === "/about"){
//     include_once("./about.php");
// }

// routing
//--------------
if (file_exists(__DIR__.$page_url.".php")){
    include(__DIR__.$page_url.".php");
}else{
    echo "404 not found";
}



dd($_SERVER,$page_url,__DIR__,file_exists(__DIR__."/about.php"));

?>