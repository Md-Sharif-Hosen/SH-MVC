<?php
include_once("./routes/Route.php");

$app= new Route();
$app->GET('/',"WebsiteController@home");
$app->GET('/about',"WebsiteController@about");
$app->GET('/blog_details',"WebsiteController@blog_details")->params('id' ,'username');
$app->GET('/gallery',"WebsiteController@gallery");
$app->GET('/blog',"WebsiteController@blog");

$app->GET('/user/profile_details',"WebsiteController@profile_details")->params('userId');

$app->GET('/contact',"WebsiteController@contact");
$app->POST('/contact/submit',"ContactController@contact_submit");

$app->get('/login','WebsiteController@login');
$app->post('/login/submit','WebsiteController@login_submit');
$app->get('/logout','Auth\AuthController@logout');

$app->get('/admin','Admin\AdminController@admin');
$app->get('/admin/blogs','Admin\AdminController@blog_list');
$app->get('/admin/blog/create','Admin\AdminController@blog_create');
$app->post('/admin/blog/create/store','Admin\AdminController@blog_create_store');

$app->start();
?>
