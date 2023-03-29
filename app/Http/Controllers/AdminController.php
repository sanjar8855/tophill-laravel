<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $orders = Order::all()->sortByDesc('id')->take(5);
        $contacts = Contact::all()->sortByDesc('id')->take(5);

        return view('admin.index',[
            'orders' => $orders,
            'contacts' => $contacts,
            'bajarildi' => Order::all()->where('status','Bajarildi')->count(),
            'waiting' => Order::all()->where('status','Kutmoqda')->count(),
            'conwait' => Contact::all()->where('status','Kutmoqda')->count(),
            'conbaj' => Contact::all()->where('status','Bajarildi')->count(),

        ]);
    }

}
