<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog(Request $request)
    {
        // Kiểm tra Session login có tồn tại hay không
        if ($request->session()->has('login') && $request->session()->get('login')) {
            return view('layouts.blog');
        }

        $message = 'You are not logged in';
        $request->session()->flash('not-login', $message);

        return view('layouts.login');
    }
}
