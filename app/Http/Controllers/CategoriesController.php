<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CategoriesController extends Controller
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
        $categories = Category::orderByDesc('id')->paginate(10);

        return view('admin.category.index',[
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'photo' =>'required | file | mimetypes:image/jpeg,image/png',
        ]);

        $category = new Category;
        $category->name_uz = $data['name_uz'];
        $category->name_ru = $data['name_ru'];
        $category->name_eng = $data['name_eng'];
        $category->description = $request['description'];
        $category->status = $request['status'];

        if ($request->file('photo')) {
//            $file = $request->file('photo');
//            $upload_folder = 'public/assets/images/category';
//            $filename = $file->getClientOriginalName(); // image.jpg
//            Storage::putFileAs($upload_folder, $file, $filename);

            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/assets/images/category', $filename);
        }
        $category->photo = $filename;
        $category->save();

        return redirect()->route('categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.show',[
            'category' => $category
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
        $category = Category::findOrFail($id);
        return view('admin.category.update',[
            'category' => $category
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
            'photo' => 'file | mimetypes:image/jpeg,image/png',
        ]);

        $category = Category::findOrFail($id);
        $category->name_uz = $data['name_uz'];
        $category->name_ru = $data['name_ru'];
        $category->name_eng = $data['name_eng'];
        $category->description = $request['description'];
        $category->status = $request['status'];
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/assets/images/category', $filename);
            $category->photo = $filename;
        }

        $category->update();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        File::delete(public_path().'/storage/assets/images/category/'.$category->photo);

        $category->delete();

        return redirect()->route('categories.index');
    }

    public function status($id)
    {
        $category = Category::find($id);
        if($category->status=='Faol'){
            $category->status = 'Nofaol';
        }
        else{
            $category->status = 'Faol';
        }
        $category->update();

        return redirect()->route('categories.index');
    }

}
