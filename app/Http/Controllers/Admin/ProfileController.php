<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
 
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        $this->validate($reqest, Profile::$rules);
        
        $profile = new Profile();
        $form = $request->all();
        
        $profile->fill($form);
        $profile->save();
        return redirect('admin/profile/create');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title !='') {
            $posts = Profile::where('title', $cond_title)->get();
        } else {
            $posts = Profile::all();
        }
        return view('admin.news.index',['posts' =>$posts, 'cond_title' => $cond_title]);
    }
    public function edit(Request $request)
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }  
}
