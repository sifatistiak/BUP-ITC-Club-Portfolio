<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use File;
use Image;
class BlogController extends Controller
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
        $blogs = Blog::all();
        return view('admin.manage_blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_blog');
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
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:10000',
            'posted_by' => 'required|string|max:255',
            'image' => 'required|image',

        ]);
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $imageName = rand() . '.' . $img->getClientOriginalExtension();
//            $img->move(public_path("blog_images"), $imageName);
            Image::make($request->file('image'))->resize(500, 400)->save('blog_images/'.$imageName);
            Image::make($request->file('image'))->resize(800, 450)->save('single_blog_images/'.$imageName);
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->posted_by = $request->posted_by;
        $blog->image = $imageName;
        $blog->save();

        return back()->with('success','Blog created successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.edit_blog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:10000',
            'posted_by' => 'required|string|max:255',

        ]);
        $blog = Blog::findOrFail($id);
        $imageName = $blog->image;
        if ($request->hasFile('image')) {
//            delete previous image
            if (File::exists('blog_images/' . $blog->image)) {
                File::delete('blog_images/' . $blog->image);
            }
            if (File::exists('single_blog_images/' . $blog->image)) {
                File::delete('single_blog_images/' . $blog->image);
            }
            $img = $request->file('image');
            $imageName = rand() . '.' . $img->getClientOriginalExtension();
//            $img->move(public_path("blog_images"), $imageName);
            Image::make($request->file('image'))->resize(500, 400)->save('blog_images/'.$imageName);
            Image::make($request->file('image'))->resize(800, 450)->save('single_blog_images/'.$imageName);
        }

        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->posted_by = $request->posted_by;
        $blog->image = $imageName;

        $blog->save();

        return back()->with('success','Blog Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        if (File::exists('blog_images/' . $blog->image)) {
            File::delete('blog_images/' . $blog->image);
        }

        if (File::exists('single_blog_images/' . $blog->image)) {
            File::delete('single_blog_images/' . $blog->image);
        }
        return back()->with('success','Blog Delete successful');

    }
}
