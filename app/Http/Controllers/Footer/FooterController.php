<?php

namespace App\Http\Controllers\Footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    // public function index()
    // {
    //     $footer = Footer::all();
    //     return view('headerfooter.index', compact('footer'));
    // }

    // public function create()
    // {
    //     return view('headerfooter.create');
    // }

    // public function store(Request $request)
    // {
    //     $footer = new Footer;

    //     $footer->footer_col1_title = $request->footer_col1_title;
    //     $footer->footer_col1_desc = $request->footer_col1_desc;
    //     $footer->footer_col2_title = $request->footer_col2_title;
    //     $footer->footer_col2_link = $request->footer_col2_link;
    //     $footer->footer_col3_title = $request->footer_col3_title;

    //     $footer->footer_col3_link = $request->footer_col3_link;
    //     $footer->footer_col4_title = $request->footer_col4_title;
    //     $footer->footer_col4_socialtitle = $request->footer_col4_socialtitle;
    //     $footer->footer_col4_sociallink = $request->footer_col4_sociallink;
    //     $footer->copyright = $request->copyright;

    //     $footer->save();

    //     return redirect('/dashboard/footer')->with('status', 'Footer added successfully');
    // }

    public function edit()
    {
        $footer = Footer::first();
        return view('headerfooter.edit', compact('footer'));
    }

    public function update(Request $request)
    {
        $footer = Footer::first();

        // $footer->footer_col1_title = $request->footer_col1_title;
        // $footer->footer_col1_desc = $request->footer_col1_desc;
        // $footer->footer_col2_title = $request->footer_col2_title;
        // $footer->footer_col2_link = $request->footer_col2_link;
        // $footer->footer_col3_title = $request->footer_col3_title;

        // $footer->footer_col3_link = $request->footer_col3_link;
        // $footer->footer_col4_title = $request->footer_col4_title;
        // $footer->footer_col4_socialtitle = $request->footer_col4_socialtitle;
        // $footer->footer_col4_sociallink = $request->footer_col4_sociallink;
        // $footer->copyright = $request->copyright;
        $input = $request->all();

        $footer->update($input);

        return redirect('/dashboard/footer/edit')->with('status', 'Footer updated successfully');
    }
}

