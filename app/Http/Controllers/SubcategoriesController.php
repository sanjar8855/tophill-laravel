<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubcategoriesController extends Controller
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
        $subcategories = Subcategory::orderByDesc('id')->paginate(10);

        return view('admin.subcategory.index',[
            'subcategories' => $subcategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->where('status','Faol');
        return view('admin.subcategory.create',[
            'categories' => $categories
        ]);
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
            'category_id'=>'required',
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_eng'=>'required',
            'photo' =>'required | image | mimetypes:image/jpeg,image/png',
        ]);

        $subcategory = new Subcategory;
        $subcategory->category_id = $data['category_id'];
        $subcategory->name_uz = $data['name_uz'];
        $subcategory->name_ru = $data['name_ru'];
        $subcategory->name_eng = $data['name_eng'];
        $subcategory->description = $request['description'];
        $subcategory->status = $request['status'];

        if ($request->isMethod('post') && $request->file('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/assets/images/subcategory', $filename);
        }
        $subcategory->photo = $filename;

        $subcategory->save();

        return redirect()->route('subcategories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        return view('admin.subcategory.show',[
            'subcategory' => $subcategory
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
        $subcategory = Subcategory::findOrFail($id);
        $categories = Category::all();

        return view('admin.subcategory.update',[
            'categories' => $categories,
            'subcategory' => $subcategory,
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
            'category_id'=>'required',
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_eng'=>'required',
            'photo' =>'image | mimetypes:image/jpeg,image/png',
        ]);

        $subcategory = Subcategory::findOrFail($id);
        $subcategory->category_id = $data['category_id'];
        $subcategory->name_uz = $data['name_uz'];
        $subcategory->name_ru = $data['name_ru'];
        $subcategory->name_eng = $data['name_eng'];
        $subcategory->description = $request['description'];
        $subcategory->status = $request['status'];
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/assets/images/subcategory', $filename);
        }
        $subcategory->photo = $filename;

        $subcategory->update();

        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        File::delete(public_path().'/storage/assets/images/subcategory/'.$subcategory->photo);
        $subcategory->delete();

        return redirect()->route('subcategories.index');
    }

    public function status($id)
    {
        $subcategory = Subcategory::find($id);
        if($subcategory->status=='Faol'){
            $subcategory->status = 'Nofaol';
        }
        else{
            $subcategory->status = 'Faol';
        }
        $subcategory->update();

        return redirect()->route('subcategories.index');
    }
}
