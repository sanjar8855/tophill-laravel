<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Vacancy;
use App\Models\Blog;
use App\Models\Brand;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $categories = Category::all()->where('status','Faol')->take(3);
        $brands = Brand::all()->where('status','Faol')->take(8);

        return view('index', [
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    public function about(){
        return view('about');
    }

    public function vakant(){
        $vacancies = Vacancy::all()->where('status','Faol');

        return view('vakant', [
            'vacancies' => $vacancies
        ]);
    }

    public function kategoriyalar(){
        $categories = Category::all()->where('status','Faol');

        return view('kategoriyalar', [
            'categories' => $categories
        ]);
    }

    public function kategoriya($id){
        $subcategories = Subcategory::all()->where('status','Faol')->where('category_id',$id);

        return view('kategoriya', [
            'subcategories' => $subcategories
        ]);
    }

    public function ichkikategoriyalar(){
        $subcategories = Subcategory::all()->where('status','Faol');

        return view('ichkikategoriyalar', [
            'subcategories' => $subcategories
        ]);
    }

    public function ichkikategoriya($id){
        $products = Product::all()->where('status','Faol')->where('subcategory_id',$id);

        return view('ichkikategoriya', [
            'products' => $products
        ]);
    }

    public function tovarlar(){
        $categories = Category::all()->where('status','Faol');
        $products = Product::all()->where('status','Faol');

        return view('tovarlar',[
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function tovar($id){
        $product = Product::findOrFail($id);
        $subcategory = Subcategory::findOrFail($product->subcategory_id);
        $category = Category::findOrFail($subcategory->category_id);
        return view('tovar', [
            'product' => $product,
            'subcategory' => $subcategory,
            'category' => $category,
        ]);
    }

    public function blog(){
        $blogs = Blog::all()->where('status','Faol');

        return view('blog',[
            'blogs' => $blogs,
        ]);
    }

    public function blogDetail($id){
        $blog = Blog::findOrFail($id);

        return view('blog-detail',[
            'blog' => $blog,
        ]);
    }

    public function contact(){
        return view('contact');
    }

}
