<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio_add()
    {
        $data['getrecord'] = Aboutme::all();

        return view('backend.portfolio.add', $data);
    }

    public function portfolio_store(Request $request)
    {

    }
}
