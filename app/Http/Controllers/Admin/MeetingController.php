<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Jobs\SendMeetingEmailJob;
use App\Models\User;
use App\Models\Meeting;
use App\Models\Member;
use App\Notifications\SendMeetingEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
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
        $meetings = Meeting::orderBy('date','desc')->paginate(8);
        return view('admin.manage_meeting', compact('meetings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return Member::where('status', 1)->first();
        return view('admin.send_meeting_email');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required|string|max:255',
            'desc' => 'required|string|max:10000',
            'date' => 'required',
            'time' => 'required',
        ]);
        $meeting = new Meeting();
        $meeting->subject = $request->subject;
        $meeting->desc = $request->desc;
        $meeting->date = $request->date;
        $meeting->time = $request->time;
        $meeting->save();
//send email

        $users = Member::where('status',1)->get();
        foreach ($users as $user) {
        SendMeetingEmailJob::dispatch($user, $meeting)->delay(now()->addSecond(5));;
//            $user->notify(new SendMeetingEmailNotification($meeting));


        }


        return back()->with('success', 'Email for meeting send successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meeting $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meeting $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Meeting $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meeting $meeting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meeting $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meeting $meeting)
    {
        //
    }
}
