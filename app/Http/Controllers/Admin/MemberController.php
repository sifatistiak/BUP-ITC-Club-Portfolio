<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use File;
use Image;

class MemberController extends Controller
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
        $members = Member::where('status',1)->get();
        return view('admin.manage_member',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_member');
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
            'email' => 'required|unique:members|email|string|max:255',
            'phone' => 'required| digits:11|starts_with:01',
            'blood_group' => 'required|string|max:255',
            'current_address' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'home_district' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'department_roll' => 'required|integer',
            'designation' => 'required|string|max:255',
            'biography' => 'required|string|max:255',
            'skills' => 'required|string|max:255',
            'achievement' => 'required|string|max:255',
            'image' => 'required|image',

        ]);
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $imageName = rand() . '.' . $img->getClientOriginalExtension();
//            $img->move(public_path("member_images"), $imageName);
            Image::make($request->file('image'))->resize(500, 600)->save('member_images/'.$imageName);
            Image::make($request->file('image'))->resize(600, 700)->save('single_member_images/'.$imageName);
        }

        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->blood_group = $request->blood_group;
        $member->current_address = $request->current_address;
        $member->permanent_address = $request->permanent_address;
        $member->home_district = $request->home_district;
        $member->department = $request->department;
        $member->department_roll = $request->department_roll;
        $member->designation = $request->designation;
        $member->biography = $request->biography;
        $member->skills = $request->skills;
        $member->achievement = $request->achievement;
        $member->image = $imageName;
        $member->status = 1;
        $member->save();
        $member->club_id = "DUCC-".$member->id;
        $member->save();
        return back()->with('success','Member created successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.show_member',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.edit_member',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone' => 'required| digits:11|starts_with:01',
            'blood_group' => 'required|string|max:255',
            'current_address' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'home_district' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'department_roll' => 'required|integer',
            'designation' => 'required|string|max:255',
            'biography' => 'required|string|max:255',
            'skills' => 'required|string|max:255',
            'achievement' => 'required|string|max:255',
            'image' => 'image',

        ]);
        $member = Member::findOrFail($id);
        $imageName = $member->image;
        if ($request->hasFile('image')) {
            if (File::exists('member_images/' . $member->image)) {
                File::delete('member_images/' . $member->image);
            }
            if (File::exists('single_member_images/' . $member->image)) {
                File::delete('single_member_images/' . $member->image);
            }
            $img = $request->file('image');
            $imageName = rand() . '.' . $img->getClientOriginalExtension();
//            $img->move(public_path("member_images"), $imageName);
            Image::make($request->file('image'))->resize(500, 600)->save('member_images/'.$imageName);
            Image::make($request->file('image'))->resize(600, 700)->save('single_member_images/'.$imageName);
        }

        $member->name = $request->name;
        $member->phone = $request->phone;
        $member->blood_group = $request->blood_group;
        $member->current_address = $request->current_address;
        $member->permanent_address = $request->permanent_address;
        $member->home_district = $request->home_district;
        $member->department = $request->department;
        $member->department_roll = $request->department_roll;
        $member->designation = $request->designation;
        $member->biography = $request->biography;
        $member->skills = $request->skills;
        $member->achievement = $request->achievement;
        $member->image = $imageName;
        $member->status = 1;
        $member->save();
        $member->club_id = "DUCC-".$member->id;
        $member->save();
        return back()->with('success','Member Updated successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        if (File::exists('member_images/' . $member->image)) {
            File::delete('member_images/' . $member->image);
        }
        if (File::exists('single_member_images/' . $member->image)) {
            File::delete('single_member_images/' . $member->image);
        }
        return back()->with('success','Member Delete successful');
    }


    public function requests()
    {
        $members = Member::where('status',0)->get();
        return view('admin.request_member',compact('members'));
    }

    public function accept($id)
    {
        $member = Member::findOrFail($id);
        $member->status = 1;
        $member->save();
        return back()->with('success','Member has been added to the list.');
    }
}
