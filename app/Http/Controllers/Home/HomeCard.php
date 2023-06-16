<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;

class HomeCard extends Controller
{
    public function index()
    {
        $card = Card::all();
        return view('home.green-card.index', compact('card'));
    }

    public function create()
    {
        return view('home.green-card.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Card::create($input);

        return redirect('/dashboard/homecard')->with('status', 'Card created');
    }

    public function edit($id)
    {
        $cards = Card::find($id);
        
        return view('home.green-card.edit', compact('cards'));
    }

    public function update(Request $request, $id)
    {
        $card = Card::find($id)->first();

        $input = $request->all();

        $card->update($input);

        return redirect('/dashboard/homecard')->with('status', 'Updated Card');
    }

    public function destroy($id)
    {
        $card = Card::find($id);

        $card->delete();
        return redirect('/dashboard/homecard')->with('status', 'Card Deleted');
    }
}
