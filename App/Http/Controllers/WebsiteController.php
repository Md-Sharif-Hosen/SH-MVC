<?php

namespace App\Http\Controllers;

use App\Models\User;
use Symfony\Component\VarDumper\Cloner\Data;

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
 
    public function profile_details()
    {
        echo "profile details";
        dd($_REQUEST);
    }

    public function login()
    {
        return view('auth/login');
    }

    public function login_submit()
    {
        extract((array) request());
        $check = auth()->login($email, $password);

        if ($check) {
            return redirect('/');
        } else {
            return back();
        }
    }
}