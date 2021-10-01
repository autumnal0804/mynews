<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all();
        
        if (count($posts) > 0)
        {
            $headline = null;
        }
        
        return view('profile.index', ['headline' => $headline, 'posts' => $posts]);
    }
}
