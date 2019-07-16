<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Models\Event;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image;
use File;

class EventController extends Controller
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
        $events = Event::all();
        return view('admin.manage_event',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_event');
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
            'title' => 'required|string|max:500',
            'desc' => 'required|string|max:15000',
            'image' => 'required|image',
            'event_date' => 'required',
            'event_time' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $imageName = rand() . '.' . $img->getClientOriginalExtension();
            Image::make($request->file('image'))->resize(400, 320)->save('event_images/'.$imageName);
            Image::make($request->file('image'))->resize(1000, 400)->save('single_event_images/'.$imageName);
//            $img->move(public_path("event_images"), $imageName);
        }

        $event = new Event();
        $event->title = $request->title;
        $event->desc = $request->desc;
        $event->image = $imageName;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        $event->save();

        return back()->with('success','Event created successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.edit_event',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:500',
            'desc' => 'required|string|max:15000',
            'image' => 'image|nullable',
            'event_date' => 'required',
            'event_time' => 'required',
        ]);
        $event = Event::findOrFail($id);
        $imageName = $event->image;
        if ($request->hasFile('image')) {
//            delete previous image
            if (File::exists('event_images/' . $event->image)) {
                File::delete('event_images/' . $event->image);
            }
            if (File::exists('single_event_images/' . $event->image)) {
                File::delete('single_event_images/' . $event->image);
            }
            $img = $request->file('image');
            $imageName = rand() . '.' . $img->getClientOriginalExtension();
//            $img->move(public_path("event_images"), $imageName);
            Image::make($request->file('image'))->resize(400, 320)->save('event_images/'.$imageName);
            Image::make($request->file('image'))->resize(1000, 400)->save('single_event_images/'.$imageName);
        }

        $event->title = $request->title;
        $event->desc = $request->desc;
        $event->image = $imageName;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        $event->save();

        return back()->with('success','Event Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
       $event = Event::findOrFail($id);
       $event->delete();
        if (File::exists('event_images/' . $event->image)) {
            File::delete('event_images/' . $event->image);
        }
        if (File::exists('single_event_images/' . $event->image)) {
            File::delete('single_event_images/' . $event->image);
        }
        return back()->with('success','Event Delete successful');

    }
}
