<?php
use App\Models\Product;
?>
@extends('admin.layout')

@section('admin-content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Buyurtma ID - {{$order->id}}</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <a href="{{route('orders.index')}}" class="btn btn-success ms-5">Orqaga qaytish</a>
                    <div class="table-responsive p-0">
                        <table class="table table-bordered">
                            <tr>
                                <td>Tovar nomi</td>
                                <td>
                                    <a href="{{ route('products.show', ['product' => $order->product_id] )}}" class="mb-0">
                                        {{Product::getNameByProductId($order->product_id)}}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Buyurtmachi ismi</td>
                                <td>{{$order->firstname}}</td>
                            </tr>
                            <tr>
                                <td>Telefon raqami</td>
                                <td>{{$order->phone}}</td>
                            </tr>
                            <tr>
                                <td>Izoh</td>
                                <td>{{$order->description}}</td>
                            </tr>
                            <tr>
                                <td>Statusi</td>
                                <td>{{$order->status}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
