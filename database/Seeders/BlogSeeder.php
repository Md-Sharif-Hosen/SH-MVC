<?php

namespace database\Seeders;

use App\Models\Blog;
use App\Models\User;

class BlogSeeder
{
    public function run()
    {

        $blog = new Blog();
        $blog->truncate();

        $blog->insert([
            'title' => "sharif Ahmed ",
            'description' => "
            Hey There, THis is Sharif Ahmed. I am a full stack devoloper at Techpark IT
            ",
            'image' => '1.png',
        ]);
        $blog->insert([
            'title' => "sharif Ahmed ",
            'description' => "
            Hey There, THis is Sharif Ahmed. I am a full stack devoloper at Techpark IT
            ",
            'image' => '1.png',
        ]);
        $blog->insert([
            'title' => "sharif Ahmed ",
            'description' => "
            Hey There, THis is Sharif Ahmed. I am a full stack devoloper at Techpark IT
            ",
            'image' => '1.png',
        ]);
        $blog->insert([
            'title' => "sharif Ahmed ",
            'description' => "
            Hey There, THis is Sharif Ahmed. I am a full stack devoloper at Techpark IT
            ",
            'image' => '1.png',
        ]);
        $blog->insert([
            'title' => "sharif Ahmed ",
            'description' => "
            Hey There, THis is Sharif Ahmed. I am a full stack devoloper at Techpark IT
            ",
            'image' => '1.png',
        ]);
        $blog->insert([
            'title' => "sharif Ahmed ",
            'description' => "
            Hey There, THis is Sharif Ahmed. I am a full stack devoloper at Techpark IT
            ",
            'image' => '1.png',
        ]);
    }
}
