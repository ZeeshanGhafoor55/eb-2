<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('order','ASC')->get();
        return view('menu.index', compact('menus'));
    }
    
    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $menu = new Menu;
        $menu->name=$request->name;
        $menu->link=$request->link;
        $menu->radios=$request->radios;
        $menu->submenu=$request->submenu;
        $menu->order=$request->order;

        $menu->save();

        return redirect('/dashboard/menu')->with('status','Menu created successfully');
    }

    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu =Menu::find($id);
        $menu->name=$request->name;
        $menu->link=$request->link;
        $menu->radios=$request->radios;
        $menu->submenu=$request->submenu;
        $menu->order=$request->order;

        $menu->save();

        return redirect('/dashboard/menu')->with('status','Menu updated successfully');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);

        $menu->delete();
        return redirect('/dashboard/menu')->with('status','Menu Deleted successfully');
    }
}
