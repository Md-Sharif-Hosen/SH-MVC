<?php

use App\Models\Model;
use App\Models\Test;
use App\Models\User;


include_once("./vendor/autoload.php");
include_once('./App/helper.php');
// include_once("./routes/web.php");

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'mvc_project';

$model = new Model();
$test = new Test();
$user = new User();

$user_result = $user->select('id', 'username', 'email')
    ->where('id', ">", '0')
    ->where('username', "=", 'M Sharif Ahmed')
    ->orderBy('id', 'DESC')
    ->get();


// $new_user = $user->insert([
//     "username" => "user" . rand(1000, 9999),
//     "phone_number" => rand(100000, 9999999),
//     "email" => "user" . time() . '@ex.com',
//     "address" => "Dhaka, Bangladesh"

// ]);

// $new_test = $test->insert([
//     "deleted_at" => "user" . rand(1000, 9999),
//     "updated_at" => rand(100000, 9999999),
//     "created_at" => "user" . time() . '@ex.com',
//     "title" => "Php title table inserted"

// ]);

// $test->where('id', "=", '1')->update([
//     "title" => 'THis is Sharif'
// ]);

// $user->where('id', "=", '6')->delete();

dd(
    $model,
    // $model->insert(),
    $user,
    // $user_result

    // $user->insert(),
    // $user->get(),
    // $test->get()
    // $new_user,
    // $new_test,
);
