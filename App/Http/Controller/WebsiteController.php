<?php
namespace App\Http\Controller;
class WebsiteController{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
       return view('contact');
    }
    public function blog_details()
    {
       echo "blog details";
       dd($_REQUEST);
    }
    public function profile_details()
    {
       echo "profile details";
       dd($_REQUEST);
    }


}
?>