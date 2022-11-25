<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $slider=Slider::paginate(8);
        return view('slider', ['slider' => $slider]);

    }

    public function newSlider()
    {
        return view('createSlider');
    }
    public function store(Request $request)
    {

        /*$validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|',
            'link' => 'required'
        ]);*/
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $save = new Slider;
        $save->name = $request->name;
        $save->image = $imageName;

        $save->link=$request->link;
        $save->save();
        $slider=Slider::all();
        return view('slider', ['slider' => $slider]);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $slider
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Slider $slider)
    {

        $slider->delete();
        return redirect()->back();

    }
}
