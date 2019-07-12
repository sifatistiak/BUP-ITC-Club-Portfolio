<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use File;

class TestimonialController extends Controller
{
    public function __construct()
    {
        AdminHelper::middleware($this);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.manage_testimonial',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_testimonial');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'desc' => 'required|string|max:10000',
            'image' => 'required|image',
        ]);
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $imageName = rand() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path("testimonial_images"), $imageName);
        }

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->desc = $request->desc;
        $testimonial->image = $imageName;
        $testimonial->save();

        return back()->with('success','Testimonial created successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.edit_testimonial',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'desc' => 'required|string|max:10000',
            'image' => 'image',
        ]);
        $testimonial = Testimonial::findOrFail($id);
        $imageName = $testimonial->image;
        if ($request->hasFile('image')) {
//            delete previous image
            if (File::exists('testimonial_images/' . $testimonial->image)) {
                File::delete('testimonial_images/' . $testimonial->image);
            }
            $img = $request->file('image');
            $imageName = rand() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path("testimonial_images"), $imageName);
        }

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->desc = $request->desc;
        $testimonial->image = $imageName;
        $testimonial->save();

        return back()->with('success','Testimonial Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        if (File::exists('testimonial_images/' . $testimonial->image)) {
            File::delete('testimonial_images/' . $testimonial->image);
        }
        return back()->with('success','Testimonial Delete successful');

    }
}

