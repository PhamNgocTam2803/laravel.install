<?php

namespace App\Http\Controllers;

use Dotenv\Store\File\Paths;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


class UserController extends Controller
{
    // public function __construct(protected Request $request) {}

    public function SignUp(Request $request)
    {
        $user = $request->all();
        dd($user);
    }
}
