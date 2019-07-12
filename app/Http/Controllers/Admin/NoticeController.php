<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use File;

class NoticeController extends Controller
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
        $notices = Notice::all();
        return view('admin.manage_notice',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_notice');
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
            'desc' => 'required|string|max:10000',
            'posted_by' => 'required|string|max:255',
            'notice_from' => 'required|string|max:255',
            'date' => 'required',
        ]);
        $notice = new Notice();
        $notice->title = $request->title;
        $notice->desc = $request->desc;
        $notice->date = $request->date;
        $notice->posted_by = $request->posted_by;
        $notice->notice_from = $request->notice_from;
        $notice->save();

        return back()->with('success','Notice created successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::findOrFail($id);
        return view('admin.edit_notice',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:500',
            'desc' => 'required|string|max:10000',
            'posted_by' => 'required|string|max:255',
            'notice_from' => 'required|string|max:255',
            'date' => 'required',
        ]);
        $notice = Notice::findOrFail($id);

        $notice->title = $request->title;
        $notice->desc = $request->desc;
        $notice->date = $request->date;
        $notice->posted_by = $request->posted_by;
        $notice->notice_from = $request->notice_from;
        $notice->save();

        return back()->with('success','Notice Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();
        return back()->with('success','Notice Delete successful');

    }
}
