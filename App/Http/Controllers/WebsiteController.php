<?php

namespace App\Http\Controller;

use App\Models\User;
use Symfony\Component\VarDumper\Cloner\Data;

class WebsiteController
{
    public function home()
    {
        session()->put('user_name','admin');
        session()->put('is_admin',false);
        session()->put('last_time',date('h:i:s:a'));
        session()->forget('user');

        dd($_SESSION ,session()->get('user_name'));
        return view('home');
    }
    public function about()
    {
        $user = new User();
        $data = $user->select('*')->get();
        return view('about', ['data' => $data]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog_details($id, $username)
    {
        echo "blog details";
        //    dd($_REQUEST);
        dd($id, $username);
    }
    public function profile_details()
    {
        echo "profile details";
        dd($_REQUEST);
    }
}
