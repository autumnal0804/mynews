<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsContoroller extends Controller
{
    //
public function add()
{
    returan view('admin.news.create');
}

public function create()
{
　　return redirect('admin/profile/create');
}

　　public function edit()
{
　　return view('admin.profile.edit');
}

public function update()
{
　　return redirect('admin/profile/edit');
}
