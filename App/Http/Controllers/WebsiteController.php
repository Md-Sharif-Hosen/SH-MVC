<?php

namespace App\Http\Controller;

use App\Models\User;

class WebsiteController
{
    public function home()
    {
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
