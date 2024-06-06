<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.list');
    }

    public function about_me()
    {
        $data['getrecord'] = Aboutme::all();
        return view('backend.aboutme.list', $data);
    }

    public function about_me_store(Request $request)
    {

        if ($request->add_to_update == "Add") {
            $insertRecord = request()->validate([
                'profile' => "required"
            ]);
            $insertRecord = new Aboutme;
        } else {
            $insertRecord = Aboutme::find($request->id);
        }
        $insertRecord->name = trim($request->urname);
        $insertRecord->description = trim($request->description);

        if (!empty($request->file('profile'))) {
            if (!empty($insertRecord->profile) && file_exists('uploads/profile/' . $insertRecord->profile)) {
                unlink('uploads/profile/' . $insertRecord->profile);
            }
            $file = $request->file('profile');
            $randomStr = str()->random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();

            $file->move('uploads/profile', $filename);
            $insertRecord->profile = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', "Aboutme added successfully..");
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
