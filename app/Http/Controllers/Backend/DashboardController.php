<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.list');
    }

    public function about_me()
    {
        return view('backend.aboutme.list');
    }

    public function skillSet()
    {
        return view('backend.skillSet.list');
    }

    public function portfolio()
    {
        return view('backend.portfolio.list');
    }

    public function contact()
    {
        return view('backend.contact.list');
    }

    public function blog()
    {
        return view('backend.blog.list');
    }
}
