<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SubcategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\VacanciesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//})->name('home');

//Route::get('/salom', function () {
//    return "Salomlar" ;
//});

//Route::get('/salom/{name?}', function ($name=null) {
//    return "Salomlar: $name" ;
//});
//
//Route::get('/{action}/{name?}', function ($action = null, $name=null) {
//    return "Salomlar:$action - $name" ;
//});

//Route::get('/search', function (Request $request) {
//    $name = $request->get('name');
//    $age = $request->get('age',24);
//    return "Salom mening ismim $name, yoshim $age";
//});

//Route::get('/search', function (Request $request) {
//    return $request->all();
//});

//Route::group(['prefix'=>'dashboard'], function (){
//    Route::get('/about', function () {
//        return 'Dashboard about';
//    });
//    Route::get('/service', function () {
//        return 'Dashboard Service';
//    });
//});
//phpinfo();
//Route::get('/user/{id?}',[UserController::class,'show']);
//
//Route::get('/test/{id}', TestController::class);
//
//Route::get('/list',[UserController::class,'list']);
//
//Route::get('/home',[HomeController::class, 'index'])->name('index');
//Route::get('/members',[HomeController::class, 'members']);
//Route::get('/contact',[HomeController::class, 'contact']);
//Route::post('/contact/create',[HomeController::class, 'contact', ['abs'=>'aaa']]);

//Route::post('/contact/create', function () {
////    return Request::all();
//    dd(Request::all());
//})->name('contact-create');
//Route::post('/contact/create',[ContactController::class,'submit'])->name('contact-create');
//Route::post('/contact/create','ContactController@submit')->name('contact-create');
//Route::get('/brands',[BrandsController::class, 'brands'])->name('brands');
//Route::post('/brands/create',[BrandsController::class, 'create'])->name('brands-create');
//Route::get('/brands/all',[BrandsController::class, 'allBrands'])->name('all-brands');


Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/kategoriyalar',[HomeController::class, 'kategoriyalar'])->name('kategoriyalar');
Route::get('/kategoriya/{id}',[HomeController::class, 'kategoriya'])->name('kategoriya');
Route::get('/ichkikategoriyalar',[HomeController::class, 'ichkikategoriyalar'])->name('ichkikategoriyalar');
Route::get('/ichkikategoriya/{id}',[HomeController::class, 'ichkikategoriya'])->name('ichkikategoriya');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/vakant',[HomeController::class, 'vakant'])->name('vakant');
Route::get('/tovarlar',[HomeController::class, 'tovarlar'])->name('tovarlar');
Route::get('/tovar/{id}',[HomeController::class, 'tovar'])->name('tovar');
Route::get('/buyurtma/{id}',[HomeController::class, 'buyurtma'])->name('buyurtma');
Route::get('/blog',[HomeController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{id}',[HomeController::class, 'blogDetail'])->name('blog-detail');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');

Route::get('/admin',[AdminController::class, 'index'])->name('admin');
Route::get('/categories/status/{id}', [ CategoriesController::class, 'status'])->name('categories.status');
Route::resource('categories',CategoriesController::class);
Route::get('/subcategories/status/{id}', [ SubcategoriesController::class, 'status'])->name('subcategories.status');
Route::resource('subcategories',SubcategoriesController::class);
Route::get('/products/status/{id}', [ ProductsController::class, 'status'])->name('products.status');
Route::resource('products',ProductsController::class);
Route::resource('orders',OrdersController::class);
Route::get('/brands/status/{id}', [ BrandsController::class, 'status'])->name('brands.status');
Route::resource('brands',BrandsController::class);
Route::resource('contacts',ContactsController::class);
Route::get('/blogs/status/{id}', [ BlogsController::class, 'status'])->name('blogs.status');
Route::resource('blogs',BlogsController::class);
Route::get('/vacancies/status/{id}', [ VacanciesController::class, 'status'])->name('vacancies.status');
Route::resource('vacancies',VacanciesController::class);


Route::get('/locale/{lang}', function($lang){
    if($lang=='uz'){
        session()->put('locale-word','O`zbekcha');
    }
    else if($lang=='ru'){
        session()->put('locale-word','Русский');
    }
    else if($lang=='en'){
        session()->put('locale-word','English');
    }

    if(in_array($lang,['uz','ru','en'])){
        session()->put('locale',$lang);
    }
    return redirect()->back();
});

Auth::routes();

//Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
