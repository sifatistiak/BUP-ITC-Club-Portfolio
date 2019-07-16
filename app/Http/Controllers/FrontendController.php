<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Member;
use App\Models\Notice;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        $events = Event::orderBy('event_date','desc')->paginate(3);
        $achievements = Achievement::orderBy('achievement_date','desc')->paginate(6);
        $members = Member::where('status',1)->paginate(4);
        $testimonials = Testimonial::paginate(4);
        $blogPosts = Blog::paginate(3);
        return view('frontend.index',compact('events','achievements','members','testimonials','blogPosts'));
    }

    public function events()
    {
        $events = Event::all();
        return view('frontend.events',compact('events'));
    }
    public function singleEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('frontend.single_event',compact('event'));
    }

    public function achievements()
    {
        $achievements = Achievement::all();
        return view('frontend.achievements',compact('achievements'));
    }

    public function singleAchievement($id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('frontend.single_achievement',compact('achievement'));
    }


    public function blog()
    {
        $blogPosts = Blog::all();
        return view('frontend.blog',compact('blogPosts'));
    }
    public function singleBlog($id)
    {
        $blogPost = Blog::findOrFail($id);
        $blogPosts = Blog::paginate(3);
        return view('frontend.single_blog',compact('blogPost','blogPosts'));
    }

    public function members()
    {
        $members = Member::where('status',1)->get();
        return view('frontend.members',compact('members'));
    }

    public function singleMember($id)
    {
        $member = Member::findOrFail($id);
        return view('frontend.single_member',compact('member'));
    }

    public function beAMember()
    {
        return view('frontend.be_a_member');
    }

    public function submitMember(Request $request)
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
            $img->move(public_path("member_images"), $imageName);
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
        $member->status = 0;
        $member->save();
        $member->club_id = "DUCC-".$member->id;
        $member->save();
        return back()->with('success','Member request submit successful.');
    }


}
