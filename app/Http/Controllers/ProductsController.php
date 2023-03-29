<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
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
        $products = Product::orderByDesc('id')->paginate(10);

        return view('admin.product.index',[
            'products' => $products
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all()->where('status','Faol');
        return view('admin.product.create',[
            'subcategories' => $subcategories
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
            'subcategory_id'=>'required',
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_eng'=>'required',
            'model'=>'required',
            'photo' =>'required | image | mimetypes:image/jpeg,image/png',
            'text_uz'=>'required',
            'text_ru'=>'required',
            'text_eng'=>'required',
            'sizes'=>'required',
            'colors'=>'required',
        ]);

        $product = new Product;
        $product->subcategory_id = $data['subcategory_id'];
        $product->name_uz = $data['name_uz'];
        $product->name_ru = $data['name_ru'];
        $product->name_eng = $data['name_eng'];
        $product->model = $data['model'];
        $product->text_uz = $data['text_uz'];
        $product->text_ru = $data['text_ru'];
        $product->text_eng = $data['text_eng'];
        $product->sizes = $data['sizes'];
        $product->colors = $data['colors'];
        $product->description = $request['description'];
        $product->status = $request['status'];

        if ($request->isMethod('post') && $request->file('photo')) {
//            $file = $request->file('photo');
//            $upload_folder = 'public/assets/images/product';
//            $filename = $file->getClientOriginalName();
//            Storage::putFileAs($upload_folder, $file, $filename);
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/assets/images/product', $filename);
        }
        $product->photo = $filename;

        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.show',[
            'product' => $product
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
        $product = Product::findOrFail($id);
        $subcategories = Subcategory::all();
        return view('admin.product.update',[
            'subcategories' => $subcategories,
            'product' => $product,
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
            'subcategory_id'=>'required',
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_eng'=>'required',
            'model'=>'required',
            'photo' =>'image | mimetypes:image/jpeg,image/png',
            'text_uz'=>'required',
            'text_ru'=>'required',
            'text_eng'=>'required',
            'sizes'=>'required',
            'colors'=>'required',
        ]);

        $product = Product::findOrFail($id);
        $product->subcategory_id = $data['subcategory_id'];
        $product->name_uz = $data['name_uz'];
        $product->name_ru = $data['name_ru'];
        $product->name_eng = $data['name_eng'];
        $product->model = $data['model'];
        $product->text_uz = $data['text_uz'];
        $product->text_ru = $data['text_ru'];
        $product->text_eng = $data['text_eng'];
        $product->sizes = $data['sizes'];
        $product->colors = $data['colors'];
        $product->description = $request['description'];
        $product->status = $request['status'];

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/assets/images/product', $filename);
            $product->photo = $filename;
        }

        $product->update();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        File::delete(public_path().'/storage/assets/images/product/'.$product->photo);
        $product->delete();

        return redirect()->route('products.index');
    }

    public function status($id)
    {
        $product = Product::find($id);
        if($product->status=='Faol'){
            $product->status = 'Nofaol';
        }
        else{
            $product->status = 'Faol';
        }
        $product->update();

        return redirect()->route('products.index');
    }
}
