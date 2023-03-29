<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderByDesc('id')->paginate(10);

        return view('admin.blog.index',[
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_eng'=>'required',
            'text_uz'=>'required',
            'text_ru'=>'required',
            'text_eng'=> 'required',
            'sana'=> 'required | date',
            'photo' => 'required | image | mimetypes:image/jpeg,image/png',
            'status' => 'required',
        ]);

        $blog = new Blog;
        $blog->name_uz = $data['name_uz'];
        $blog->name_ru = $data['name_ru'];
        $blog->name_eng = $data['name_eng'];
        $blog->text_uz = $data['text_uz'];
        $blog->text_ru = $data['text_ru'];
        $blog->text_eng = $data['text_eng'];
        $blog->sana = $data['sana'];
        $blog->youtube_link = $request['youtube_link'];
        $blog->description = $request['description'];
        $blog->status = $request['status'];

        if ($request->isMethod('post') && $request->file('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/assets/images/blog', $filename);
            $blog->photo = $filename;
        }

        $blog->save();

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.show',[
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.update',[
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_eng'=>'required',
            'text_uz'=>'required',
            'text_ru'=>'required',
            'text_eng'=> 'required',
            'sana'=> 'required | date',
            'photo' => 'image | mimetypes:image/jpeg,image/png',
            'status' => 'required',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->name_uz = $data['name_uz'];
        $blog->name_ru = $data['name_ru'];
        $blog->name_eng = $data['name_eng'];
        $blog->text_uz = $data['text_uz'];
        $blog->text_ru = $data['text_ru'];
        $blog->text_eng = $data['text_eng'];
        $blog->sana = $data['sana'];
        $blog->youtube_link = $request['youtube_link'];
        $blog->description = $request['description'];
        $blog->status = $request['status'];

        if ($request->isMethod('post') && $request->file('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/assets/images/blog', $filename);
            $blog->photo = $filename;
        }

        $blog->update();

        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        File::delete(public_path().'/storage/assets/images/blog/'.$blog->photo);
        $blog->delete();

        return redirect()->route('blogs.index');
    }

    public function status($id)
    {
        $blog = Blog::find($id);
        if($blog->status=='Faol'){
            $blog->status = 'Nofaol';
        }
        else{
            $blog->status = 'Faol';
        }
        $blog->update();

        return redirect()->route('blogs.index');
    }

}
