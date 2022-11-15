<?php
// namespace App\Http\Controller;
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
    public function contact_submit()
    {
        dd($_REQUEST);
    }
}
?>