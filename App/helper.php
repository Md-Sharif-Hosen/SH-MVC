<?php
use Doctrine\Inflector\InflectorFactory;
use App\Abstracts\Session;
function view($file_name, $arr = [])
{
    if (is_array($arr) && count($arr)) {
        extract($arr);
    }
    include_once($_SERVER['DOCUMENT_ROOT'] . "/resource/views/$file_name.php");
}

function request()
{
    return (object) $_REQUEST;
}
function resource_include($file_name, $arr = [])
{
    if (is_array($arr) && count($arr)) {
        extract($arr);
    }
    include_once($_SERVER['DOCUMENT_ROOT'] . "/resource/views/$file_name.php");
}

function asset($file_name)
{
    $url = strtolower(explode('/', $_SERVER['SERVER_PROTOCOL'])[0]) . "://";
    $url .= $_SERVER['HTTP_HOST'];
    // dd($url,$file_name);
    return $url . "/Public/$file_name";
}
function globalvar($variable)
{
    return $GLOBALS[$variable];
}
function inflector()
{
    $inflector = InflectorFactory::create()->build();
    return $inflector;
}
function session(){
    return new Session();
}