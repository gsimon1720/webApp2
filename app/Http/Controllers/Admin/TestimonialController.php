<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'photo_url' => 'required|url',
            'message' => 'required',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        Testimonial::create($validated);
        return redirect()->route('testimonials.index')->with('success', 'Testimonial added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'photo_url' => 'required|url',
            'message' => 'required',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        $testimonial->update($validated);
        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('success', 'Deleted successfully.');
    }
}
