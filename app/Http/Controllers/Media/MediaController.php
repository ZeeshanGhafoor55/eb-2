<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class MediaController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('media.index', compact('photos'));
    }

    public function create()
    {
        return view('media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Photo::create($input);
     
        return redirect('/dashboard/media')->with('status','Image created successfully.');
    }

    public function edit($id)
    {
        $photo = Photo::find($id);

        return view('media.edit', compact('photo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        $photo = Photo::find($id);
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $photo->update($input);
    
        return redirect('/dashboard/media')->with('status','Image updated successfully');
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);

        $photo->delete();

        return redirect('/dashboard/media')->with('status','Image Deleted');
    }
}
