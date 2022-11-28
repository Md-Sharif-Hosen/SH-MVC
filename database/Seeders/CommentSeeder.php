<?php

namespace database\Seeders;

use App\Models\Comment;

class CommentSeeder
{
    public function run()
    {

        $user = new Comment();
        $user->truncate();
        $user->insert([
            'title' => 'tarek',
            'email' => 'tarek@gmail.com'

        ]);
        $user->insert([
            'title' => 'sharif',
            'email' => 'sharif@gmail.com'

        ]);
        $user->insert([
            'title' => 'shefat',
            'email' => 'shefat@gmail.com',

        ]);
    }
}
