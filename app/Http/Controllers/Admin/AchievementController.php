<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use File;
use Image;

class AchievementController extends Controller
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
        $achievements = Achievement::all();
        return view('admin.manage_achievement',compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_achievement');

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
            'title' => 'required|string|max:500',
            'desc' => 'required|string|max:15000',
            'achiever' => 'required|string|max:255',
            'achiever_bio' => 'required|string|max:2000',
            'achievement_date' => 'required',
            'image' => 'required|image',
            'category' => 'required|string|max:250'
        ]);
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $imageName = rand() . '.' . $img->getClientOriginalExtension();
//            $img->move(public_path("achievement_images"), $imageName);
            Image::make($request->file('image'))->resize(800, 600)->save('achievement_images/'.$imageName);
            Image::make($request->file('image'))->resize(1000, 650)->save('single_achievement_images/'.$imageName);
        }

        $achievement = new Achievement();
        $achievement->title = $request->title;
        $achievement->desc = $request->desc;
        $achievement->achiever = $request->achiever;
        $achievement->achiever_bio = $request->achiever_bio;
        $achievement->achievement_date = $request->achievement_date;
        $achievement->image = $imageName;
        $achievement->category = $request->category;
        $achievement->save();
         return back()->with('success','Achievement created successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('admin.edit_achievement',compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:500',
            'desc' => 'required|string|max:15000',
            'achiever' => 'required|string|max:255',
            'achiever_bio' => 'required|string|max:2000',
            'achievement_date' => 'required',
            'image' => 'image',
            'category' => 'required|string|max:250'
        ]);
        $achievement = Achievement::findOrFail($id);
        $imageName = $achievement->image;

        if ($request->hasFile('image')) {
            if (File::exists('achievement_images/' . $achievement->image)) {
                File::delete('achievement_images/' . $achievement->image);
            }
            if (File::exists('single_achievement_images/' . $achievement->image)) {
                File::delete('single_achievement_images/' . $achievement->image);
            }
            $img = $request->file('image');
            $imageName = rand() . '.' . $img->getClientOriginalExtension();
//            $img->move(public_path("achievement_images"), $imageName);
            Image::make($request->file('image'))->resize(800, 600)->save('achievement_images/'.$imageName);
            Image::make($request->file('image'))->resize(1000, 650)->save('single_achievement_images/'.$imageName);
        }

        $achievement->title = $request->title;
        $achievement->desc = $request->desc;
        $achievement->achiever = $request->achiever;
        $achievement->achiever_bio = $request->achiever_bio;
        $achievement->achievement_date = $request->achievement_date;
        $achievement->image = $imageName;
        $achievement->category = $request->category;
        $achievement->save();
        return back()->with('success','Achievement Updates successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();
        if (File::exists('achievement_images/' . $achievement->image)) {
            File::delete('achievement_images/' . $achievement->image);
        }
        if (File::exists('single_achievement_images/' . $achievement->image)) {
            File::delete('single_achievement_images/' . $achievement->image);
        }
        return back()->with('success','Achievement Delete successful');
    }
}
