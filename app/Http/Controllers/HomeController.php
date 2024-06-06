<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['getrecord'] = Aboutme::all();
        return view('home', $data);
    }
}
