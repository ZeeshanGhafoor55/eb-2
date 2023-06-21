<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Photo;

class HomeController extends Controller
{
    public function edit()
    {
        $photo = Photo::all();
        $home = Home::first();
        return view('home.edit', compact('home','photo'));
    }

    public function update(Request $request)
    {
        $home = Home::first();

        $input = $request->all();

        $home->update($input);

        return redirect('/dashboard/home/edit')->with('status', 'Updated');
    }
}
