<?php
include(realpath('App/Config.php'));
include(realpath('App/Helper.php'));


$db = mysqli_connect(
    globalvar('servername'),
    globalvar('username'),
    globalvar('password'),
    globalvar('database')
);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$files = array_diff(scandir(realpath('database/migrations')), array('.', '..'));

foreach ($files as $file) {
    include realpath('database/migrations/' . $file);

    $migration_class = explode('.', $file)[0];
    $migration = new $migration_class();
    $migration->up();
}
