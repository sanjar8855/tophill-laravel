<?php
use Illuminate\Support\Facades\Storage;
?>
@extends('admin.layout')

@section('admin-content')
    <div class="row justify-content-center">
        <div class="col-12 card">
            <h1>Ma'lumot qo'shish</h1>
{{--            <div class="card-body">--}}
{{--                @if ($errors->any())--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                <form role="form" class="text-start" action="{{route('subcategories.store')}}" method="post" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <div class="form-floating border border-radius-md">--}}
{{--                        <select name="category_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">--}}
{{--                            @foreach($products as $product)--}}
{{--                                <option value="{{$product->id}}">{{$product->firstname}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                        <label for="floatingSelect">Status</label>--}}
{{--                    </div>--}}
{{--                    <div class="input-group input-group-outline my-3">--}}
{{--                        <label class="form-label">Buyurt</label>--}}
{{--                        <input type="text" class="form-control" name="name_uz" value="{{old('name_uz')}}">--}}
{{--                    </div>--}}
{{--                    <div class="input-group input-group-outline my-3">--}}
{{--                        <label class="form-label">Ruscha nomi</label>--}}
{{--                        <input type="text" class="form-control" name="name_ru" value="{{old('name_ru')}}">--}}
{{--                    </div>--}}
{{--                    <div class="input-group input-group-outline my-3">--}}
{{--                        <label class="form-label">Inglizcha nomi</label>--}}
{{--                        <input type="text" class="form-control" name="name_eng" value="{{old('name_eng')}}">--}}
{{--                    </div>--}}
{{--                    <div class="input-group input-group-outline my-3">--}}
{{--                        <input type="file" class="form-control border" name="photo" value="{{old('photo')}}">--}}
{{--                    </div>--}}
{{--                    <div class="input-group input-group-outline my-3">--}}
{{--                        <label class="form-label">Izoh</label>--}}
{{--                        <input type="text" class="form-control" name="description" value="{{old('description')}}">--}}
{{--                    </div>--}}
{{--                    <div class="form-floating border border-radius-md">--}}
{{--                        <select name="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">--}}
{{--                            <option value="Faol">Faol</option>--}}
{{--                            <option value="Nofaol" selected>Nofaol</option>--}}
{{--                        </select>--}}
{{--                        <label for="floatingSelect">Status</label>--}}
{{--                    </div>--}}
{{--                    <div class="text-center">--}}
{{--                        <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Saqlash</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection()
