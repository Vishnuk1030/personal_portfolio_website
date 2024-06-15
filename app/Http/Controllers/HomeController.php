<?php

namespace App\Http\Controllers;

use App\Events\Customer_Contact_Me;
use App\Http\Controllers\Controller;
use App\Mail\Customer_Mail;
use App\Models\Aboutme;
use App\Models\Contact;
use App\Models\Person_Info;
use App\Models\Portfolio;
use App\Models\SkillSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
// use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    public function index()
    {
        $data['record'] = Aboutme::firstOrFail();
        $data['info'] = Person_Info::firstOrFail();
        $data['set'] = SkillSet::firstOrFail();
        $data['portfolio'] = Portfolio::get();
        return view('home', $data);
    }

    public function pdf()
    {
        // $users = Person_Info::get();
        // $pdf = Pdf::loadView('pdf.Resume', ['users' => $users]);
        // return $pdf->download('resume.pdf');
        $file = public_path('cv/updated_myresume.pdf');

        return response()->download($file);
    }

    public function Contact_post(Request $request)
    {

        $user = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);
        Mail::to('portfolio_admin@gmail.com')
            ->send(new Customer_Mail($user));

        // Customer_Contact_Me::dispatch($user);

        return redirect()->back()->with('success', 'Your message submitted successfully..!');
    }
}
