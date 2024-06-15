<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use App\Models\Contact;
use App\Models\Person_Info;
use App\Models\Portfolio;
use App\Models\SkillSet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['getrecord'] = Aboutme::all();
        return view('backend.dashboard.list', $data);
    }

    public function Home()
    {
        $data['getrecord'] = Aboutme::all();
        return view('backend.Home.list', $data);
    }

    public function Home_store(Request $request)
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

        return redirect()->back()->with('success', "Home Page added successfully..");
    }

    public function About_me()
    {
        $data['getrecord'] = Aboutme::all();
        $info['person'] = Person_Info::all();

        return view('backend.About_me.list', $data, $info);
    }

    public function About_me_store(Request $request)
    {
        if ($request->add_to_update == "Add") {
            $insertRecord = request()->validate([
                'first_name' => "required"
            ]);
            $insertRecord = new Person_Info;
        } else {
            $insertRecord = Person_Info::findOrFail($request->id);
        }

        $insertRecord->first_name = trim($request->first_name);
        $insertRecord->last_name = trim($request->last_name);
        $insertRecord->age = trim($request->age);
        $insertRecord->nationality = trim($request->nationality);
        $insertRecord->address = trim($request->address);
        $insertRecord->phone = trim($request->phone);
        $insertRecord->email = trim($request->email);
        $insertRecord->languages = trim($request->languages);
        $insertRecord->description = trim($request->description);
        $insertRecord->degree  = trim($request->Degree);
        $insertRecord->plus_two = trim($request->Plus_Two);
        $insertRecord->sslc = trim($request->SSLC);

        $insertRecord->save();
        return redirect()->back()->with('success', "Aboutme added successfully..");
    }

    public function skillSet()
    {
        $data['getrecord'] = Aboutme::all();
        $skillset['data'] = SkillSet::all();
        return view('backend.skillSet.list', $data, $skillset);
    }

    public function skillSet_store(Request $request)
    {

        if ($request->add_to_update == "Add") {
            $inserRecords = request()->validate([
                "Frontend" => 'required'
            ]);
            $inserRecords = new SkillSet();
        } else {
            $inserRecords = SkillSet::findOrFail($request->id);
        }
        // dd($request->all());
        $inserRecords->frontend = trim($request->Frontend);
        $inserRecords->backend = trim($request->Backend);
        $inserRecords->database = trim($request->database);
        $inserRecords->vcs = trim($request->version_control);
        $inserRecords->save();
        return redirect()->back()->with('success', "Skillset added successfully..");
    }

    public function portfolio()
    {
        $portfolios = Portfolio::all();
        $data['getrecord'] = Aboutme::all();
        return view('backend.portfolio.list', $data, compact('portfolios'));
    }



    public function contact()
    {
        $data['getrecord'] = Aboutme::all();
        $contact = Contact::all();
        return view('backend.contact.list', $data, compact('contact'));
    }

    public function contact_delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->back()->with('success', "Contact deleted successfully..");
    }

    public function blog()
    {
        $data['getrecord'] = Aboutme::all();
        return view('backend.blog.list', $data);
    }

    public function myaccount()
    {
        $data['getrecord'] = Aboutme::all();
        return view('backend.my_account.list', $data);
    }

    public function myaccount_update(Request $request)
    {

        $user = request()->validate([
            'email' => 'required|unique:users,email,' . Auth::user()->id
        ]);
        $user = User::find(Auth::user()->id);

        $user->name = trim($request->name);
        $user->email = trim($request->email);

        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->back()->with('success', 'My account updated successfully');
    }
}
