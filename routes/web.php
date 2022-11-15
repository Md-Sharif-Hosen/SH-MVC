<?php
include_once("./routes/Route.php");

$app= new Route();
$app->GET('/',"WebsiteController@home");
$app->GET('/about',"WebsiteController@about");
$app->GET('/gallery',"WebsiteController@gallery");
$app->GET('/blog',"WebsiteController@blog");

$app->GET('/contact',"WebsiteController@contact");
$app->POST('/contact/submit',"WebsiteController@contact_submit");

$app->GET('/login',"WebsiteController@login");
$app->POST('/login/submit',"WebsiteController@login_submit");

$app->start();
?>