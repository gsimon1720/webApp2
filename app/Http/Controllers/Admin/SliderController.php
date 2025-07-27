<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function Index(){
        $sliders = Slider::all();
        return view('admin.Home.slider',compact('sliders'));
    }

    public function storeslider(Request $request){
         $validated = $request->validate([
        'heading' => 'required|string|max:255',
        'sub_heading' => 'nullable|string|max:255',
        'paragraph' => 'nullable|string|max:1000',
        'button_text' => 'nullable|string|max:100',
        'animation_link' => 'nullable|url|max:255',
    ]);

     Slider::create([
        'heading'        => $validated['heading'],
        'sub_heading'    => $validated['sub_heading'] ?? null,
        'paragraph'      => $validated['paragraph'] ?? null,
        'button_text'    => $validated['button_text'] ?? null,
        'animation_link' => $validated['animation_link'] ?? null,
    ]);

     return redirect()->back()->with('success', 'Main content added successfully!');
    }

    public function updateslider(Request $request){
        $validated = $request->validate([
        'heading' => 'required|string|max:255',
        'sub_heading' => 'nullable|string|max:255',
        'paragraph' => 'nullable|string|max:1000',
        'button_text' => 'nullable|string|max:100',
        'animation_link' => 'nullable|url|max:255',
    ]);

    $update = Slider::find($request->slider_id);
    $update->heading = $validated['heading'];
    $update->sub_heading = $validated['sub_heading'];
    $update->paragraph = $validated['paragraph'];
    $update->button_text = $validated['button_text'];
    $update->animation_link = $validated['animation_link'];
    $update->save();

    return redirect()->back()->with('success', 'Main content updated successfully!');
    }

    public function deleteslider($id){
        $delete = Slider::find($id);
        $delete->delete();

        return redirect()->back()->with('success', 'Main content deleted successfully!');
    }
}
