<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::all();
        return view('faq.index', compact('faq'));
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Faq::create($input);

        return redirect('/dashboard/faq')->with('status', 'Faq Created');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('faq.edit',compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $faq = Faq::find($id);

        $input = $request->all();

        $faq->update($input);

        return redirect('/dashboard/faq')->with('status', 'Faq Updated');
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);

        $faq->delete($id);

        return redirect('/dashboard/faq')->with('status','Faq Deleted');
    }

}
