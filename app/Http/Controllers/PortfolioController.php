<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function portfolio_add()
    {
        $data['getrecord'] = Aboutme::all();

        return view('backend.portfolio.add', $data);
    }

    public function portfolio_store(Request $request)
    {

        $insertRecord = new Portfolio();

        $insertRecord->title = trim($request->title);
        $insertRecord->description = trim($request->description);
        $insertRecord->url = trim($request->url);


        if (!empty($request->file('image'))) {
            if (!empty($insertRecord->profile) && file_exists('uploads/profile/' . $insertRecord->profile)) {
                unlink('uploads/portfolio/' . $insertRecord->profile);
            }
            $file = $request->file('image');
            $randomStr = str()->random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();

            $file->move('uploads/portfolio', $filename);
            $insertRecord->image = $filename;
        }
        $insertRecord->save();

        return redirect()->route('admin.portfolio')->with('success', "portfolio added successfully..");
    }

    public function portfolio_edit($id)
    {
        $data['getrecord'] = Aboutme::all();

        $portfolio = Portfolio::findOrFail(decrypt($id));
        return view('backend.portfolio.edit', $data, compact('portfolio'));
    }

    public function portfolio_update($id, Request $request)
    {
        $portfolio = Portfolio::findOrFail($id);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $randomStr = str()->random(30);

            $filename = $randomStr . '.' . $extension;

            $path = 'uploads/portfolio';
            $file->move($path, $filename);

            //check whether the file exist or not
            if (File::exists($portfolio->image)) {
                File::delete($portfolio->image);
            }
        }

        $portfolio->update([
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
            'image' => $filename
        ]);
        return redirect()->route('admin.portfolio')->with('success', 'Portfolio Updated successfully');
    }

    public function portfolio_delete($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        return redirect()->route('admin.portfolio')->with('success', 'Portfolio deleted successfully');
    }
}
