<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function edit()
    {
        $home = Home::first();
        return view('home.edit', compact('home'));
    }

    public function update(Request $request)
    {
        $home = Home::first();

        $input = $request->all();

        $home->update($input);

        return redirect('/dashboard/home/edit')->with('status', 'Updated');
    }
}
