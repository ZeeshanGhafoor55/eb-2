<?php

namespace App\Http\Controllers\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class Team extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('testimonial.index', compact('testimonial'));
    }

    public function create()
    {
        return view('testimonial.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'name' => 'required',
            'country' => 'required',
          ]);

        $input = $request->all();

        Testimonial::create($input);
        return redirect('/dashboard/testimonial')->with('status', 'Testimonial Created');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'name' => 'required',
            'country' => 'required',
          ]);
          
        $testimonial = Testimonial::find($id);

        $input = $request->all();

        $testimonial->update($input);

        return redirect('/dashboard/testimonial')->with('status', 'Testimonial Updated');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        $testimonial->delete();

        return redirect('/dashboard/testimonial')->with('status','Testimonial Deleted');
    }
}
