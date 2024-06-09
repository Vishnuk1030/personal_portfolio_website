<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use App\Models\Person_Info;
use App\Models\SkillSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    public function index()
    {
        $data['getrecord'] = Aboutme::all();
        $personal['info'] = Person_Info::all();
        $skill['set'] = SkillSet::all();

        return view('home', $data, $personal, $skill);
    }

    public function pdf()
    {
        // $users = Person_Info::get();
        // $pdf = Pdf::loadView('pdf.Resume', ['users' => $users]);
        // return $pdf->download('resume.pdf');
        $file = public_path('cv/updated_myresume.pdf');

        return response()->download($file);
    }
}
