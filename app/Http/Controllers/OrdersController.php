<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class OrdersController extends Controller
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
        $orders = Order::orderByDesc('id')->paginate(10);

        return view('admin.order.index',[
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all()->where('status','Faol');
        return view('admin.order.create',[
            'products' => $products
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
        $order = new Order;
        $order->product_id = $request['product_id'];
        $order->firstname = $request['firstname'];
        $order->phone = $request['phone'];
        $order->description = $request['description'];
        $order->status = $request['status'];
        $order->save();

//        return view('tovar', [
//            'id' => $request['product_id']
//        ]);

        $product = Product::findOrFail($request['product_id']);
        $subcategory = Subcategory::findOrFail($product->subcategory_id);
        $category = Category::findOrFail($subcategory->category_id);

        return view('tovar', [
            'product' => $product,
            'subcategory' => $subcategory,
            'category' => $category,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.order.show',[
            'order' => $order
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
        $order = Order::findOrFail($id);
        $products = Product::all();
        return view('admin.order.update',[
            'products' => $products,
            'order' => $order,
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
            'product_id'=>'required',
            'firstname'=>'required',
            'phone'=>'required',
            'status'=>'required',
        ]);

        $order = Order::findOrFail($id);
        $order->product_id = $data['product_id'];
        $order->firstname = $data['firstname'];
        $order->phone = $data['phone'];
        $order->description = $request['description'];
        $order->status = $request['status'];
        $order->update();

        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index');
    }
}
