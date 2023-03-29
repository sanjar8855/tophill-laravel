<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandsController extends Controller
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
        $brands = Brand::orderByDesc('id')->paginate(10);

        return view('admin.brand.index',[
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
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
            'name'=>'required',
            'description'=>'required',
            'photo' =>'required | image | mimetypes:image/jpeg,image/png',
        ]);

        $brand = new Brand;
        $brand->name = $data['name'];
        $brand->description = $request['description'];
        $brand->status = $request['status'];

        if ($request->isMethod('post') && $request->file('photo')) {
//            $file = $request->file('photo');
//            $upload_folder = 'public/assets/images/brand';
//            $filename = $file->getClientOriginalName();
//            Storage::putFileAs($upload_folder, $file, $filename);
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/assets/images/brand', $filename);
            $brand->photo = $filename;
        }

        $brand->save();

        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brand.show',[
            'brand' => $brand
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
        $brand = Brand::findOrFail($id);
        return view('admin.brand.update',[
            'brand' => $brand
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
            'name'=>'required',
            'description'=>'required',
            'photo' =>' image | mimetypes:image/jpeg,image/png',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->name = $data['name'];
        $brand->description = $request['description'];
        $brand->status = $request['status'];

        if ($request->isMethod('post') && $request->file('photo')) {
//            $file = $request->file('photo');
//            $upload_folder = 'public/assets/images/brand';
//            $filename = $file->getClientOriginalName();
//            Storage::putFileAs($upload_folder, $file, $filename);
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/assets/images/brand', $filename);
            $brand->photo = $filename;
        }
        $brand->update();

        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        File::delete(public_path().'/storage/assets/images/brand/'.$brand->photo);
        $brand->delete();

        return redirect()->route('brands.index');
    }

    public function status($id)
    {
        $brand = Brand::find($id);
        if($brand->status=='Faol'){
            $brand->status = 'Nofaol';
        }
        else{
            $brand->status = 'Faol';
        }
        $brand->update();

        return redirect()->route('brands.index');
    }

}
