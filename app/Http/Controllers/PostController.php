<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Send $posts to post view
    public function sendPosts()
    {
        $posts = (object) [
            'post_1'  => (object) [
                'name' => 'This is post number one',
                'is_check' => true,
            ],
            'post_2' => (object) [
                'name' => 'This is post number two',
                'is_check' => false,
            ],
            'post_3' => (object) [
                'name' => 'This is post number three',
                'is_check' => true,
            ],
            'post_4' => (object) [
                'name' => 'This is post number four',
                'is_check' => false,
            ],
            'post_5' => (object) [
                'name' => 'This is post number five',
                'is_check' => true,
            ],
        ];
        return view('post', ['posts' => $posts]);
    }
}

